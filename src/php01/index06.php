<?php
    echo "for文<br>";

    for ($i=2; $i <= 10; $i+=2) { 
        echo $i . "<br>";
    }
    echo "<br>";


    echo "while文<br>";

    $count = 0;
    while ($count < 20) {
        $count += 1;
        echo $count . "<br>";
    }
    echo "<br>";


    echo "while文（break,continue使用）<br>";

    $count = 0;
    while ($count <= 100) {
        $count += 1;
        if ($count >= 20) {
            break;
        }
        if ($count % 3 === 0) {
            continue;
        }
        echo $count . "<br>";
    }
    echo "<br><br>";


    echo "do...while文<br>";

    $num = 0;
    do{
        echo "num = " . $num . "<br>";
        $num += 1;
    } while ($num < 3);
    echo "<br><br>";


    echo "応用問題<br>";
    echo "FizzBuzzゲーム<br>";
    for ($i = 1; $i <= 50; $i++) {
        echo $i . " : ";
        if ($i % 3 == 0 and $i % 5 == 0) {
            // ３でも５でも割り切れる数
            echo "FizzBuzz";
        }
        elseif ($i % 3 == 0) {
            // 3で割り切れる数
            echo "Fizz";
        }
        elseif ($i % 5 == 0) {
            // ５で割り切れる数
            echo "Buzz";
        }
        else {
            //それ以外の数
            echo "数字";
        }
        echo "<br>";
    }
    echo "<br>";

    echo "二重ループ<br>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo "🔴";
        }
        echo "<br>";
    }