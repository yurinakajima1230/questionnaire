<!-- データ登録 -->
<?php
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$food = trim($_POST["food"]);
$c = "、"; // 日本語の全角カンマ

$str = $name . $c . $email . $c . $food . "\n";

$file = fopen("data.csv", "a");
fwrite($file, $str);
fclose($file);

header("Location: index.php");
exit;
?>