<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>首頁</title>
  <link href="style/signup.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="navbar" height="51">
  <img src="img/logo_demo.png" width="51" height="51" style="float:left;border: 0px;"></a>
  <div class="subnav">
    <button class="subnavbtn">歌手</button>
    <div class="subnav-content">
      <a href="malesolo.html">男歌手</a>
      <a href="femalesolo.html">女歌手</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">團體</button>
    <div class="subnav-content">
      <a href="#male_group">男團</a>
      <a href="#female_group">女團</a>
    </div>
  </div>
  <a href="#bd">壽星</a>
  <a href="#albums">專輯</a>
  <a href="login.html" style="float:right">登入</a>
  <img src="img/member.png" height="51" style="float:right">
</div>
<hr>
<div class="container">
	<div class="card">
		<form class="card-form">
      <h3 style="text-align: center;">註冊</h3>
			<div class="input">
				<input type="text" class="input-field" required/>
				<label class="input-label">Email</label>
			</div>
			<div class="input">
				<input type="password" class="input-field" required/>
				<label class="input-label">Password</label>
			</div>
			<div class="action">
				<button class="action-button">註冊</button>
        <hr>
        <p style="text-align: right;">已有帳號?<a href="login.html">登入</a></p>
			</div>
		</form>
	</div>
</div>

</body>
</html>