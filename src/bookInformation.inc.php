<!--**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/11/28
 * Time: 11:09
 *-->
<div id="Box" refresh="main">
<script id="main" type="text/x-jquery-tmpl" templete="main">
        <div id="bookInformation">
        <div class="container detail">
            <div class="img-rounded img-left">
                <img src="../image/24047503-2_w_5.jpg" alt="">
                <nav>
                    <ul>
                        <li><a href=""><img src="../image/24047503-2_w_5.jpg" alt=""></a></li>
                        <li><a href=""><img src="../image/24047503-2_w_5.jpg" alt=""></a></li>
                        <li><a href=""><img src="../image/24047503-2_w_5.jpg" alt=""></a></li>
                        <li><a href=""><img src="../image/24047503-2_w_5.jpg" alt=""></a></li>
                    </ul>
                </nav>
            </div>
            <div class="information">
                <p class="h4">${comment}</p>
                <p><a href="">${discount}</a></p>
                <p class="price"><span>价格：<span>${price}元</span></span><span class="right">累计评价：<span><a href="">${commit}+</a></span></span></p>
                <p>配送至： <span>${adress}</span></p>
                <p class="service">服务：由京东发货，并提供售后服务。</p>
                <p class="input-group counter">
                    <input type="text" value="1" class="form-control">
                    <span>+</span><br><span>-</span>
                </p>
                <p class="right">
                    <span class="btn btn-primary">
                        <a href="" id="shoppingcar">加入购物车</a>
                    </span>
                    <span class="btn btn-danger">
                        <a href="">到货通知</a>
                    </span>
                </p>
                <p class="prompt">温馨提示：支持7天无理由退货</p>
            </div>
        </div>
    </div>
</script>
</div>
<script>
    $(function(){
        var data=[];
        function main(){
                $.ajax({
                    url:"../php/bookInformation.manage.php",
                    type:'POST',
                    dataType:"json",
                    success:function(result){
                        console.log(result);
                        data = result;
                        $("#main").tmpl(data).appendTo('#Box');
                    },
                    error:function(){
                        console.log("error");
                    }
                });
            }
            main();

            $("#shoppingcar").click(function(){

            })
    });

</script>