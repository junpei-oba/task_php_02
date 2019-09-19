<?php
// 課題1
// $name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
// もし違ったら「あなたの名前ではありません」と表示するように実装してください。
$name = "junpei";
if($name=="junpei"){
    echo "私はあなたの名前です";
}else{
    echo "あなたの名前ではありません";
}
echo "\n";

// 課題2
// for文を使って、1から10000までの合計の値を表示してください。
$sum = 0;
for($number=1;$number<=10000;$number++){
    $sum += $number;
}
echo $sum;
echo "\n";

// 課題3
// $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("orange","apple","grape","peach","melon");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

// 課題4
// 【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;
$i = 0;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}