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
		<a href="login.php">ログイン</a>
	</header>
	<main>
		<h1>会員登録</h1>
		<div class="register">
			<form action="create_check.php" method="post" enctype="multipart/form-data">
				<label class="form"><span>必須</span>氏名</label>
				<input type="text" size="70" name="username" placeholder="インターノウス太郎" required>
				<label class="form"><span>必須</span>メールアドレス</label>
				<input type="mail" size="70" name="mail" placeholder="xxxxxxx@intarnous.co.jp"pattern="^[a-z0-9._%+-[a-z0-9.-]+¥[a-z]{2, 3}$" required>
				<label class="form"><span>必須</span>パスワード（半角英数字6文字以上)</label>
				<input type="password" size="70" name="pas" placeholder="●●●●●●●" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
				<label class="form"><span>必須</span>パスワード確認</label>
				<input type="password" size="70" name="pascheack" placeholder="●●●●●●●" id="confirm" oninput="ConfirmPassword(this)" required>
				<div class="picture">
					<label>プロフィール写真</label><br>
					<input type="hidden" name="max_file_size" value="1000000"/>
					<input type="file" size="40" name="picture">
				</div>
				<label class="form">コメント</label>
				<textarea cols="90" rows="7" name="comments" placeholder="test"></textarea>
				<input type="submit" name="submit" class="submit" value="登録する">
			</form>
		</div>
	</main>
	<footer>
	<p>©︎2018 Internous.inc All right reseved</p>
	</footer>
	
	<script>
	function ConfirmPassword(confirm) {
		var input1 = password.value;
		var input2 = confirm.value;
		if(input1 != input2) {
			confirm.setCustomValidity("パスワードが一致しません。");
		} else {
			confirm.setCustomValidity("");
		}
	}
	</script>
</body>
</html>