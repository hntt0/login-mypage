<?php 
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>無題ドキュメント</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body>
	<header>
		<div class="box"></div>
		<div class="logo">
			<img src="img/4eachblog_logo.jpg" alt="ロゴ">
		</div>
		<div class="box77">
			<a href="login.php">ログイン</a>
			<div class="logout"><a href="log_out.php">ログアウト</a></div>
		</div>
	</header>
	<main>
		<h1>会員情報</h1>
		<div class="register">
			<p class="hello">こんにちは！<?php echo $_SESSION['name']?>さん</p>
			<div class="userinfomation">
				<div class="userimg">
					<img src="<?php echo $_SESSION['picture']?>">
				</div>
				<form action="mypage_update.php" method="post" enctype="multipart/form-data">
				<div class="userinfo">
					<p>氏名:<input type="text" name="username" value="<?php echo $_SESSION['name'];?>"</p>
					<p>メール:<input type="text" name="mail" value="<?php echo $_SESSION['mail'];?>"</p>
					<p>パスワード:<input type="password" name="pass" value="<?php echo $_SESSION['password'];?>"</p>
				</div>
			</div>
			<p class="coment"><textarea name="coment" cols="70" rows="10"><?php echo $_SESSION['comments'];?></textarea></p>
			<input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
				<input type="submit" name="submit" class="submit" value="この内容に変更する">
			</form>
		</div>
	</main>
	<footer>
	<p>©︎2018 Internous.inc All right reseved</p>
	</footer>
</body>
</html>