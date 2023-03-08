<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM email WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
  $login = "登出";
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link href="style/index.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <nav>
        <img class="logo" src="img/logo.png" alt="logo">
        <h1 class="logoname" style="float:right;color:white;">開飯囉</h1>
      </nav>
      <nav>
        <ul class="nav_links">
          <li>藝人
            <div class="subnav">
              <ul>
                <li><a href="malesolo.html">男藝人</a></li>
                <li><a href="femalesolo.html">女藝人</a></li>
              </ul>
            </div>
          </li>
          <li><a href="">團體</a>
            <div class="subnav">
              <ul>
                <li><a href="">男團</a></li>
                <li><a href="">女團</a></li>
              </ul>
            </div>
          </li>
          <li><a href="bd.html">壽星</a></li>
          <li><a href="album.html">專輯</a></li>
        </ul>
      </nav>
      <nav>
        <a class="username" href="#"><?php echo $row["username"]; ?></a>
        <a class="login" href="logout.php"><button name="login"><?php echo $login?></button></a>
      </nav>
    </header>
    <!--照片輪播-->
    <div class="img-slider">
      <div class="slide active">
        <img src="img/aespa.jpg">
        <div class="info">
          <p>aespa</p>
          <p>cr:</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/blackpink.jpg">
        <div class="info">
          <p>blackpink</p>
          <p>cr:</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/itzy.jpg">
        <div class="info">
          <p>itzy</p>
          <p>cr:</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/ive.jpg">
        <div class="info">
          <p>ive</p>
          <p>cr:</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/girls_generation.jpg">
        <div class="info">
          <p>girls_generation</p>
          <p>cr:</p>
        </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>
    <script type="text/javascript">
      var slides = document.querySelectorAll('.slide');
      var btns = document.querySelectorAll('.btn');
      let currentSlide = 1;

      var manualNav = function(manual){
        slides.forEach((slide) => {
          slide.classList.remove('active');

          btns.forEach((btn) => {
            btn.classList.remove('active');
          });
        });

        slides[manual].classList.add('active');
        btns[manual].classList.add('active');
      }

      btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
          manualNav(i);
          currentSlide = i;
        });
      });

      var repeat = function(activeClass){
        let active = document.getElementsByClassName('active');
        let i = 1;

        var repeater = () => {
          setTimeout(function(){
            [...active].forEach((activeSlide) => {
              activeSlide.classList.remove('active');
            });
            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;

            if(slides.length == i){
              i = 1;
            }
            if(i >= slides.length){
              return;
            }
            repeater();
          }, 10000);
        }
        repeater();
      }
      repeat();
    </script>
    
  </body>
</html>