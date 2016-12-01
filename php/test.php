<?php
/**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/12/1
 * Time: 15:18
 */


    $con=mysql_connect("localhost","root","124079");
    mysql_select_db("webstore",$con);
    $result=mysql_query("select price,adress,commit from admin");
    $data=array();
    while($row=mysql_fetch_array($result)){
        $data[]=array(
            'id'=>"$row[id]",
            'name'=>"$row[name]",
            'password'=>"$row[password]"
        );
    };
    echo json_encode($data);
    mysql_close($con);


?>