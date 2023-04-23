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
<table style="border: 1px solid;margin-left:5%;">
    <?php
        $conn = mysqli_connect("localhost","root","","ksiproject");
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        if($result) {
            if(mysqli_num_rows($result)>0){
                echo "<thead>
                        <tr>
                        <th>暱稱</th>
                        <th>信箱</th>
                        <th>編輯</th>
                        </tr>
                        </thead><br>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tbody>
                        <tr>
                        <td>" . $row["usersUid"] . "</td>
                        <td>" . $row["usersEmail"] . "</td>
                        </tr>
                        </tbody><br>";
                }
                
            }
        }

    ?> 
</table>
</body>
</html>