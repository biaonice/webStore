<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>

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
<div id="login">
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
                    <li><a href="../webStore.php">首页</a></li>
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
                    <li  class="active"><a href="login.php">登录</a></li>
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


    <div class="container">
        <div class="recommend">
            <nav class="">
                <span>推荐</span>
                <ul>
                    <li class="active"><a href="">推荐</a></li>
                    <li><a href=""></a></li>
                </ul>
            </nav>
            <div class="bookBox">
                <div class="book">
                    <a href=""><img src="../image/24047503-2_w_5.jpg" alt=""></a>
                    <a href=""><span>百度,全球最大的中文搜索引擎、最大的中文网站</span></a>
                    <span><mark>￥25</mark><s>￥36</s></span>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script>
        function onLoad(f){
            if (onLoad.loaded)
                    window.setTimeout(f, 0);
            else if (window.addEventListener)
                    window.addEventListener("load",f,false);
            else if (window.attachEvent)
                    window.attachEvent("onload",f);
        }
        onLoad.loaded=false;
        onLoad(function(){onload.loaded=true;});

        function invoke(f,start,interval,end){
            if (!start) start = 0;
            if (arguments.length<=2) {
                setTimeout(f, start);
            }else{
                setTimeout(repeat,start);
                function repeat(){
                    var h=setInterval(f, interval);
                    if (end) setTimeout(function(){
                        clearInterval(h);
                    },end);
                }
            }
        }

        if (!XMLHttpRequest)location.replace("staticpage.php");


        function getElements(){
            var elements={};
            for (var i=0;i<arguments.length;i++){
                var id=arguments[i];
                var elt=document.getElementById(id);
                if (elt = =null)
                        throw new Error("no element with id:"+id);
                elements[id]=elt;
            }
            return elements;
        }
/**
 *   parentNode
 *   childNodes
 *   fristChild
 *   lastChild
 *   nextSibling
 *   previousSibling
 *   nodeType
 *   nodeValue
 *   nodeName
 */

function classList(e){
    if(e.classList) return e.classList;
    else return new CSSClassList(e);
}
        CSSClassList.prototype.contains=function(e){
            if (c.length===0 || c.indexOf(" ")!=-1)
                    throw new Error("Invalid class name:'"+c+"'");
            var classes=this.e.className;
            if (!classes) return false;
            if (classes===c)return true;
            return classes.search("\\b"+c+"\\b")!=-1;
        };
        CSSClassList.prototype.add =function(c){
            if (this.contains(c)) return;
            var classes=this.e.className;
            if (classes && classes[classes.length-1]!=" ")
                    c = " "+c;
            this.e.className+=c;
        } ;
        CSSClassList.prototype.remove=function(c){
            if (c.length===0 || c.indexOf(" ")!=-1)
                    throw new Error("Invalid class name:'"+c+"'");
            var pattern =new RegExp("\\b"+c+"\\b\\s","g");
            this.e.className=this.e.className.replace(pattern,"");
        };
        CSSClassList.prototype.toggle=function(c){
            if (this.contains(c)){
                this.remove(c);
                return false;
            }else{
                this.add(c);
                return true;
            }
        };
        CSSClassList.prototype.toString=function(){return this.e.className;};
        CSSClassList.prototype.toArray=function(){
            return this.e.className.match(/\b\w+\b/g) ||[];
        };
    </script>
</div>
</body>
</html>