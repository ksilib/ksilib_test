<?php
    if (isset($_POST["submit"])) {
    $useremail = $_POST["email"];
    $username = $_POST["uid"];
    require_once 'C:\xampp\htdocs\includes\dbh.inc.php';
    // sql語法存在變數中
    $sql = "DELETE FROM `users` WHERE `usersEmail`= '$useremail' AND `usersUid`= '$username';";
    // 用mysqli_query方法執行(sql語法)將結果存在變數中
    $result = mysqli_query($conn,$sql);

    // 如果有異動到資料庫數量(更新資料庫)
    if (mysqli_affected_rows($conn)>0) {
    echo "資料已刪除";
    }
    elseif(mysqli_affected_rows($conn)==0) {
        echo "無資料刪除";
    }
    else {
        echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($conn);
    }
    mysqli_close($conn); 
    
}
?>