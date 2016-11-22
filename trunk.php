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
            <a class="navbar-brand" href="webStore.php">图书商城</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="webStore.php">首页</a></li>
                <li><a href="src/register.php">注册</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">全站导航 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="src/book.detail.php">图书详情页</a></li>
                        <li><a href="src/shopping.php">购物车</a></li>
                        <li><a href="src/shopping.php">购物车</a></li>
                        <li class="divider"></li>
                        <li><a href="src/shopping.php">购物车</a></li>
                        <li class="divider"></li>
                        <li><a href="src/shopping.php">购物车</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--登陆后改为用户名-->
                <li><a href="src/login.php">登录</a></li>
                <li><a href="src/register.php">注册</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">导航<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="src/shopping.php">购物车</a></li>
                        <li><a href="src/shopping.php">购物车</a></li>
                        <li class="divider"></li>
                        <li><a href="src/shopping.php">购物车</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

  <div class="storeHeader container">
    <div class="logo"><img src="image/123.png" alt="" width=""></div>
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
        <h3><span>全部商品分类<i class="glyphicon glyphicon-chevron-down"></i></span></h3>
        <ul>
            <li><a href="">尾品汇</a></li>
            <li><a href="">图书</a></li>
            <li><a href="">电子书</a></li>
            <li><a href="">原创文学</a></li>
            <li><a href="">服装</a></li>
            <li><a href="">运动户外</a></li>
            <li><a href="">孕婴童</a></li>
            <li><a href="">家居</a></li>
            <li><a href="">潮牌男装</a></li>
            <li><a href="">地方特产</a></li>
            <li><a href="">海外购</a></li>
        </ul>
    </div>
     <hr />

     <div class="navLeft container">
        <ul>
            <li><a href="">图书、电子书、童书</a></li>
            <li><a href="">创意文具、艺术品拍卖</a></li>
            <li><a href="">服饰、内衣</a></li>
            <li><a href="">鞋靴、箱包</a></li>
            <li><a href="">运动户外</a></li>
            <li><a href="">孕、婴、童</a></li>
            <li><a href="">家居、家纺、汽车</a></li>
            <li><a href="">家具、家装、康体</a></li>
            <li><a href="">美妆、个人护理、成人</a></li>
            <li><a href="">食品、茶酒、生鲜</a></li>
            <li><a href="">腕表、珠宝饰品、眼镜</a></li>
            <li><a href="">手机、数码</a></li>
            <li><a href="">电脑办公</a></li>
            <li><a href="">家用电器</a></li>
            <li><a href="">当当礼品卡、生活服务</a></li>
        </ul>
    </div>
 </div>
<hr>

<div class="footer">
    <div class="container">
        <a href="www.baidu.com">百度</a>
        <a href="www.qq.com">qq</a>
        <a href="www.163.com">网易</a>
        <a href="www.google">谷歌</a>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>