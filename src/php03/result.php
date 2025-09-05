<?php
require_once('config/status_codes.php');

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);

if (isset($_POST['option'])) {
    $option = htmlspecialchars($_POST['option'], ENT_QUOTES);
}
else {
    header('Location: index.php');
    exit;
}

foreach ($status_codes as $status_code) {
    if ($status_code['code'] === $answer_code) {
        $code = $status_code['code'];
        $description = $status_code['description'];
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
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
        <div class="result__content">
            <div class="result">
                <?php if ($answer_code === $option):?>
                    <h2 class="result__text--correct">
                        正解
                    </h2>
                <?php else:?>
                    <h2 class="result__text--incorrect">
                        不正解
                    </h2>
                <?php endif; ?>
            </div>
            <table class="quiz-answer__detail">
                <tr>
                    <th>ステータスコード</th>
                    <td><?php echo($code)?></td>
                </tr>
                <tr>
                    <th>説明</th>
                    <td><?php echo($description)?></td>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>