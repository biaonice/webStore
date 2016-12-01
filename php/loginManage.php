<?php
/**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/11/22
 * Time: 10:40
 */

/*
 *  $con=mysql_connect("localhost","root","124079");
    mysql_select_db("webstore",$con);
    $result=mysql_query("select price,adress,commit from eg");
    $data=array();
    while($row=mysql_fetch_array($result)){
        $data[]=array(
            'price'=>"$row[price]",
            'adress'=>"$row[adress]",
            'commit'=>"$row[commit]"
        );
    };
    echo json_encode($data);
    mysql_close($con);
*/





$con=mysql_connect("localhost","root","124079");
mysql_select_db("webstore",$con);
/*$result=mysql_query("select price,adress,commit from eg");
$admin=mysql_query("select * from admin");
$data=array();

while($row=mysql_fetch_array($result)){
    $data[]=array(
        'price'=>"$row[price]",
        'adress'=>"$row[adress]",
        'commit'=>"$row[commit]",
    );
};
echo json_encode($data);
mysql_close($con);*/



$result=mysql_query("select * from view_data");
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
        'discount'=>"$row[discount]",
        'adress'=>"$row[adress]"
    );
};
echo json_encode($data);
mysql_close($con);


?>