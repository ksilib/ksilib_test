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
          echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
          echo "<p>Choose a proper username!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
          echo "<p>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordnotmatch") {
          echo "<p>Passwords doesn't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
          echo "<p>Something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
          echo "<p>Username already taken!</p>";
        }
        else if ($_GET["error"] == "none") {
          echo "<p>You have sign up!</p>";
        }
      }
    ?>
</nav>
  </body>
</html>

