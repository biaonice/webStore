<?php
/**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/12/5
 * Time: 9:21
 */
$con=mysql_connect("localhost","root","124079");
mysql_select_db("webstore",$con);
//$result=mysql_query("select * from admin");
$data=array();
$name=$_POST['adminName'];
$password=$_POST['password'];
$index=$_POST['indexof'];

//while($row=mysql_fetch_array($result)) {
    $data[] = array(
        'name' => "$name",
        'password' => "$password",
    );
//}
/* 把接受的表单数据写入数据库...*/
$sql = "UPDATE `admin` SET `name` = '$name', `password` = '$password' WHERE `admin`.`id` = '$index'";
mysql_query($sql);
echo json_encode($data);
mysql_close($con);


?>