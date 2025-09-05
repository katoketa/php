<?php
    $people = [
        "person1" => [
            "name" => "Taro",
            "age" => 25,
            "gender" => "men"
        ],
        "person2" => [
            "name" => "Jiro",
            "age" => 20,
            "gender" => "men"
        ],
        "person3" => [
            "name" => "Hanako",
            "age" => 16,
            "gender" => "women"
        ]
    ];

    foreach ($people as $person => $data) {
        echo $person . "：" . $data["name"] . "(" . $data["age"] . "歳" . $data["gender"] . ")<br>";
    }