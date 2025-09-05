<?php
    function echoNum($num) {
        echo $num;
    }

    echo "関数<br>";
    $a = 5;
    echoNum($a);


    echo "<br><br>問題１<br>";

    function echoResult ($score1, $score2, $score3) {
        $result = $score1 + $score2 + $score3;
        if ($result > 210) {
            // 合格
            echo "合計点は" . $result . "なので合格です<br>";
        }
        else {
            // 不合格
            echo "合計点は" . $result . "なので不合格です<br>";
        }
    }

    echoResult(100, 54, 72);
    echoResult(23, 33, 98);
    echo "<br>";


    echo "問題２<br>";

    function calTriangleArea ($bottom, $height) {
        return $bottom * $height / 2;
    }

    function calQuadArea ($width, $height) {
        return $width * $height;
    }

    function calTrapezoidArea ($top, $bottom, $height) {
        return ($top + $bottom) * $height / 2;
    }

    echo "三角形<br>";
    echo calTriangleArea(10, 10);

    echo "<br><br>四角形<br>";
    echo calQuadArea( 10, 10);
    
    echo "<br><br>台形<br>";
    echo calTrapezoidArea(10, 0.1, 10);