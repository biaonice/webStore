<!--**
* Created by PhpStorm.
* User: hanbiao
* Date: 2016/11/28
* Time: 9:20
*-->
<div class="modal-title title">
    <span><img src="" alt=""></span>
    <span class="h3">注册账号</span>
    <span class="right">已有账号<a href="login.php">登录</a></span>
</div>
<form action="post" action="../php/loginManage.php">
    <div class="form" >
        <div class="input-group">
            <span class="input-group-addon">用户名</span>
            <input type="text" placeholder="用户名" id="uesrName" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">邮箱</span>
            <input type="text" placeholder="邮箱" id="uesrName" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">密码</span>
            <input type="password" placeholder="请输入密码" id="password" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-addon">确认密码</span>
            <input type="password" placeholder="请确认密码" id="password" class="form-control">
        </div>
        <div class="input-group">
            <input type="checkbox" class="form-control">阅读并接受用户协议 <span><a href="">&laquo;用户协议&raquo;</a></span>
        </div>
        <div class="input-group">
            <button type="button" class="btn btn-primary">注&nbsp;&nbsp;&nbsp;册</button>
        </div>
    </div>

</form>