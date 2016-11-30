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
<?php
$name=$_post['username'];
$pwd=$_post['possword'];
$con=mysql_connect("localhost","root","124079");
mysql_select_db("webstore",$con);
$result=mysql_query("select * from admin WHERE name=$name AND password=$pwd");
    if(result&&result!=""){

    }else{
        echo "登陆失败";
    }



/*$result=mysql_query("select id,name,password from admin");
while($row=mysql_fetch_array($result)){
    $data[]=array(
        'id'=>"$row[id]",
        'name'=>"$row[name]",
    );
};
echo json_encode($data);
mysql_close($con);*/
?>

<!--<script>-->
<!--    $(function(){-->
<!--        var mainList = [];-->
<!--        function main(){-->
<!--            var param = {-->
<!--                'username': $('#uesrName').val() || "",-->
<!--                'password': $('#password').val() || ""-->
<!--            };-->
<!--            $.ajax({-->
<!--                data: param,-->
<!--                url: "../php/loginManage.php",-->
<!--                type: 'POST',-->
<!--                contentType: 'application/json',-->
<!--                success: function (result) {-->
<!--                    mainList = $.parseJSON(result);-->
<!--                    console.log(param);-->
<!--                    aa(result);-->
<!--                }-->
<!--            });-->
<!--        }-->
<!---->
<!--        main();-->
<!--        console.log(mainList);-->
<!--        function login(result) {-->
<!--            var param = {-->
<!--                'username': $('#uesrName').val() || "",-->
<!--                'password': $('#password').val() || ""-->
<!--            }-->
<!--            if (param.username == "" && param.password == "") {-->
<!--                alert("用户名或密码为空");-->
<!--            }-->
<!---->
<!--        }-->
<!---->
<!--        login();-->
<!--        $('#btn').click(login);-->
<!--        function aa(result){-->
<!--            mainList=$.parseJSON(result);-->
<!--            console.log(mainList);-->
<!--        }-->
<!--    });-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--//            for(var i=0;i<mainList.length;i++){-->
<!--//               if(param.username==mainList[i].name && param.password==mainList[i].pwd){-->
<!--//                   alert("登录成功");-->
<!--//               }else{-->
<!--//                   alert("登录失败请联系管理员");-->
<!--//               }-->
<!--//           }-->
<!-- -->
<!--</script>-->