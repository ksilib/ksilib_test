<?php
  include_once 'header.php';
?>
<link href="../style/index.css" rel="stylesheet" type="text/css">
<script src="../style/script.js" defer></script>
    <!--照片輪播-->
    <div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <div class="carousel">
          <?php
            $con=mysqli_connect('localhost','root','','imageupload');
            if(!$con) {
              echo "error";
                die(mysqli_error($con));
            }
            $sql = "SELECT * FROM `indexphoto`";
            $result = mysqli_query($con, $sql);
            while($row=mysqli_fetch_assoc($result)) {
              $rom=$row['團名'];
              $image=$row['照片'];
              echo '<img src='.$image.' draggable="false" alt="'.$rom.'" />
              ';
            }
          ?><p id="text"> </p>
          <script>
          var img = document.getElementsByTagName("img");
          var text = document.getElementById("text");

          for (var i = 0; i < img.length; i++) {
            img[i].addEventListener("mouseover", function() {
              var alt = this.alt;
              text.textContent = alt;
            });
          }
          </script>
      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    <div class = "news">
      <h3>KPOP相關</h3>
      <hr>
    <?php
      $url = 'https://www.koreastardaily.com/tc/kpop';
      $web = 'https://www.koreastardaily.com';
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);

      $dom = new DOMDocument();
      @$dom->loadHTML($response);
      
      $container = $dom->getElementById('mod_mv');
      $links = array();
      foreach($container->getElementsByTagName('a') as $link) {
          $href = $web.$link->getAttribute('href');
          array_push($links, $href);
      }
      $titles = array();
      foreach($container->getElementsByTagName('div') as $title) {
        if($title->getAttribute('class')=='text') {
          foreach($title->getElementsByTagName('a') as $atag) {
          array_push($titles,$atag->textContent) ;
          }
        }
      }
      array_push($titles, "更多");
      $links = array_unique($links);
      $links = array_values($links);
      foreach($links as $url => $value){
          echo"<a href='$links[$url]'>$titles[$url]</a>";  
          echo"<hr>";
      }
      ?>
    </div>
    <div class = "bd">
      <h3>當月壽星</h3>
      <table style="border: 1px solid;background-color: #DAE6EB;
      margin-top: 1%;
      text-align: center;
      margin: auto;">
      <?php
          $data = array();
          $month = date("m月");
          $day = (int)date("d");
          $conn = mysqli_connect("localhost","root","","artist");
          $sql = "SELECT * FROM maleinfo";
          $result = mysqli_query($conn, $sql);
          if($result) {
              
              if(mysqli_num_rows($result)>0){
                  echo "<thead>
                          <tr style='border-bottom-width: 1px;
                          border-bottom-style: solid;'>
                          <th>藝名</th>
                          <th>生日</th>
                          </tr>
                          </thead>";
                  while($row = mysqli_fetch_assoc($result)){
                      $bd = substr($row["生日"], 7, 5);
                      $date = (int)substr($row["生日"], 12, 2);
                      if($bd==$month && $date >= $day){
                          $scores = [$row["藝名"]=>$row["生日"],'num'=>$date];
                          array_push($data,$scores);
                      }
                      $key_value = array_column($data, 'num');
                      array_multisort($key_value, SORT_ASC, $data);
                  }
              }
          }
          for($x=0;$x<count($data);$x++){
              unset($data[$x]['num']);
          }
          foreach ($data as $key => $value) {
              unset($data[1]);
              foreach ($value as $k => $v) {
                  echo "<tr>";
                  echo "<td><a href='../searchData.php?data=". $k ."'>$k</a></td>"; // Get index.
                  echo "<td>$v</td>"; // Get value.
                  echo "</tr>";
              }
          }
      ?>
    </table>
  </div>
    <div class = "chart">
      <h3>音源排行榜(日榜)</h3>
      <hr>
    <?php
      $url = 'https://www.melon.com/chart/day/index.htm';
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);

      $dom = new DOMDocument();
      @$dom->loadHTML($response);
      $count = 1;
      $song = array();
      foreach($dom->getElementsByTagName('div') as $title) {
        if($title->getAttribute('class')=='ellipsis rank01') {
          foreach($title->getElementsByTagName('span') as $atag) {
          array_push($song,$atag->textContent) ;
          }
        }
      }
      $artist = array();
      foreach($dom->getElementsByTagName('div') as $title) {
        if($title->getAttribute('class')=='ellipsis rank02') {
          foreach($title->getElementsByTagName('span') as $atag) {
          array_push($artist,$atag->textContent) ;
          }
        }
      }
      foreach($song as $url => $value){
        echo"$count 位 $song[$url]<br>&emsp;&emsp;$artist[$url]";  
        $count += 1;
        if ($count == 6) {
          break;
        }
        echo"<hr>";
      }
      echo"<hr>";
      echo"<a href='https://www.melon.com/chart/day/index.htm'>查看更多<?a>";
    ?>
    </div>
  </body>
</html>