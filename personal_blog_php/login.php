<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div id="big" >
        <div id="small" >
            <form action="dlcs.php" method="post">
                <h2 style="margin-left: 30px;">登录</h2>
                <hr>
                <br>
                <label for="" >账号:</label>
                <input type="text" name="a"><br><br>
                <label for="" >密码:</label>
                <input type="password" name="b"><br><br>
                <input type="radio" value="user"  name="user" checked>用户

                <input type="radio" value="adm"  name="user">管理员<br><br>

                <input class="dl" name="submit" type="submit" value="登录">
                <a href="registered.php" ><input class="zc" name="submit" type="button" value="注册"></a>
            </form>
        </div>
    </div>
</body>
</html>