<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>购物车</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/webStore.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="shopping">
    <div class="main">
        <div class="navTitle container">
            <h3><span>购物车&nbsp;&nbsp;&nbsp;</span></h3>
        </div>
        <hr />
    </div>

    <div class="shoppingCar container">
        <div class="title"></div>

        <div class="table">
            <div class="thead">
                <span><input type="checkbox">全选</span>
                <span>商品信息</span>
                <span>单价(元)</span>
                <span>数量</span>
                <span>金额(元)</span>
                <span>操作</span>
            </div>
            <div class="tbody">
                <span><input type="checkbox" checked></span>
                <span><img src="" alt="" width="70" height="70"></span>
                <span><a href="">书名书名书名名书名书名</a></span>
                <span>123</span>
                <span><i>-</i><input type="text" value="1"><i>+</i></span>
                <span>246</span>
                <span><a href="">删除</a></span>
            </div>
            <div class="tbody">
                <span><input type="checkbox" checked></span>
                <span><img src="" alt="" width="70" height="70"></span>
                <span><a href="">书名书名书名名书名书名</a></span>
                <span>123</span>
                <span><i>-</i><input type="text" value="1"><i>+</i></span>
                <span>246</span>
                <span><a href="">删除</a></span>
            </div>
            <div class="tbody">
                <span><input type="checkbox" checked></span>
                <span><img src="" alt="" width="70" height="70"></span>
                <span><a href="">书名书名书名名书名书名</a></span>
                <span>123</span>
                <span><i>-</i><input type="text" value="1"><i>+</i></span>
                <span>246</span>
                <span><a href="">删除</a></span>
            </div>

            <div class="tbottom">
                <div class="left">
                    <span><input type="checkbox" checked>全选</span>
                    <span><a href="">批量删除</a></span>
                    <span>已选<i>3</i>件商品</span>
                </div>
                <div class="right">
                    <span>总计(不含运费)：<i>246</i></span>
                    <span class="btn btn-danger"><a href="">结&nbsp;&nbsp;算</a></span>
                </div>
            </div>
        </div>
    </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</div>
</body>
</html>