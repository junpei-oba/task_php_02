<?php
// 1から10までを足して合計を出力する
function sum(){
    $result = 0;
    for($i = 1; $i <= 10; $i++){
        $result += $i;
    }
    return $result;
}

echo sum();
echo "\n";


// 1から$max(今回は、$max=100)までを足して合計を出力する

function sum1($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}

echo sum1(100);
echo "\n";


?>