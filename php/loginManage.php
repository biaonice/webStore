<?php
/**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/11/22
 * Time: 10:40
 */
$con=mysql_connect("localhost","root","124079");
mysql_select_db("webstore",$con);
$result=mysql_query("select * from user");
$data=array();
while($row=mysql_fetch_array($result)){
    $data[]=array(
        'id'=>"$row[id]",
        'name'=>"$row[username]",
        'password'=>"$row[password]",
        'email'=>"$row[email]",
        'phone'=>"$row[phone]",
        'adress'=>"$row[adress]"
    );
};
echo json_encode($data);
mysql_close($con);
?>