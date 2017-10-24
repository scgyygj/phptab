<?php
header('Content-type:textml;charset=utf8');  //住浏览器里放时的字符集
$mysql=new mysqli('localhost','root','','zyx2017.10.13',3306);  //连接数据库
$mysql->query('set names utf8');//查询时的字符集
if($mysql->connect_errno){
	echo '数据库连接失败,失败信息'.$mysql->connect_errno;
	exit;
}
$id=$_GET['id'];
$sql="delete from student where id=$id";
$mysql->query($sql);   //查询
if($mysql->affected_rows){
	echo true;
}else{
	echo false;
}
?>