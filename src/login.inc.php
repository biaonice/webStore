<!--**
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2016/11/28
 * Time: 9:18
 *-->
<form method="post" action="../php/loginManage.php">
    <div class="left loginLeft"></div>
    <div class="right loginRight">
        <div class="form-group">
            <input type="text" placeholder="请输入用户名" id="userName" class="form-control" name="username">
        </div>
        <div class="form-group">
            <input type="password" placeholder="请输入密码" id="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-control">记住密码 <span class="right"><a href="">忘记密码?</a></span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="btn">登&nbsp;&nbsp;&nbsp;录</button>
        </div>
    </div>
</form>