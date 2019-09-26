課題1
Viewは何をするところでしょうか。簡潔に説明してみてください。
⇒Controllerの指示によってアクセスしてきたユーザーのブラウザに表示するデータを生成するところ。

課題2
プログラマーがhtmlを書かずにPHPなどのプログラミング言語や
フレームワークを使う必要があるのはどういった理由でしょうか。
⇒ログインしたユーザーごとにWebページにユーザー名を表示したい場合などは、
Model経由でデータベースからデータを取得し、それをhtmlファイルに記述してユーザーに渡す必要があるため。

課題3
【応用】 前々章でAdmin/ProfileControllerのadd Action, edit Action に次のように記述しました。
  public function add()
  {
      return view('admin.profile.create');
  }
  public function edit()
  {
      return view('admin.profile.edit');
  }
この場合、add Action と edit Action を描画するには、
それぞれどこのディレクトリに何というbladeファイルを設置すれば良いでしょうか。
⇒add acton…mynews/resources/views/admin/profileにcreate.blade.phpファイルを設置
⇒add acton…mynews/resources/views/admin/profileにedid.blade.phpファイルを設置