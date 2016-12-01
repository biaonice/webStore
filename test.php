<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/webStore.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

    </style>
</head>
<body>
<div id="login">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.tmpl.js"></script>



    <div>
        <div id="test1" refresh="test"><span id="test"></span></div>
    </div>

    <script>
        $(function(){
            function main(){
                $.ajax({
                    url:"php/loginManage.php",
                    type:'POST',
                    dataType:"json",
                    success:function(result){
                        console.log(result);
                        $('#test').html(result[1].id);
                    },
                    error:function(){
                        console.log("error");
                    }
                });
            }
            main();







            //        var data=[
//            {
//                price:"1234",
//                commit:"5320",
//                adress:"安徽合肥"
//            },{
//                price:"1564",
//                commit:"5332",
//                adress:"安徽蚌埠"
//            },{
//                price:"1294",
//                commit:"3532",
//                adress:"安徽阜阳"
//            },{
//                price:"1834",
//                commit:"5332",
//                adress:"安徽合肥"
//            },{
//                price:"1334",
//                commit:"1532",
//                adress:"安徽合肥"
//            }
//        ];
//        console.log(data);
////        $("#main1").tmpl(data).appendTo('#main');
//        $("#main").tmpl(data).appendTo('#Box');



        })
    </script>

</div>
</body>
</html>