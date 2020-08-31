<?php

header("content-type:text/html;charset=utf-8");
session_start();
$username = $_POST['a'];//用户名
$password = $_POST['b'];//密码
$user = $_POST['user'];
//如果选择了管理员登录
if (($user == "adm")) {
    //验证用户名和密码是否存在
    if ((isset($_SESSION['user'][$username]) && isset($_SESSION['user'][$password]))) {
    //在注册页面把用户账号密码作为sessionID保存，在此页面只需验证sessionID是否存在
        setcookie("user[username]", "欢迎管理员：$username", time() + 3600);//传递用户名
        setcookie("user[num]", 0, time() + 3600);//登录次数
        echo '<script language="JavaScript">
                  alert("登录成功!");
                window.location.href="index.php";
            </script>';
    } else {
        echo '<script language="JavaScript">
            alert("用户名或密码不正确");
            window.location.href="login.php";
        </script>';
    }
} else {
    if ((isset($_SESSION['user'][$username]) && isset($_SESSION['user'][$password]))) {

        setcookie("user[username]", "欢迎用户：$username", time() + 3600);//传递用户名
        setcookie("user[num]", 0, time() + 3600);//登录次数
        echo '<script language="JavaScript">
                  alert("登录成功!");
                window.location.href="index.php";
            </script>';
    } else {
        echo '<script language="JavaScript">
            alert("用户名或密码不正确");
            window.location.href="login.php";
        </script>';
    }
}

?>
