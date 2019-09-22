課題1
lsに「-l」オプションをつけて実行してみましょう。また、lsに他にどんなオプションが有るか調べてみましょう。
JunpeiOba:~/environment/php_practice (master) $ ls -l
total 24
-rw-r--r-- 1 ec2-user ec2-user 1708 Sep 18 14:49 php-02.php
-rw-r--r-- 1 ec2-user ec2-user 1289 Sep 19 01:18 php-03.php
-rw-r--r-- 1 ec2-user ec2-user 3124 Sep 20 08:43 php-04.php
-rw-r--r-- 1 ec2-user ec2-user 1328 Sep 21 08:37 php-05.php
-rw-rw-r-- 1 ec2-user ec2-user   24 Sep 18 14:23 practice.php
-rw-r--r-- 1 ec2-user ec2-user  434 Sep 19 06:13 sum.php

・-aオプション
　-aオプションを使うと、ファイル名の先頭にピリオドがあるファイルも表示する。
・-1オプション
　リストを縦に並べる
・-rオプション
　リストを通常の反対の順で表示する
・-tオプション
　更新時間順に並べる
・-Sオプション
　ファイルサイズ順でソートする
・-Xオプション
　ファイルを拡張子ごとにまとめる
・-Rオプション
　ディレクトリ内容を再帰的に表示する（その階層の下に紐づくすべてのフォルダ・ファイルを表示する）
・--full-timeオプション
　タイムスタンプの詳細を表示する
・-mオプション
　ファイル名をカンマで区切って表示する
・-hオプション
　単位を読みやすい形式で表示する
・-kオプション
　キロバイト単位で表示する
・-iオプション
　ファイル名の左にi-node番号を表示する
　※inode…ファイルやディレクトリの所有者や更新日時、ファイルサイズなどの「属性情報が書かれているデータ」
　　このデータひと固まりに番号が振られており、それをi-node番号という
・-Fオプション
　ディレクトリ名の後に「/」を、実行可能なファイル名の後に「*」をそれぞれ付加する

課題2
echoコマンドの役割と使い方を調べてみましょう。
・役割
echo【コマンド】とは、コンピュータさんに対する命令文（コマンド）のひとつであり、
画面に文字列を表示するときに使うコマンド
・使い方
echo 表示するもの

課題3
echo 好きな文字列 > 好きなファイル名 を入力することで、
好きなファイル名に好きな文字列を書き込むことができます。試してみましょう。
・入力した文字列
JunpeiOba:~/environment/php_practice (master) $ echo baseball > sports.php
JunpeiOba:~/environment/php_practice (master) $ echo soccer > sports2.php
結果⇒php_practiceフォルダ内にsports.phpファイルが作成され、そのファイルにbaseballと入力された。
      php_practiceフォルダ内にsports2.phpファイルが作成され、そのファイルにsoccerと入力された。

課題4
cat コマンドの役割と使い方を調べてみましょう。
また、catコマンドを使って3.で作ったファイルの中身を見てみましょう。
・役割
複数のファイルの中身を合体させたいときに使う
・使い方
cat ファイル名a ファイル名b > ファイル名c
JunpeiOba:~/environment/php_practice (master) $ cat sports.php sports2.php > sports3.php
結果⇒php_practiceフォルダ内にsports3.phpファイルが作成され、そのファイルにbaseball soccerと入力された。
