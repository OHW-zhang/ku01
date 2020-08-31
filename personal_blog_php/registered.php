<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/registered.css">
</head>
<body>
<div id="big" >
    <div id="small" >
        <form action="zcxs.php" method="post">
            <h2 style="margin-left: 30px;">注册</h2>
            <hr>
            <br>
            <label for="" >输入用户名:</label>
            <input type="text" name="a"><br><br>
            <label for="" >输入密码:</label>
            <input type="password" name="b"><br><br>
            <label for="" >输入姓名:</label>
            <input type="text" name="myname"><br><br>
            <label for="" >邮箱:</label>
            <input type="text" name="email"><br><br>
            <label for="" >电话号码:</label>
            <input type="text" name="number"><br><br>
            <label for="" >选择性别:</label>
            <input type="radio" value="男" checked="checked" name="gender">男
            <input type="radio" value="女" checked="checked" name="gender">女<br><br>
            <label for="">兴趣爱好:</label>
            <input type="checkbox" value="唱歌" name="interset">唱歌
            <input type="checkbox" value="跳舞" name="interset">跳舞
            <input type="checkbox" value="唱歌" name="interset">RAP
            <input type="checkbox" value="唱歌" name="interset">篮球<br><br>
            <label for="">选择职业:</label>
            <select name="occup">
                <option value="工程师">工程师</option>
                <option value="程序员">程序员</option>
                <option value="医生">医生</option>
            </select><br><br>
            <a href="login.php"> <input class="dl" name="submit" type="button" value="登录"></a>
            <input class="zc" name="submit" type="submit" value="注册">
        </form>
    </div>
</div>
</body>
</html>