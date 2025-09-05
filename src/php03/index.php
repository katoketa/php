<?php
require_once('config/status_codes.php');

$random_indexes = array_rand($status_codes, 4);

foreach ($random_indexes as $index) {
    $options[] = $status_codes[$index];
}
$question = $options[array_rand($options)];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/php03" class="header__logo">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">
                    Q. 以下の内容に当てはまるステータスコードを選んでください
                </p>
                <p class="question__text">
                    <?php echo($question['description'])?>
                </p>
            </div>
            <form action="result.php" method="post" class="quiz-form">
                <input type="hidden" name="answer_code" value="<?php echo($question['code'])?>">
                <div class="quiz-form__item">
                    <?php foreach($options as $option):?>
                        <div class="quiz-form__group">
                            <input type="radio" name="option" id="<?php echo($option['code'])?>" class="quiz-form__radio" value="<?php echo($option['code'])?>">
                            <label for="<?php echo($option['code'])?>" class="quiz-form__label">
                                <?php echo($option['code'])?>
                            </label>
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>