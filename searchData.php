<?php
  include_once 'header.php';
  include_once 'includes/dbinfo.inc.php';
?>
<link href="../style/index.css" rel="stylesheet" type="text/css">
<link href="../style/profile.css" rel="stylesheet" type="text/css">

<script src="../style/script.js" defer></script>
<div class="back">
  <a href="maleartist.php"><i class="fa-solid fa-circle-xmark fa-2xl"></i></a>
</div>

<div class="main">
    <div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <div class="carousel">
        <?php
          $data=$_GET['data'];
          $con=mysqli_connect('localhost','root','','imageupload');
          if(!$con) {
              die(mysqli_error($con));
          }
          $sql = "SELECT * FROM `image`";
          $result = mysqli_query($con, $sql);
          while($row=mysqli_fetch_assoc($result)) {
            $rom=$row['藝名'];
            $image=$row['照片'];
            if ($data==$rom){
              echo '<img src='.$image.' />';
            }
          }
        ?>
      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    <div class="profile">
        <?php
            $data=$_GET['data'];
            echo "<p>$data</p>";
            $sql = "SELECT * FROM maleinfo where 藝名='$data'";
            $result = mysqli_query($conn, $sql);
            if($result){
                $row = mysqli_fetch_assoc($result);
                echo "<section class='info'>
                <p>藝名&emsp;&emsp;： " . $row['藝名'] . "</p>
                <p>本名&emsp;&emsp;： " . $row["本名"] . "</p>
                <p>羅馬拼音： " . $row["羅馬拼音"] . "</p>
                <p>生日&emsp;&emsp;： " . $row["生日"] . "</p>
                <p>星座&emsp;&emsp;： " . $row["星座"] . "</p>
                <p>出生地&emsp;： " . $row["出生地"] . "</p>
                <p>所屬團體： <a href='../searchm.php?data=". $row["所屬團體"] ."'>" . $row["所屬團體"] . "</a></p>
                <p>出道日期： " . $row["出道日期"] . "</p>
                <p>隊內擔當： " . $row["隊內擔當"] . "</p>
                <p>所屬公司： " . $row["所屬公司"] . "</p>
                <p>經歷： " . $row["經歷"] . "</p>
                </section>";
            }
        ?>
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