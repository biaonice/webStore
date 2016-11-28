<?php
/**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/11/22
 * Time: 10:40
 */
$con=mysql_connect("localhost","root","124079");
mysql_select_db("webStore",$con);
$name=$_post["username"];
$possword=$_post["possword"];
$result=mysql_query("select id,name from admin");
while($row=mysql_fetch_object($result)){
    echo "".$row->id."     ".$row->name."\n";
}
?>