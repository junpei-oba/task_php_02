課題1
URLとControllerやActionを紐付ける機能を何といいますか？
⇒Routing

課題2
あなたが考える、group化をすることのメリットを考えてみてください。
⇒途中まで同じURLで、以降を分岐させたURLを設定しようとするとき、
　共通部分のURLをひとまとめとしてコードを記述することができる。
　
課題3
「http://XXXXXX.jp/XXX というアクセスが来たときに、 
AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。
Route::get('XXX', 'AAAController@bbb');