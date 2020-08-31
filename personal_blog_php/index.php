<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>张志成的博客</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<script>
    var k=0;//保存下标
    var timer;
    function showPic(){
        var su=document.getElementById("sub");
        var imgs=su.getElementsByTagName("img");
        var lis=su.getElementsByTagName("li");
        for(var i=0;i<imgs.length;i++){
            if(i==k){
                imgs[i].className="shown";
                lis[i].style.backgroundColor="orange";
            }
            else {
                imgs[i].className="hidden";
                lis[i].style.backgroundColor="#CCC";
            }
        }
        if(k==imgs.length-1){
            k=0;
        }
        else {
            k++;
        }

    }
    function startTimer(){
        timer=setInterval("showPic()",1000);
    }
    function stopTimer(){
        clearInterval(timer);
    }
    function thisimg(a){
        k=a;
        showPic();
    }

    timer=setInterval("showPic()",1000);
</script>
<body>
<div id="ttop">
    <?php
    if(isset($_COOKIE['user']['username'])&&isset($_COOKIE['user']['num'])){
        $i=$_COOKIE['user']['num']+1;
        setcookie("user[num]", $i, time() + 3600);//登录次数
        echo $_COOKIE['user']['username'];
        echo "<br>这是您第".$i."次登陆";
    }else'<a href="zcxs.php">欢迎你！请登录/注册</a>';

    ?>

</div>
<div id="top">
    <div id="logo">
        <img src="../imgs/logo.gif">
    </div>
    <div id="right">
        <img src="../imgs/sousuo.gif">
    </div>
</div>
<header id="header">
    <nav>
        <ul class="u1" style="list-style: none;margin: 0;padding: 0;">
            <li style="float: left"><a href="index.php">网站首页</a></li>
            <li style="float: left"><a href="my%20blog.php">美文赏析</a></li>
            <li style="float: left"><a href="travel%20scenery.php">旅行风景</a></li>
            <li style="float: left"><a href="about%20me.php">关于我</a></li>
            <li style="float: left"><a href="message%20board.php">留言</a></li>
        </ul>
    </nav>
    <div id="input">
       <span style="margin-left: 450px;font-size: 20px;"><a href="login.php">登录</a> </span>&nbsp;| &nbsp;<span style="font-size: 20px;"><a href="registered.php">注册</a> </span>
    </div>
</header>
<div id="out">
<div id="mid">

    <div id = "sub" onmouseover="stopTimer();" onmouseout="startTimer();">
        <img width="920" height="450" src = "../imgs/1.jpg" class="shown" />
        <img width="920" height="450" src = "../imgs/2.jpg" class="hidden" />
        <img width="920" height="450" src = "../imgs/3.jpg" class="hidden" />
        <img width="920" height="450" src = "../imgs/4.jpg" class="hidden" />
        <ul id = "imgcount">
            <li onClick="thisimg(0)" onmouseover="stopTimer();">1</li>
            <li onClick="thisimg(1)" onmouseover="stopTimer();">2</li>
            <li onClick="thisimg(2)" onmouseover="stopTimer();">3</li>
            <li onClick="thisimg(3)" onmouseover="stopTimer();">4</li>
        </ul>
</div>
    <div id="subright">
        <div id="subrightmid">
            <h2>个人博客，属于我的小世界！</h2>
            <p >个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活中的小情小事，也会放上一些照片，音乐。一边听着音乐，一边写写文章...</p>
            <hr  color=" darkgray">
            <ul class="subrightmidlist">
                <li><a href="#" >【告别2018】耕耘才有所得，付出才有收获</a></li>
                <li><a href="#">古之立大事者，不惟有超世之才，亦必有坚忍不拔之志</a></li>
                <li><a href="#" >天地最有情，少年莫浪投</a></li>
                <li><a href="#" >我的生活不曾取悦我，所以我创造了自己的生活</a></li>
                <li><a href="#">世界上那些最容易的事情中，拖延时间最不费力</a></li>
                <li><a href="#">我们都在阴沟里，但仍有人仰望星空</a></li>
            </ul>
        </div>
    </div>
    <div id="center">
        <div id="centerleft" ><img src="../imgs/peitu.jpg"; height="300px"; width="480px"><p style="margin-top: 15px; font-size: 20px; color: cornflowerblue">&nbsp;&nbsp;&nbsp;&nbsp;我希望你读很多书,走很远的路。我希望你爱很多人,也被很多人爱。我希望你走过人山人海,也遍览山河湖海。我希望你看纸质书,送手写的祝福。我要你独立坚强温暖明亮,我要你在这寡淡的世上,深情的活。</p><br><p style="font-size: 20px;float: right;color: cornflowerblue">——《这世界与我》</p></div>
        <div id="centermid"><img src="../imgs/peitu2.jpg"; height="300px"; width="480px"><p style="margin-top: 15px; font-size: 20px;color: cornflowerblue">&nbsp;&nbsp;&nbsp;&nbsp;天空没有翅膀的痕迹,而我已飞过！如果生病是一朵云,它的绚丽,它的光灿,它的变幻和飘流都是很自然的,只因它是一朵云！请我担负起对自己的责任来,不是活着就算了,更要活得热烈而起劲,活得踏实,将分内的工作,做得尽自己能力之内的完美,就无愧于天地。</p><br><p style="font-size: 20px;float: right;color: cornflowerblue">——《三毛全集》</p></div>
        <div id="centerright"><img src="../imgs/peitu3.jpg"; height="300px"; width="480px"><p style="margin-top: 15px; font-size: 20px;color: cornflowerblue">&nbsp;&nbsp;&nbsp;&nbsp;他面前是一片壮丽宁静、碧蓝无边、像光滑的大理石一般的海。在眼光所能看到的远处，海和淡蓝色的云天相连：涟波反映着融化的太阳，现出一片片的火焰。懒洋洋的波浪亲切地朝着脚边爬过来,舐着海岸的金色的沙滩。</p><br><p style="font-size: 20px;float: right;color: cornflowerblue">——《钢铁是怎样练成的》</p></div>
    </div>
</div>
</div>
<div id="bottom">
    <div id="qq" style="margin-left: 500px;margin-top: 20px;position: absolute">
        <img src="../imgs/qq.jpg"><p style="color: white">我的QQ</p>
    </div>
    <div id="wx" style="margin-left: 650px;margin-top: 28px;position: absolute">
        <img src="../imgs/wechat.jpg"><p style="color: white">我的微信</p>
    </div>
        <p style="color: white;margin-top: 70px;margin-left: 800px;position: absolute"> Copyright © 2019, zhangzhicheng All Rights Reserved.<br><br>版权所有：张志成</p>
    </div>
</div>
</body>
</html>