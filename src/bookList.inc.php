<!--**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/11/28
 * Time: 11:11
 *-->

<div class="section container">
    <div class="index"><a href="">外科</a>/<a href="">病理</a></div>
        <div id="booklist" refresh="list" >
          <script type="text/x-jquery-tmpl" templete="list" id="list">
            <div class="book">
                <a href=""><img src="image/24047503-2_w_5.jpg" alt=""></a>
                <a href=""><span title="${comment}">${comment}</span></a>
                <span><mark>秒杀价:${price}</mark><s>${discount}</s></span>
            </div>
          </script>
        </div>
</div>

<script>
    $(function(){
        var data=[];
        function main(){
            $.ajax({
                url:"php/loginManage.php",
                type:'POST',
                dataType:"json",
                success:function(result){
                    console.log(result);
                    data = result;
                    $("#list").tmpl(data).appendTo('#booklist');
                },
                error:function(){
                    console.log("error");
                }
            });
        }
        main();
    })
</script>