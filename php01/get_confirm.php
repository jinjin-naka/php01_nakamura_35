<?php

// GETで送られてきた名前とアドレスのデータを受け取る
// var_dump($_GET);

$namae = $_GET['namae'];
$mail = $_GET['mail'];
$address = $_GET['address'];

// (演習)名前、アドレス以外の情報を追加して送ってみましょう（性別、年齢などなど）

?>

<html>

<head>
    <meta charset="utf-8">
    <title>GET練習（受信）</title>
</head>

<body>
    <p>お名前：<?= $namae?> </p>
    <p>Mail：<?= $mail?> </p>
    <p>住所：<?= $address?> </p>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
