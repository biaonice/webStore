<!--**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/11/28
 * Time: 9:18
 *-->
<form method="POST">
    <div class="left loginLeft"></div>
    <div class="right loginRight">
        <div class="form-group">
            <input type="text" placeholder="请输入用户名" id="userName" class="form-control" name="userName">
        </div>
        <div class="form-group">
            <input type="password" placeholder="请输入密码" id="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-control">记住密码<span class="right"><a href="">忘记密码?</a></span>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" id="btn">登&nbsp;&nbsp;&nbsp;录</button>
        </div>
    </div>
</form>




<script>
    $(function(){
        function main(){
            var param = {
                'userName':$("#userName").val()||"",
                'password':$("#password").val()||""
            };
            $.ajax({
                url: "../php/login.manage.php",
                type: 'POST',
                data: param,
                dataType: 'JSON',
                success: function (result) {
                    console.log(result);
                }
            });
        }
        main();
        $('#btn').click(function(){
            main();
        });
    });












//            for(var i=0;i<mainList.length;i++){
    //               if(param.username==mainList[i].name && param.password==mainList[i].pwd){
    //                   alert("登录成功");
    //               }else{
    //                   alert("登录失败请联系管理员");
    //               }
    //           }

</script>