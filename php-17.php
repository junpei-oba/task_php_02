課題1
【超応用】 プロフィールの更新履歴を保存する仕組みを作るにはどのようにしたらよいでしょうか。
手順をまとめてみましょう。（どうしてもわからなからない場合はメンターに相談してみましょう。）
→⑴マイグレーションファイルprofile_histories_table.phpを作成
   テーブルには、
    $table->increments('id');
    $table->integer('profile_id');
    $table->string('edited_at');
    <!--$table->string('edited_at');←これは使用せず、下記timestampsをformatメソッドを用いて表示することもできるが、
    まずはひとまずテキスト通りにやってみる-->
    $table->timestamps();
    を用意する。
 ⑵マイグレーション実行
 ⑶app/ProfileHistory.phpでProfileHistory Modelを実装。
     
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class ProfoleHistory extends Model
    {
        protected $guarded = array('id');
    
        public static $rules = array(
            'profile_id' => 'required',
            
            'edited_at' => 'required',
        );
    }   
 ⑷Profile Modelとの関連を定義するために、app/Profile.phpへ、
　　public function profileHistories()
    {
      return $this->hasMany('App\ProfoleHistory');
    }
    を追記する
 ⑸ProfileController の update Actionで、Profile Modelを保存するタイミングで、
   同時に ProfoleHistory Modelにも編集履歴を追加するよう実装する。
   update Actionへ、
    $profile_history = new ProfoleHistory;
    $profile_history->profile_id = $profile->id;
    $profile_history->edited_at = Carbon::now();
    $profile_history->save();
    を追記する
 ⑹CarbonライブラリとProfoleHistoryモデルの使用を宣言するため、
   ProfileController.phpの冒頭に
    use App\ProfoleHistory;
    use Carbon\Carbon;
    を追記する
 ⑺記録した変更履歴を編集画面で参照できるようにするため、
   edit.blade.phpに
    <div class="row mt-5">
        <div class="col-md-4 mx-auto">
            <h2>編集履歴</h2>
            <ul class="list-group">
                @if ($profile_form->profoleHistories != NULL)
                    @foreach ($profile_form->profoleHistories as $history)
                        <li class="list-group-item">{{ $history->edited_at }}</li>
                    @endforeach
                    <!--formatメソッドの使い方は下記で正しいのか確認要-->
                    <!--@foreach ($profile_form->profoleHistories as $history)-->
                    <!--    <li class="list-group-item">{{ $history->created_at->format('Y/m/d') }}</li>-->
                    <!--@endforeach-->
                @endif
            </ul>
        </div>
    </div>
    を追記する
    