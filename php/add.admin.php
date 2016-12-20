<?php
/**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/12/5
 * Time: 8:53
 */
$con=mysql_connect("localhost","root","124079");
mysql_select_db("webstore",$con);
//$result=mysql_query("select * from admin");
//$data=array();
$name=$_POST['adminName'];
$password=$_POST['password'];

//while($row=mysql_fetch_array($result)) {
//    $data[] = array(
//        'name' => "$row[name]",
//        'password' => "$row[password]",
//    );
//}
/* 把接受的表单数据写入数据库...*/
$sql = "INSERT INTO `admin` (`id`, `name`, `password`) VALUES (NULL, '$name', '$password')";
mysql_query($sql);
//echo json_encode($data);
mysql_close($con);


?>