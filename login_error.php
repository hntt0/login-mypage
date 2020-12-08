<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>無題ドキュメント</title>
<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>

<body>
	<header>
		<div class="box"></div>
		<div class="logo">
			<img src="img/4eachblog_logo.jpg" alt="ロゴ">
		</div>
		<a hreerrorf="#">ログイン</a>
	</header>
	<div class="box99">
		<h1 class="error">メールアドレスまたはパスワードが間違っています。</h1>
		<div class="register1">
			<form action="mypage.php" method="post" enctype="multipart/form-data">
				<label class="form">メールアドレス</label>
				<input type="mail" size="100" name="mail" placeholder="xxxxxxx@intarnous.co.jp"pattern="^[a-z0-9._%+-[a-z0-9.-]+¥[a-z]{2, 3}$" required>
				<label class="form">パスワード（半角英数字6文字以上)</label>
				<input type="password" size="100" name="pas" placeholder="●●●●●●●" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
				<input type="checkbox" name="login_keep" class="box88">
				<p class="checkbox1">ログイン状態を保持する</p>
				<input type="submit" name="submit" class="submit" value="ログイン">
			</form>
		</div>
	</div>
	<footer>
	<p>©︎2018 Internous.inc All right reseved</p>
	</footer>
</body>
</html>