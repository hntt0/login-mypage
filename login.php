<?php 
session_start();
if(isset($_SESSION['id'])) {
	header("Location:mypage.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>無題ドキュメント</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<header>
		<div class="box"></div>
		<div class="logo">
			<img src="img/4eachblog_logo.jpg" alt="ロゴ">
		</div>
		<a href="#">ログイン</a>
	</header>
	<div class="box99">
		<h1>会員登録</h1>
		<div class="register1">
			<form action="mypage.php" method="post" enctype="multipart/form-data">
				<label class="form">メールアドレス</label>
				<input type="mail" size="100" name="mail" placeholder="xxxxxxx@intarnous.co.jp"pattern="^[a-z0-9._%+-[a-z0-9.-]+¥[a-z]{2, 3}$" required value="<?php echo $_COOKIE['mail'];?>">
				<label class="form">パスワード（半角英数字6文字以上)</label>
				<input type="password" size="100" name="pas" placeholder="●●●●●●●" id="password" pattern="^[a-zA-Z0-9]{6,}$" required value="<?php echo $_COOKIE['password'];?>">
				<input type="checkbox" name="login_keep" class="box88" value="login_keep"
				<?php 
				if(isset($_COOKIE['login_keep'])) {
					echo "checked='checked'";
				}	
				?>><p class="checkbox1">ログイン状態を保持する</p>
				<input type="submit" name="submit" class="submit" value="ログイン">
			</form>
		</div>
	</div>
	<footer>
	<p>©︎2018 Internous.inc All right reseved</p>
	</footer>
</body>
</html>