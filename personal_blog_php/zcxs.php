<?php
header("content-type:text/html;charset=utf-8");
    session_start();
$username=$_POST['a'];
$password=$_POST['b'];
$myname=$_POST['myname'];
$email=$_POST['email'];
$number=$_POST['number'];
$gender=$_POST['gender'];
$interset=$_POST['interset'];
$occup=$_POST['occup'];
//在注册页面把用户账号密码作为sessionID保存
$_SESSION['user'][$username]=$username;
$_SESSION['user'][$password]=$password;

echo"用户名：".$username."<br/>";
echo"密码：".$password."<br/>";
echo"姓名：".$myname."<br/>";
echo"邮箱：".$email."<br/>";
echo"电话号码：".$number."<br/>";
echo"性别：".$gender."<br/>";
echo"爱好：".$interset."<br/>";
echo"职业：".$occup."<br/>";
echo '<script language="JavaScript">
                  alert("注册成功!");
                window.location.href="login.php";
            </script>';
?>