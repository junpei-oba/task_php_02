課題1
1.Bladeテンプレートで、埋め込みたい箇所に利用するワードは何だったでしょうか？
@yield

課題2
Webpackで使われているBootstrapやSCSSはどういったものか、調べられる範囲で調べてみましょう。
　・Bootstrap
　　BootstrapはHTML／CSS／JavaScriptから構成される最も有名なWEBフレームワーク
　　WEBページでよく使われるフォーム、ボタン、メニューなどの部品がテンプレートとして用意されている。
　　さらにそれらのテンプレートは、WEBページを閲覧するユーザーの端末に応じて自動で表示が最適化されるように、
　　jQuery（JavaScript）で制御されている。
　　主な特徴は下記3点。
　　1.用途が広い
　　　Bootstrapは小規模から大規模のどんな規模のWEBサイトやWEBアプリでも使うことができます。
　　　また、「デザインがわからない人」、「HTMLやCSSがわからない人」、「JavaScriptがわからない人」など、
　　　どんな人でも簡単に扱えるように設計されている。
　　　さらにどんな携帯端末にも対応できるため、非常に幅広い用途で使うことができる。
　　2.デザイン性の確保
　　　WEBページやWEBアプリでは、「見やすさ」や「使いやすさ」に関わる見栄えも重要な要素とされている。
　　　Bootstrapでは、あらかじめ用意されているCSSを適用することで、デザインが全くわからない人でも、
　　　ある程度の見栄えを確保することが可能。
　　　そのためデザイナーの方はもちろん、非デザイナーの方でも、
　　　簡単に見栄えのいいWEBサイトやWEBアプリをつくることができるので重宝されている。
　　3.レスポンシブWEBデザイン
　　　1つのWEBページで、PC、スマートフォン、タブレットなどに対応することをレスポンシブという。
　　　またレスポンシブで、かつ端末ごとに使いやすい適切なデザインがされていることをレスポンシブWEBデザインと呼んでいる。
　　　Bootstrapが登場する前は、WEBサイトはPC向けとスマートフォン向けのページを2つ用意することが必要であった。
　　　しかも、各ページごとに別々で構造や見栄えを調整する必要があったので、開発に手間がかかっていた。
　　　しかし、Bootstrapは同じ1つのページでPCにもスマートフォンにも対応することができる。
　　　そのため、開発の効率が非常によくなる。
　　　さらに端末に合わせて操作しやすいようにデザインも工夫されているため、
　　　ユーザーにとって使いやすいサイトを簡単につくることができる。
　　　
　・SCSS
　　SCSSはcssの拡張メタ言語の一つ。
　　主な特徴は下記6点。
　　1.入れ子（ネスト）できる
　　　CSSの場合は、下記のような記述となるが、
　　　.btn {
          display: block;
            }
    　.btn span {
          display: inline-block;
                }
    　SCSSの場合は、上記と同じ内容を下記のように記述できる。
    　.btn {
          display: block;
          span {
            display: inline-block;
               }
            }
    2.変数が使える
    　変数が使えるので、サイト全体の色や数値をまとめて書いておき、呼び出すような使い方ができる。
    　後からの修正も一括で行えて便利。
    　$pjcolor-01: #52B2C4;
    　$pjcolor-02: #FFFFFF;

    　.btn {
  　　　　background-color: $pjcolor-01;
  　　　　　span {
            color: $pjcolor-02;
               }
            }
    3.演算できる
    　コンパイル時の演算が可能。変数と併用することで、
    　12分割していたグリッドを10分割に変更するなどの使い方ができる。
    　$split-grid: 12;

    　.col-2 {
          flex: 0 0 100% / $split-grid * 2;
          max-width: 100% / $split-grid * 2;
            　}
    4.関数で繰り返しを楽に書ける
    　@each などを使うことで連続したCSSを1回で書ける。
    　変数と組み合わせることで、12分割のCSSを自動出力するような使い方ができる。
    　繰り返し中に if 文を使って分岐するなども可能。
    　$split-grid: 12;

    　@for $i from 1 through $split-grid {
          .col-#{$i} {
            flex: 0 0 100% / $split-grid * $i;
            max-width: 100% / $split-grid * $i;
                      }
            }
    5.継承（mixin）で楽に書ける
    　先に @mixin で型を作っておいて、@include で型を継承することが可能。
    　何度も書くのは面倒なMedia Queryをmixinにするなどの使い方が有用。
    　@mixin desktop {
  　　　　@media screen and (min-width: 992px) {
  　　　　  @content;
 　　　　　 }
　　　}

　　　.p {
  　　　　　font-size: 16px;
　 　　　 @include desktop {
   　　　　　　　 font-size: 20px;
 　　　　　　 }
　　　　}
　　6.ファイルを分割管理できる
　　　@import を使い他のSCSSを読み込める。
　　　これはCSSのようなリンクではなく、コンパイル時にすべて1ファイルで書き出してくれるものなので、
　　　サイトにも優しい。ファイルを変数やパーツに分けて管理しておくと便利。
　　　

　　　