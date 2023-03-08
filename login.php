<?php
  require 'config.php';
  if(!empty($_SESSION["id"])){
    header("Location: index.php");
  }
  if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM email WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
      if($password == $row['password']){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        header("Location: index.php");
      }
      else{
        echo
        "<script> alert('密碼錯誤'); </script>";
      }
    }
    else{
      echo
      "<script> alert('使用者未註冊'); </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="style/login.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <form class="loginform" action="" method="post" autocomplete="off">
      <h2>登入</h2>
      <label for="usernameemail">暱稱 或 信箱 : </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
      <label for="password">密碼 : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button type="submit" name="submit">登入</button>
      <p>或</p>
      <button><a href="registration.php">註冊</a></button>
    </form>
    <br>
  </body>
</html>