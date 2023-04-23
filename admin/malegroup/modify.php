<?php
if (isset($_GET["artist"]) && isset($_POST["editForm"])) {
    $artist = $_GET['artist'];
    $團名 = $_POST["團名"];
    $出道日期 = $_POST["出道日期"];
    $口號 = $_POST["口號"];
    $所屬公司 = $_POST["所屬公司"];
    $粉絲名 = $_POST["粉絲名"];
    $代表作品 = $_POST["代表作品"];
    $團名由來 = $_POST["團名由來"];
    // sql語法存在變數中
    require_once 'C:\xampp\htdocs\includes\group.inc.php';
    $sql = "UPDATE  `maleg` SET 
                    `團名`='$團名', 
                    `出道日期`='$出道日期', 
                    `口號`='$口號', 
                    `所屬公司`='$所屬公司',
                    `粉絲名`='$粉絲名', 
                    `代表作品`='$代表作品', 
                    `團名由來`='$團名由來'
                    WHERE 團名 = '$artist';";
    if($conn->query($sql)=== True){
        echo "資料已更新";
    }else {
        echo "資料出錯";
    }
    mysqli_close($conn); 

}

 ?>