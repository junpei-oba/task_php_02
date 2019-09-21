<?php
// 課題1
// 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function num($x){
    $result1 = 0;
    $result1 = $x*2;
    return $result1;
}
echo num(100);
echo "\n";


// 課題2
// $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
// 　参考）引数は下記のように指定すると、複数の仮引数を使うことができます。
function f($a, $b){
//処理したい内容
    $result2 = 0;
    $result2 = $a + $b;
    return $result2;
}
echo f(3,6);
echo "\n";


// 課題3
// $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
// その要素をすべてかけた結果を返す関数を作成してください。

function ar($arr){
    $result3 = 1;
    foreach($arr as $aa){
    $result3 *= $aa;
    }
    return $result3;
}

echo ar(array(1,3,5,7,9));
echo "\n";


// 課題4
// 【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数
// を実装しようとしています。途中の部分を完成させてください。
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
         if($a > $max_number){
             $max_number = $a;
        }
    }
 return $max_number;
 }
echo max_array(array(3,1,5,2,4,12,8,6));
echo "\n";
 
// 課題5
// 次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
// strip_tags
// array_push
// array_merge
// time, mktime
// date

// ・strip_tags：HTMLタグを取り除く
$str = "aaa<br>bbb<br><hr>";
// タグそのまま
echo $str;
echo "\n";
// タグ取り除く
echo strip_tags( $str );
echo "\n";

// ・array_push：一つ以上の要素を配列の最後に追加する
$example = array("a","b","c","d");
array_push($example,"e","f");
print_r($example);

// ・array_merge：ひとつまたは複数の配列を結合する
$example2 = array(1,2,3,4,5);
$example3 = array(6,7,8,9);
$example4 = array(10,11,12,13,14,15);
$array1 = array_merge($example2,$example3,$example4);
print_r($array1);
echo "\n";

// ・time, mktime：time関数は、現在時刻のUNIXタイムスタンプの取得
//                 metime関数は、指定した時刻のUNIXタイムスタンプの取得
//                 UNIXタイムスタンプとは、1970年1月1日0時0分0秒からの経過秒数
//                 mktime(時,分,秒,月,日,年);
echo "現在のタイムスタンプ：".time();
echo "\n";
$four_days_lator = time() + (4 * 24 * 60 * 60);
echo "4日後のタイムスタンプ：".$four_days_lator;
echo "\n";
// 2019年9月20日15時38分25秒のタイムスタンプ
$timestamp = mktime(15,38,25,9,20,2019);
echo "2019年9月20日15時38分25秒のタイムスタンプ：".$timestamp;
echo "\n";


// ・date：time,mktime関数で取得したUNIXタイムスタンプを日時に変換
echo date( "Y年m月d日H時i分s秒" , $timestamp ) ;
echo "\n";
?>
