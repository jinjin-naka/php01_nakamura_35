<?php

$name = $_POST['name'];
$mailaddress = $_POST['mailaddress'];
$depositrate = $_POST['depositrate'];
$angry = $_POST['angry'];
$ownasset = $_POST['ownasset'];
$product = $_POST['product'];
// var_dump($ownasset);
$ownasset_2 = implode(',',$ownasset);


// ファイルに書き込み
$date = date('T/m/d H:i:s');
$str = $date .'/'. $name .'/'. $mailaddress.'/'. 
$depositrate.'%'.'/'.$angry.'/'.$ownasset_2.'/'.$product;

$file = fopen('./data/data.txt','a');
fwrite($file, $str . "\n");
fclose($file);
//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>アンケート結果を送信しました</h1>

    <ul>
        <li><a href="read.php">これまでの解答結果を確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>


</html>
