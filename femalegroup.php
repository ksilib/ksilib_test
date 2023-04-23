<?php
  include_once 'header.php';
  include_once 'includes/group.inc.php';
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
                    $sql = "SELECT * FROM femaleg where 團名 like '%$search%'";
                    $result = mysqli_query($conn, $sql);
                    if($result) {
                        if(mysqli_num_rows($result)>0){
                            echo "<thead>
                                    <tr>
                                    <th>團名</th>
                                    <th>出道日期</th>
                                    <th>所屬公司</th>
                                    <th>粉絲名</th>
                                    </tr>
                                    </thead>";
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tbody>
                                    <tr>
                                    <td><a href='../searchf.php?data=". $row["團名"] ."'>" . $row["團名"] . "</a></td>
                                    <td>" . $row["出道日期"] . "</td>
                                    <td>" . $row["所屬公司"] . "</td>
                                    <td>" . $row["粉絲名"] . "</td>
                                    </tr>
                                    </tbody>";
                            }
                            
                        }else{
                            echo "<h2>DATA NOT FOUND!</h2>";
                        }
                        
                    }
                }else {
                    $sql = "SELECT * FROM femaleg";
                    $result = mysqli_query($conn, $sql);
                    if($result) {
                        if(mysqli_num_rows($result)>0){
                            echo "<thead>
                                    <tr>
                                    <th>團名</th>
                                    <th>出道日期</th>
                                    <th>所屬公司</th>
                                    <th>粉絲名</th>
                                    </tr>
                                    </thead>";
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tbody>
                                    <tr>
                                    <td><a href='../searchf.php?data=". $row["團名"] ."'>" . $row["團名"] . "</a></td>
                                    <td>" . $row["出道日期"] . "</td>
                                    <td>" . $row["所屬公司"] . "</td>
                                    <td>" . $row["粉絲名"] . "</td>
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