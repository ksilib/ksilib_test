<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM email WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('暱稱或信箱已被使用'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO email VALUES('','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('註冊成功'); </script>";
    }
    else{
      echo
      "<script> alert('密碼不正確'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link href="style/registration.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    
    <form class="regisform" action="" method="post" autocomplete="off">
      <h2>註冊</h2>
      <label for="username">暱稱 : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
      <label for="email">信箱 : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label for="password">密碼 : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <label for="confirmpassword">確認密碼 : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
      <button type="submit" name="submit">註冊</button>
      <p>或</p>
      <button><a href="login.php">登入</a></button>
    </form>
  </body>
</html>