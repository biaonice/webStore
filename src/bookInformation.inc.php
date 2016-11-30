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
                <p class="h4">京东JD.COM-专业的综合网上购物商城，销售超数万品牌、4020万种商品</p>
                <p><a href="">促销中</a></p>
                <p class="price"><span>价格：<span id="price">${price}</span></span><span class="right">累计评价：<span><a href="" id="commit">${commit}</a></span></span></p>
                <p>配送至： <span id="adress">${adress}</span></p>
                <p class="service">服务：由京东发货，并提供售后服务。</p>
                <p class="input-group counter">
                    <input type="text" value="1" class="form-control">
                    <span>+</span><br><span>-</span>
                </p>
                <p class="right">
                    <span class="btn btn-primary">
                        <a href="">加入购物车</a>
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





    var data=[];
    function main(){
            $.ajax({
                url:"../php/loginManage.php",
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
    })

</script>