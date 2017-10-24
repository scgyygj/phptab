<?php
header('Content-type:textml;charset=utf8');  //住浏览器里放时的字符集
$mysql=new mysqli('localhost','root','','zyx2017.10.13',3306);  //连接数据库
$mysql->query('set names utf8');//查询时的字符集
if($mysql->connect_errno){
	echo '数据库连接失败,失败信息'.$mysql->connect_errno;
	exit;       //失败就不运行下边的内容了
}
$value=$_GET['value'];
$info=$_GET['info'];
$id=$_GET['id'];
$sql="update student set $info='$value' where id=$id";      //更新
$mysql->query($sql);   //查询
if($mysql->affected_rows){          //标记是否成功
	echo true;
}else{
	echo false;
}













?>