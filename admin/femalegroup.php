<?php
include('header.php'); 
include('navbar.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="../style/index.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<form method="post" style="margin-left:5%;">
    <input type="text" placeholder="Search.." name="search">
    <button name="submit"><i class="fa fa-search"></i></button>
</form>   
<table style="border: 1px solid;margin-left:5%;">
    <?php
        if(isset($_POST['submit'])) {
            $conn = mysqli_connect("localhost","root","","kpopgroup");
            $search=$_POST['search'];
            $sql = "SELECT * FROM femaleg where 團名 like '%$search%'";
            $result = mysqli_query($conn, $sql);
            if($result) {
                if(mysqli_num_rows($result)>0){
                    echo "<thead>
                            <tr>
                            <th>團名</th>
                            <th>簡介</th>
                            <th>照片</th>
                            </tr>
                            </thead>";
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tbody>
                            <tr>
                            <td>" . $row["團名"] . "</td>
                            <td><a href='../admin/editgData2.php?data=". $row["團名"] ."'><button>更新簡介</button></a></td>
                            <td><a href='../imgupload/f-gupload.php?data=". $row["團名"] ."''><button>上傳照片</button></a></td>
                            </tr>
                            </tbody>";
                    }
                    
                }
            }
        }else {
            $conn = mysqli_connect("localhost","root","","kpopgroup");
            $sql = "SELECT * FROM femaleg";
            $result = mysqli_query($conn, $sql);
            if($result) {
                if(mysqli_num_rows($result)>0){
                    echo "<thead>
                            <tr>
                            <th>團名</th>
                            <th>簡介</th>
                            <th>照片</th>
                            </tr>
                            </thead>";
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tbody>
                            <tr>
                            <td>" . $row["團名"] . "</td>
                            <td><a href='../admin/editgData2.php?data=". $row["團名"] ."'><button>更新簡介</button></a></td>
                            <td><a href='../imgupload/f-gupload.php?data=". $row["團名"] ."''><button>上傳照片</button></a></td>
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