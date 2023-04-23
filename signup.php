<?php
  include_once 'header.php';
?>
<link href="../style/registration.css" rel="stylesheet" type="text/css">
  <nav>
    <form class="regisform" action="includes/signup.inc.php" method="post">
      <h2>註冊</h2>
      <label for="username">暱稱 : </label>
      <input type="text" name="username" id = "username"> <br>
      <label for="email">信箱 : </label>
      <input type="text" name="email" id = "email"> <br>
      <label for="password">密碼 : </label>
      <input type="password" name="password" id = "password"> <br>
      <label for="confirmpassword">確認密碼 : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword"> <br>
      <button type="submit" name="submit">註冊</button>
      <p>或</p>
      <input type="button" onclick="location.href='login.php'" value="登入" id="login">
    </form>
    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          $message = "請輸入所有資料!";
          echo "<script>alert('$message');</script>";
        }
        else if ($_GET["error"] == "invaliduid") {
          $message = "暱稱無效!";
          echo "<script>alert('$message');</script>";
        }
        else if ($_GET["error"] == "invalidemail") {
          $message = "請填寫正確的信箱!";
          echo "<script>alert('$message');</script>";
        }
        else if ($_GET["error"] == "passwordnotmatch") {
          $message = "密碼不正確!";
          echo "<script>alert('$message');</script>";
        }
        else if ($_GET["error"] == "stmtfailed") {
          $message = "再試一次!";
          echo "<script>alert('$message');</script>";
        }
        else if ($_GET["error"] == "usernametaken") {
          $message = "暱稱重複!";
          echo "<script>alert('$message');</script>";
        }
        else if ($_GET["error"] == "none") {
          $message = "註冊成功!";
          echo "<script>alert('$message');</script>";
        }
      }
    ?>
</nav>
  </body>
</html>

