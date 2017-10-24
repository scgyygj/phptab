<?php
header('Content-type:textml;charset=utf8');
$mysql=new mysqli('localhost','root','','zyx2017.10.13',3306);
$mysql->query('set names utf8');
if($mysql->connect_errno){
	echo '数据库连接失败,失败信息'.$mysql->connect_errno;
	exit;
}
$sql='select * from student';     //SQL查询语句
$result=$mysql->query($sql);
$data=$result->fetch_all(MYSQLI_ASSOC);  
//var_dump($data);        //打印在页面中;
echo json_encode($data);

//header('Content-type:textml;charset=utf8');
//$mysql=new mysqli('localhost','root','','zyx2017.10.13',3306);
//$mysql->query('set names utf8');
//if($mysql->connect_errno){
//	echo '数据库连接失败，失败信息'.$mysql->connect_errno;
//	exit;
//}
//$sql='select * from student';
//$result = $mysql -> query($sql);
//$data=$result->fetch_all(MYSQLI_ASSOC);
//echo json_encode($data);
?>
