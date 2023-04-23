<?php
if (isset($_GET["artist"]) && isset($_POST["editForm"])) {
    $artist = $_GET['artist'];
    $藝名 = $_POST["藝名"];
    $本名 = $_POST["本名"];
    $生日 = $_POST["生日"];
    $星座 = $_POST["星座"];
    $出生地 = $_POST["出生地"];
    $ins = $_POST["ins"];
    $所屬團體 = $_POST["所屬團體"];
    $出道日期 = $_POST["出道日期"];
    $隊內擔當 = $_POST["隊內擔當"];
    $所屬公司 = $_POST["所屬公司"];
    $經歷 = $_POST["經歷"];
    // sql語法存在變數中
    require_once 'C:\xampp\htdocs\includes\dbinfo.inc.php';
    $sql = "UPDATE  `maleinfo` SET 
                    `藝名` = '$藝名', 
                    `本名`='$本名', 
                    `生日`='$生日', 
                    `星座`='$星座', 
                    `出生地`='$出生地', 
                    `ins`='$ins', 
                    `所屬團體`='$所屬團體', 
                    `出道日期`='$出道日期', 
                    `隊內擔當`='$隊內擔當', 
                    `所屬公司`='$所屬公司', 
                    `經歷`='$經歷'
                    WHERE 藝名 = '$artist';";
    if($conn->query($sql)=== True){
        echo "資料已更新";
    }else {
        echo "資料出錯";
    }
    mysqli_close($conn); 

}

 ?>