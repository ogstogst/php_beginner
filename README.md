# php_beginner

# url
- [開発環境](http://localhost:8080)
- [予約語一覧](https://www.php.net/manual/ja/reserved.php)
- [定義済みの定数](https://www.php.net/manual/ja/reserved.constants.php)

# 2.1 変数
## url
- [variable](http://localhost:8080/chap02/variable.php)

## 用語
- 変数
  一言でいえばデータの入れ物。
- 代入
  変数に値を格納すること。
- 初期化する
  特に、変数に最初に値を代入すること。
- 変数を参照する
  名前を指定して変数の値を取り出すこと。

# 2.1.2 変数の命名規則
## 表
- ![変数の命名規則](/img/Anonymous-20240109211743.jpg)

# 2.1.3 より良い識別子のためのルール
## 表
- 名前の主な記法
| notation   |  example   | case                       |
| :--------- | :--------: | :------------------------- |
| camelCase  | $userName  | variable, function         |
| Pascal     | $UserName  | class                      |
| underScore | $user_name | constant, uppercase letter |

## 用語
- camelCase記法
  変数/関数に用いる
- アンダースコア記法
  定数に用いる。定数に用いる場合は大文字。
- Pascal記法
  クラスに用いる
- 予約語
  あらかじめ意味が決められた単語のこと
  ex) and class private print ...
- 説明変数・要約変数
  変数の名前がそのままコードの意味を表しているもの
  説明変数には長い分を適切に切り分けるという効果もある

## mistake
- ifは予約語だけど変数として使える
-

# 2.1.4 可変変数
## 用語
- 可変変数
  「変数の名前を他の変数の値で定義することができる」変数のこと
  先頭に$$マークを2つ重ねることによって、変数名を別の変数の値で動的に決定する
  ```php
  <?php
  $var = 'hello';
  $$var = 'world'; // $helloという変数が作成され、'world'が代入される

  echo $hello; // 出力: world
  // $varという変数に'hello'という文字列を代入し、その後$$varという形で可変変数を定義しています。
  // $$varは$varの値、つまり'hello'を変数名とする新しい変数を作成します。
  // そのため、$helloという変数が作成され、その値に'world'が代入されます。
  ```

# 2.2 定数
## url
- [const.php](./chap02/const.php)

## 用語
- 定数
  入れ物と中身がワンセットになっていて、途中で中身を変更できない入れ物のこと。いわゆる閉じた箱。
  スクリプトの中で、何らかの意味を持つ値にあらかじめ名前を付けておく仕組みともいえる。
  ちな変数はただの入れ物のため、途中で中身を変更可能。いわゆる空いている箱。

# 2.2.1 定数の基本
## 定数を使わない例
```php
$price = 1000;
$sum = $price * 1.1;
// ここでは、'1.1' はマジックナンバー
```
上の例ではいくつか問題点あり。
## 用語
- マジックナンバー
  自分以外の人間にとっては意味を持たない裸の（=名前のない）値のこと。
- const
  定数を宣言するための命令

# 2.2.2 定数のルール
## ルール
1. 名前の先頭に$はつけない
2. 名前はPHPで意味を持つ予約語でないこと
3. 全て大文字で、区切る場合はアンダースコアを用いること
4. 利用できる型は限定される

# 2.2.3 define関数
- function()の配下でも使用可能。constは使用不可。
- 変数の値や、演算の結果を定数に割り当てられる。constは無理。
- 実行速度はconstのほうが早い。

# 2.2.4 定義済みの定数
## url
- [定義済みの定数](https://www.php.net/manual/ja/reserved.constants.php)
- [url](./chap02/practice/p_const.php)

# 2.3 データ型
## 用語
- データ型
  データの種類のこと
  - スカラー型
  1. Boolean: 真偽値（trueまたはfalse）を表します。
  2. Integer: 整数値を表します。例: 123, -123
  3. Float (double): 浮動小数点数を表します。例: 12.3, -12.3, 3.14
  4. String: 文字列を表します。例: "Hello, World!"
  - 複合型
  1. Array: 値の集合を表します。例: array("apple", "banana", "cherry")
  2. Object: オブジェクトを表します。オブジェクトはクラスからインスタンス化されます。
  3. Iterable: 配列やオブジェクトのように、項目を一つずつ変えることができるデータ型。
  4. Callable: コールバック関数を表す。
  - 特殊型
  1. Resource: 外部のリソースを表します。例えば、データベースへの接続やファイルへのハンドルなど。
  2. NULL: 値が存在しない、または未定義の変数を表します。
- 静的型付け言語
  JavaやC#のような、データ型を強く意識する変数とデータ型が常にワンセットの言語のこと。PHPは該当しない。
- 動的型付け言語
  PHPはこれに該当する。変数（中身）が入れ物に応じて自動的に型を変えてくれる言語。
- スカラー型
  1つの変数（入れ物）で1つの値だけを扱うことができる型。
- 複合型
  1津の変数で複数の値を扱うことができる型。スカラー型とは対照的。
- 特殊型
  スカラー型/複合型のいずれにも分類できない特殊な値を表す型。
- リテラル
  変数に格納できる値そのもの。または値をスクリプトの中で表現する方法。

# 2.3.1 論理リテラル（bool）

# 2.3.2 整数リテラル (int)

# 2.3.3 浮動小数点数リテラル (float)
## 用語
- 指数表現
  大きな数値や非常に小さな数値を簡単に表すための方法のこと。
  「10の何乗」という形で数を表す方法。
  たとえば「1000」は「10の3乗」とも表せる。これを指数表現で書くと「1e3」となる。
  ここで、「e」は「10の何乗」という意味。
  「0.001」は「10のマイナス3乗」。指数表現で書くと「1e-3」となる。
- 数値セパレーター
  数値を_で区切ること。,カンマはPHPではすでに別の意味を持っているから。

# 2.3.4 文字列リテラル (string)