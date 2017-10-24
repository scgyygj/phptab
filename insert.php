<?php
header('Content-type:textml;charset=utf8');  //住浏览器里放时的字符集
$mysql=new mysqli('localhost','root','','zyx2017.10.13',3306);  //连接数据库
$mysql->query('set names utf8');//查询时的字符集
if($mysql->connect_errno){
    echo '数据库连接失败,失败信息'.$mysql->connect_errno;
    exit;       //失败就不运行下边的内容了
}
//$sql="insert into student (name,age,sex,tel,address,classes) values ('','','','','','')";
$sql="INSERT INTO student (`name`, `age`, `sex`, `tel`, `address`, `classes`) VALUES ('', ' ', '', '', '', '')";
$mysql->query($sql);   //查询
echo $mysql->insert_id;














?>