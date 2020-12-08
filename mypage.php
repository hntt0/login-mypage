<?php
define("HOST", "localhost");
define("DB_NAME", "task00");
define("USER", "root");
define("PASS", "root");
session_start();
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");

if(empty($_SESSION['id'])){
	$mail = $_POST["mail"];
	$pass = $_POST["pas"];

$pdo = new PDO("mysql:host=" . HOST . ";dbname=" .DB_NAME, USER, PASS, $options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
try{
$pdo = new PDO("mysql:host=". HOST . ";dbname=". DB_NAME, USER ,PASS, $options);
} catch(PDOException $e){
	die("<p>申し訳ありません。現在サーバーが混み合っており一時的にアクセスできません。<br>しばらくしてから再度ログインをしてください。</p>
	<a href='http://intarnous/login/mypage/ingoin.php'>ログイン画面へ</a>");
}
$sql = "SELECT * FROM Mypage where password = ? && mail = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $pass);
$stmt->bindValue(2, $mail);
$stmt->execute();
$pdo = NULL;

while($row=$stmt->fetch()) {
	$_SESSION['id']=$row['id'];
	$_SESSION['name']=$row['name'];
	$_SESSION['mail']=$row['mail'];
	$_SESSION['password']=$row['password'];
	$_SESSION['picture']=$row['picture'];
	$_SESSION['comments']=$row['comments'];
}
if(empty($_SESSION['id'])){
	header("Location: login_error.php");
}

if(!empty($_POST['login_keep'])) {
		$_SESSION['login_keep']=$_POST['login_keep'];
	}
}

if(!empty($_SESSION['id']) && !empty($_SESSION['login_keep'])){
		setcookie('mail',$_SESSION['mail'],time()+60*60*24*7);
		setcookie('password', $_SESSION['password'],time()+60*60*24*7);
		setcookie('login_keep', $_SESSION['login_keep'],time()+60*60*24*7);
	}else if(empty($_SESSION['login_keep'])){
		setcookie('mail','', time()-1);
		setcookie('password','',time()-1);
		setcookie('login_keep','', time()-1);
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
		<div class="box77">
			<a href="login.php">ログイン</a>
			<div class="logout"><a href="log_out.php">ログアウト</a></div>
			<p><?php echo $_COOKIE['password'];?></p>
		</div>
	</header>
	<main>
		<h1>会員情報</h1>
		<div class="register">
			<p class="hello">こんにちは！  <?php echo $_SESSION['name']?>さん</p>
			<div class="userinfomation">
				<div class="userimg">
					<img src="<?php echo $_SESSION['picture']?>">
				</div>
				<div class="userinfo">
					<p>氏名:<?php echo $_SESSION['name'];?></p>
					<p>メール:<?php echo $_SESSION['mail'];?></p>
					<p>パスワード:<?php echo $_SESSION['password'];?></p>
				</div>
			</div>
			<p class="coment"><?php echo $_SESSION['comments'];?></p>
			<form action="mypage_hensyu.php" method="post" >
				<input type="hidden" value="<?php echo rand(1, 10);?>" name="form_mypage">
				<input type="submit" name="submit" class="submit" value="編集する">
			</form>
		</div>
	</main>
	<footer>
	<p>©︎2018 Internous.inc All right reseved</p>
	</footer>
</body>
</html>