<?php
  include_once 'header.php';
?>
<link href="../style/index.css" rel="stylesheet" type="text/css">
<div style="margin-top:10%;margin-left:5%;">
    <h3>當月壽星</h3>
    <table style="border: 1px solid;background-color: #DAE6EB;
    margin-top: 1%;
    text-align: center;
    width: 60%;font-size: larger;">
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
?></table>
</div>
<div style="margin-left:5%;">
    <h3>下個月壽星</h3>
    <table style="border: 1px solid;background-color: #DAE6EB;
    margin-top: 1%;
    text-align: center;
    width: 60%;font-size: larger;">
<?php
    $data = array();
    $d=strtotime("+1 Months");
    $month = date("m月",$d);
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
                if($bd==$month){
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
?></table>
</div>
</body>
</html>