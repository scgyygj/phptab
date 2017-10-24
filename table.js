$(function(){
	let tbody=$('tbody');
	$.ajax({
		type:'get',
		url:'query.php',
		dataType:'json',	
		success:function(data){
			console.log(data);
			$.each(data,function(index,element) {
				creats(element);
			})
		}
		})
	
	//更新
	tbody.on('dblclick','td[class!=del]',function(e){
		let   element=$(e.target);
		let   oval=element.text();
		element.text('');
		$('<input>').appendTo(element).val(oval).blur(function(){
			let nval=$(this).val();
			$(this).remove();
			element.text(nval);
		let info=element.attr('type');
		let id=element.closest('tr').attr('id');
		$.ajax({
			type:'get',
			url:'update.php',
			data:({value:nval,info,id}),
			success:function(data){
				if(data){
					alert('修改成功');
				}else{
					alert('修改失败');
				}
			}
		})
		})
	})
	
	//删除
	tbody.on('click','td[class=del]',function(e){
		let element=$(e.target);
		let id=element.closest('tr').attr('id');
		let trs=element.closest('tr');		
		trs.remove();
		$.ajax({
			type:'get',
			url:'del.php',
			data:{id},
			success:function(data){

				if(data){

					alert('删除成功');
				}else{
					alert('删除失败');
				}
			}
		})
		
	})
	//插入
	let add=$('.add');        //id=data;
	add.on('click',function(){
		$.ajax({
            url:'insert.php',
            success:function (data) {
            	console.log(data);
                creats({id:data,name:'',age:'',sex:'',tel:'',address:'',classes:''});
            }

    })

	})

		function creats(data){
			tbody.html(function(index,value){
				return value+ `<tr id='${data.id}'>
				<td type='name'>${data.name}</td>
				<td type='age'>${data.age}</td>
				<td type='sex'>${data.sex}</td>
				<td type='tel'>${data.tel}</td>
				<td type='address'>${data.address}</td>
				<td type='classes'>${data.classes}</td>
				<td class='del'><button>删除</button></td>
				</tr>`
			})
			
		}
	
	
	
	
	
	
	
	
	
	
	
})
