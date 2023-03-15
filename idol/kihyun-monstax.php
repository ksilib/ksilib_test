<?php
  include_once '../header.php';
?>
<link href="../style/index.css" rel="stylesheet" type="text/css">
<link href="../style/profile.css" rel="stylesheet" type="text/css">

<script src="../style/script.js" defer></script>
<div class="main">
    <!--照片輪播-->
    <div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <div class="carousel">
        <img src="../idol/kihyun-monstax-img/1.jpg" alt="LE SSRAFIM" draggable="false">
        <img src="../idol/kihyun-monstax-img/2.jpg" alt="img" draggable="false">
        <img src="../idol/kihyun-monstax-img/3.jpg" alt="img" draggable="false">
        <img src="../idol/kihyun-monstax-img/4.jpg" alt="img" draggable="false">
        <img src="../idol/kihyun-monstax-img/5.jpg" alt="img" draggable="false">
        <img src="../idol/kihyun-monstax-img/6.jpg" alt="img" draggable="false">
        <img src="../idol/kihyun-monstax-img/7.jpg" alt="img" draggable="false">
        <img src="../idol/kihyun-monstax-img/8.jpg" alt="img" draggable="false">
        <img src="../idol/kihyun-monstax-img/9.jpg" alt="img" draggable="false">
      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    <div class="profile">
        <p>Kihyun</p>
        <section class="info">
            <p>藝名&emsp;&emsp;： Kihyun</p>
            <p>本名&emsp;&emsp;： 柳基現</p>
            <p>羅馬拼音： Yoo Ki Hyun</p>
            <p>生日&emsp;&emsp;： 1993年11月22日</p>
            <p>星座&emsp;&emsp;： 天蠍座</p>
            <p>出生地&emsp;： 韓國京畿道高陽市日山</p>
            <p>所屬團體： MONSTA X</p>
            <p>出道日期： 2015年5月14日</p>
            <p>對內擔當： 主唱</p>
            <p>所屬公司： Starship Entertainment</p>
        </section>
    </div>
    <div class="other">
        <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <p>相關MV</p>
        <iframe src="https://www.youtube.com/embed/0OliiOgXlJI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/K26EZJVHakE?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>

</body>
</html>