<?php
  include_once 'header.php';
  include_once 'includes/group.inc.php';
?>
<link href="../style/index.css" rel="stylesheet" type="text/css">
<link href="../style/profile.css" rel="stylesheet" type="text/css">

<script src="../style/script.js" defer></script>
<div class="back">
  <a href="femalegroup.php"><i class="fa-solid fa-circle-xmark fa-2xl"></i></a>
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
          $sql = "SELECT * FROM `imagegroup`";
          $result = mysqli_query($con, $sql);
          while($row=mysqli_fetch_assoc($result)) {
            $rom=$row['團名'];
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
            $sql = "SELECT * FROM femaleg where 團名='$data'";
            $result = mysqli_query($conn, $sql);
            if($result){
                $row = mysqli_fetch_assoc($result);
                echo "<section class='info'>
                <p>團名&emsp;&emsp;： " . $row['團名'] . "</p>
                <p>出道日期： " . $row["出道日期"] . "</p>
                <p>口號&emsp;&emsp;： " . $row["口號"] . "</p>
                <p>所屬公司： " . $row["所屬公司"] . "</p>
                <p>粉絲名&emsp;： " . $row["粉絲名"] . "</p>
                <p>代表作品： " . $row["代表作品"] . "</p>
                <p>團名由來： " . $row["團名由來"] . "</p>
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