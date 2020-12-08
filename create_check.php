<?php
$name = $_POST["username"];
$mail = $_POST["mail"];
$coment = $_POST["comments"];
$pass = $_POST["pas"];

$temp_pic_name = $_FILES['picture']['tmp_name'];
$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);
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
	<main>
		<h1>会員登録</h1>
		<div class="register">
			<h3>こちらの内容で登録しても宜しいでしょうか？</h3>
				<label class="form">氏名</label>
				<?php echo $name?>
				<label class="form">メールアドレス</label>
				<?php echo $mail?>
				<label class="form">パスワード</label>
				<?php echo $pass?>
				<label class="form">コメント</label>
				<?php echo $coment?>
				<div class="mit1">
				<form action="create.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="username" value="<?php echo $name?>">
				<input type="hidden" name="mail" value="<?php echo $mail?>">
				<input type="hidden" name="pass" value="<?php echo $pass?>">
				<input type="hidden" name="picture" value="<?php echo $path_filename?>">
				<input type="hidden" name="comments" value="<?php echo $coment?>">
				<input type="submit" name="submit" class="submit2" value="登録する">
				</form>
				</div>
		</div>
	</main>
	<footer>
	<p>©︎2018 Internous.inc All right reseved</p>
	</footer>
</body>
</html>