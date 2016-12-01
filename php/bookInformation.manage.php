<?php
/**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/12/1
 * Time: 15:09
 */
$con=mysql_connect("localhost","root","124079");
mysql_select_db("webstore",$con);
$result=mysql_query("select * from book_detail");
$data=array();
while($row=mysql_fetch_array($result)){
    $data[]=array(
        'id'=>"$row[id]",
        'name'=>"$row[name]",
        'author'=>"$row[author]",
        'press'=>"$row[press]",
        'printing_time'=>"$row[printing_time]",
        'price'=>"$row[price]",
        'comment'=>"$row[comment]",
        'publication'=>"$row[publication]",
        'commit'=>"$row[commit]",
        'discount'=>"$row[discount]"
    );
};
echo json_encode($data);
mysql_close($con);


?>