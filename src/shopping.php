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
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../webStore.php">图书商城</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../webStore.php">首页</a></li>
                    <li><a href="register.php">注册</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">全站导航 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="book.detail.php">图书详情页</a></li>
                            <li><a href="shopping.php">购物车</a></li>
                            <li><a href="shopping.php">购物车</a></li>
                            <li class="divider"></li>
                            <li><a href="shopping.php">购物车</a></li>
                            <li class="divider"></li>
                            <li><a href="shopping.php">购物车</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!--登陆后改为用户名-->
                    <li><a href="login.php">登录</a></li>
                    <li><a href="register.php">注册</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">导航<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="shopping.php">购物车</a></li>
                            <li><a href="shopping.php">购物车</a></li>
                            <li class="divider"></li>
                            <li><a href="shopping.php">购物车</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="storeHeader container">
        <div class="logo"><img src="../image/123.png" alt="" width=""></div>
        <div class="search input-group col-lg-5">
            <input type="search" class="form-control" placeholder="书名/作者名/图书编号">
        <span class="input-group-btn">
          <button class="btn btn-default glyphicon glyphicon-search" type="button"></button>
        </span>
        </div>

        <div class="shoppingCar">
            <a class="glyphicon glyphicon-shopping-cart btn btn-default"><span>&nbsp;购物车4</span></a>
        </div>
    </div>
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