<!--**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/11/28
 * Time: 11:13
 *-->
<div class="shoppingCar container">
    <div class="title"></div>

    <div class="table">
        <div class="thead">
            <span><input type="radio" name="radio">全选<input type="radio" name="radio">反选</span>
            <span>商品信息</span>
            <span>单价(元)</span>
            <span>数量</span>
            <span>金额(元)</span>
            <span>操作</span>
        </div>
        <div class="tbody" refresh="tbody">
            <script type="text/x-jquery-tmpl" id="tbody" templete="tbody">
                 <div>
                    <span><input type="checkbox" checked></span>
                    <span><img src="" alt="" width="70" height="70"></span>
                    <span><a href="">${name}</a></span>
                    <span>${price}</span>
                    <span><i>-</i><input type="text" value="1"><i>+</i></span>
                    <span>${price}</span>
                    <span><a href="">删除</a></span>
                </div>
            </script>
        </div>


        <div class="tbottom">
            <div class="left">
                <span><input type="checkbox" checked>全选</span>
                <span><a href="">批量删除</a></span>
                <span>已选<i></i>件商品</span>
            </div>
            <div class="right">
                <span>总计(不含运费)：<i></i></span>
                <span class="btn btn-danger"><a href="">结&nbsp;&nbsp;算</a></span>
            </div>
        </div>
    </div>
</div>


<script>
    $(function(){
        function main(){
            $.ajax({
                url:"../php/login.manage.php",
                type:'POST',
                dataType:"json",
                success:function(result){
                    console.log(result);
                    data = result;
                    $("#tbody").tmpl(data).appendTo('.tbody');
                },
                error:function(){
                    console.log("error");
                }
            });
        }
        main();
        function checkSum(){
            var sum=$('[type=checkbox]');
            console.log(sum);
        }
        checkSum();
    })
</script>