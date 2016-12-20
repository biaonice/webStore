<?php
/**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/12/1
 * Time: 15:28
 */
$con=mysql_connect("localhost","root","124079");
mysql_select_db("webstore",$con);
$result=mysql_query("select * from user");
$data=array();
$name=$_POST['userName'];
$password=$_POST['password'];
$email=$_POST['email'];

while($row=mysql_fetch_array($result)) {
    $data[] = array(
        'name' => "$row[username]",
        'password' => "$row[password]",
        'email' => "$row[email]"
    );
}
/* 把接受的表单数据写入数据库...*/
$sql = "INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES (NULL, '$name', '$password', '$email')";
mysql_query($sql);

echo json_encode($data);
mysql_close($con);






?>