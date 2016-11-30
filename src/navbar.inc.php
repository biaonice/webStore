<!--**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/11/28
 * Time: 9:10
 *-->

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                <li><a href="###">登录</a></li>
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