<?php
    $a = 15;
    $b = 3;
    $c = 10;

    echo "算術演算子";
    echo "<br>";
    echo ($a + $b) . "<br>";
    echo $a - $b . "<br>";
    echo $a * $b ;
    echo "<br>";
    echo $a / $b;
    echo "<br>";
    echo $a % $c;
    echo "<br><br>";

    $a = 15;
    $b = 3;
    $c = 10;
    $d = 5;

    $a /= $d;
    $b *= $d;

    echo "代入演算子";
    echo "<br>";
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br><br>";

    $a = 20;
    $b = 5;

    echo "比較演算子";
    echo "<br>";
    echo $a > $b;
    echo "<br><br>";

    $a = 20;
    $b = 5;

    echo "論理演算子";
    echo "<br>";
    echo $a > 10 and $a < 30;
    echo "<br><br>";

    $a = 10;
    $b = 10;
    $c = 5;
    $d = 5;

    echo "加算子と減算子";
    echo "<br>";
    echo ++$a;
    echo "<br>";
    echo $b++;
    echo "<br>";
    echo --$c;
    echo "<br>";
    echo $d--;
    echo "<br><br>";