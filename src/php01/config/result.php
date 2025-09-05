<?php
// var_dump($_POST);

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$set = htmlspecialchars($_POST['set'], ENT_QUOTES);
$num = htmlspecialchars($_POST['num'], ENT_QUOTES);

echo "私名前は、" . $name . "<br>";
echo "ご希望の商品は、" . $set . "<br>";
echo "注文数は、" . $num . "<br>";