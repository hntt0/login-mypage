<?php
define("HOST", "localhost");
define("DB_NAME", "task00");
define("USER", "root");
define("PASS", "root");

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
session_start();


try{
$pdo = new PDO("mysql:host=". HOST . ";dbname=". DB_NAME, USER, PASS, $options);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$stmt = $pdo->prepare("UPDATE Mypage SET name = :name, mail = :mail, password = :pass, comments = :coment where id = :id");
$stmt->bindValue(":name", $_POST["username"]);
$stmt->bindValue(":mail", $_POST["mail"]);
$stmt->bindValue(":pass", $_POST["pass"]);
$stmt->bindValue(":coment", $_POST["coment"]);
$stmt->bindValue(":id", $_POST["id"]);
$stmt->execute();
	
$stmt1 = $pdo->prepare("select * from Mypage where id = :id");
$stmt1->bindValue(":id", $_POST["id"]);
$stmt1->execute();
$pdo = NULL;
	
while($row=$stmt1->fetch()) {
	$_SESSION["id"] = $row["id"];
	$_SESSION["name"] = $row["name"];
	$_SESSION["mail"] = $row["mail"];
	$_SESSION["password"] = $row["password"];
	$_SESSION["comments"] = $row["comments"];
}
$stmt1 = NULL;
header("Location: mypage.php");
exit;
}catch( Exception $e) {
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