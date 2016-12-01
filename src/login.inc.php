<!--**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/11/28
 * Time: 9:18
 *-->
<form method="post">
    <div class="left loginLeft"></div>
    <div class="right loginRight">
        <div class="form-group">
            <input type="text" placeholder="请输入用户名" id="userName" class="form-control" name="username">
        </div>
        <div class="form-group">
            <input type="password" placeholder="请输入密码" id="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-control">记住密码<span class="right"><a href="">忘记密码?</a></span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="btn">登&nbsp;&nbsp;&nbsp;录</button>
        </div>
    </div>
</form>




<script>
    $(function(){
        function main(){
            var param = {
                'username': $('#uesrName').val() || "",
                'password': $('#password').val() || ""
            };
            $.ajax({
                data: param,
                url: "../php/loginManage.php",
                type: 'POST',
                dataType: 'JSON',
                success: function (result) {
                    console.log(result);
                }
            });
        }
        main();
        function login(result) {
            var param = {
                'username': $('#uesrName').val() || "",
                'password': $('#password').val() || ""
            }
            if (param.username == "" && param.password == "") {
                alert("用户名或密码为空");
            }
        }
        login();
    });












//            for(var i=0;i<mainList.length;i++){
    //               if(param.username==mainList[i].name && param.password==mainList[i].pwd){
    //                   alert("登录成功");
    //               }else{
    //                   alert("登录失败请联系管理员");
    //               }
    //           }

</script>