<?php
/**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/11/22
 * Time: 10:40
 */
$con=mysql_connect("localhost","root","124079");
mysql_select_db("webstore",$con);
$data=array();
$name=$_POST['userName'];
$password=$_POST['password'];
$sql="select * from user where $name='username' AND $password='password'";
//$sql_user="select * FROM user";
//$con=mysql_query($sql_user);
$result=mysql_query($sql);
if($result){
    while($row=mysql_fetch_array($result)){
        $data[]=array(
            'name'=>"$row[username]",
            'password'=>"$row[password]",
        );
    };
}


echo json_encode($data);



?>