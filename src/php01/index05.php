<?php
    echo "if文<br>";
    $a = 7;
    if($a == 5){
        echo "\$aは5です";
    }
    elseif($a == 7){
        echo "\$aは7です";
    }
    else{
        echo "\$aは5と7以外です";
    }
    echo "<br><br>";

    echo "switch文<br>";

    $people = "Saburo";

    switch($people){
        case $people == "Itiro":
            echo "一郎です";
            break;
        case $people == "Ziro":
            echo "二郎です";
            break;
        case $people == "Saburo":
            echo "三郎です";
            break;
        default:
            echo "あなたは誰ですか";
            break;
    }

    echo "<br><br>三項演算子<br>";

    $a = 7;

    $result = ($a > 5) ? "TRUE" : "FALSE";

    echo $result;