<?php
define("HOST", "localhost");
define("DB_NAME", "task00");
define("USER", "root");
define("PASS", "root");

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
try{
$pdo = new PDO("mysql:host=". HOST . ";dbname=" . DB_NAME, USER, PASS, $options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$sql = "insert into Mypage(name, mail, password, picture, comments) values(:name, :mail, :password, :picture, :comments)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":name", $_POST["username"]);
$stmt->bindValue(":mail", $_POST["mail"]);
$stmt->bindValue(":password", $_POST["pass"]);
$stmt->bindValue(":picture", $_POST["picture"]);
$stmt->bindValue(":comments", $_POST["comments"]);
$stmt->execute();
$pdo = NULL;
header("Location: after_register.html");
}	catch (Exception $e){
	$e->getMessage();
}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>無題ドキュメント</title>
</head>

<body>
</body>
</html>