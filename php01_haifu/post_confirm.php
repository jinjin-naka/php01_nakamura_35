<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$password = $_POST['password'];

$name = htmlspecialchars($name, ENT_QUOTES);
$mail = htmlspecialchars($mail, ENT_QUOTES);
$password = htmlspecialchars($password, ENT_QUOTES);

?>

<!-- // POSTを受け取る
// POSTの場合はパスワードも送ってみる。 -->

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    お名前：<?= $name ?>
    EMAIL：<?= $mail ?>
    パスワード：<?= $password ?>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
