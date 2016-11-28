<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/webStore.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        #main {
            background:#181818;
            color:#111;
            padding:15px 20px;
            width:600px;
            border:1px solid #222;
            margin:8px auto;
        }
    </style>
</head>
<body>
<div id="login">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.tmpl.js"></script>

    <ul class="idTabs">
        <li><a href="#male">Male Finishers</a></li>
        <li><a href="#female">Female Finishers</a></li>
        <li><a href="#all">All Finishers</a></li>
        <li><a href="#new">Add New Finisher</a></li>
    </ul>
    <div id="male">
        <h4>Male Finishers</h4><ul id="finishers_m"></ul>
    </div>
    <div id="female">
        <h4>Female Finishers</h4><ul id="finishers_f"></ul>
    </div>
    <div id="all">
        <h4>All Finishers</h4> <ul id="finishers_all"></ul>
    </div>
    <div id="new">
        <h4>Add New Finisher</h4>
        <form id="addRunner" name="addRunner" action="service.php" method="POST">
            First Name: <input type="text" name="txtFirstName" id="txtFirstName" /> <br>
            Last Name: <input type="text" name="txtLastName" id="txtLastName" /> <br>
            Gender: <select id="ddlGender" name="ddlGender">
                <option value="">--Please Select--</option>
                <option value="f">Female</option>
                <option value="m">Male</option>
            </select><br>
            Finish Time:
            <input type="text" name="txtMinutes" id="txtMinutes" size="10" maxlength="2" />(Minutes)
            <input type="text" name="txtSeconds" id="txtSeconds" size="10" maxlength="2" />(Seconds)
            <br><br>
            <button type="submit" name="btnSave" id="btnSave">Add Runner</button>
            <input type="hidden" name="action" value="addRunner" id="action">
        </form>
    </div>



<!---->
<!--    <script>-->
<!--        $(function(){-->
<!--            var currentElement=$("[class=bookBox]");-->
<!--            function main(){-->
<!--                var param={-->
<!--                    'id':currentElement.find('[data=id]').val()||'',//is-->
<!--                    'name':currentElement.find('[data=name]').val()||'',//姓名-->
<!--                };-->
<!--                $.ajax({-->
<!--                    url:"php/loginManage.php",-->
<!--                    data:param,-->
<!--                    type:'post',-->
<!--                    async:false,-->
<!--                    dataType:"json",-->
<!--                    success:function(result){-->
<!--                        console.log(result);-->
<!--                    },-->
<!--                    error:function(){-->
<!--                        console.log("123");-->
<!--                    }-->
<!---->
<!--            });-->
<!--            }-->
<!--        })-->
<!--    </script>-->

</div>
</body>
</html>