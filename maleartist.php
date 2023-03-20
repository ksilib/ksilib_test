<?php
  include_once 'header.php';
  include_once 'includes/dbinfo.inc.php';
?>
<link href="../style/search.css" rel="stylesheet" type="text/css">
<form method="post">
    <input type="text" placeholder="Search.." name="search">
    <button name="submit"><i class="fa fa-search"></i></button>
</form>   

<table style="border: 1px solid;">
            <?php
                if(isset($_POST['submit'])) {
                    $search=$_POST['search'];
                    $sql = "SELECT * FROM maleinfo where 藝名 like '%$search%'
                    or 本名 like '%$search%' or 羅馬拼音 like '%$search%' or 團體 like '%$search%'";
                    $result = mysqli_query($conn, $sql);
                    if($result) {
                        if(mysqli_num_rows($result)>0){
                            echo "<thead>
                                    <tr>
                                    <th>藝名</th>
                                    <th>本名</th>
                                    <th>羅馬拼音</th>
                                    <th>團體</th>
                                    </tr>
                                    </thead>";
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tbody>
                                    <tr>
                                    <td><a href='../searchData.php?data=". $row["本名"] ."'>" . $row["藝名"] . "</a></td>
                                    <td>" . $row["本名"] . "</td>
                                    <td>" . $row["羅馬拼音"] . "</td>
                                    <td><a href=''>" . $row["團體"] . "</a></td>
                                    </tr>
                                    </tbody>";
                            }
                            
                        }else{
                            echo "<h2>DATA NOT FOUND!</h2>";
                        }
                        
                    }
                }
            ?>
    </table>
</body>
</html>