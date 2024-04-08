<?php

echo "最小値を入力してください" . "\n";
$min = fgets(STDIN);
echo "最大値を入力してください" . "\n";
$max = fgets(STDIN);

while($min >= $max) {
    echo "最大値は最小値より大きくなるように入力してください" . "\n";
    echo "最小値を入力してください" . "\n";
    $min = fgets(STDIN);
    echo "最大値を入力してください" . "\n";
    $max = fgets(STDIN);
}

function guessTheNum($min, $max) {
    $ramdomInt = random_int($min, $max);
    $maxAnswerCount = round(($max - $min) / 2);

    for($i = 1; $i <= $maxAnswerCount; $i++) {
        echo "乱数を推測してください" . "\n";;
        $answer = fgets(STDIN);

        if($ramdomInt == $answer) {
            return "正解です、ゲームクリア" . "\n";
        } else {
            echo "不正解です、残り回答数" . $maxAnswerCount - $i . "回" . "\n";;
        }
    }

    return "GAME OVER" . "\n";
}

echo guessTheNum($min, $max);