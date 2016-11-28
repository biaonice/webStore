<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>图书商城</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/webStore.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="SHORTCUT ICON" href="image/123.gif">
</head>
<body>
<?php
    include "src/navbar.inc.php";
//    include "src/header.inc.php";
    include "src/login.php";
?>






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
    echo "ID: ".$row->id."    text: ".$row->name."
\n";
}

?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>