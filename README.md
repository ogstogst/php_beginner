# 1. index
- [1. index](#1-index)
- [2. url](#2-url)
- [3. PHPの概要\[PHP overview\]](#3-phpの概要php-overview)
  - [3.1. PHPの動作環境](#31-phpの動作環境)
  - [3.2. 用語](#32-用語)
    - [3.2.1. ホワイトスペース](#321-ホワイトスペース)
    - [3.2.2. プラットフォーム](#322-プラットフォーム)
    - [3.2.3. クロスプラットフォーム](#323-クロスプラットフォーム)
    - [3.2.4. CGI](#324-cgi)
  - [3.3. MEMO](#33-memo)
- [4. テキストと数の操作](#4-テキストと数の操作)
  - [4.1. MEMO](#41-memo)
  - [4.2. 用語](#42-用語)
    - [4.2.1. 変数](#421-変数)
    - [4.2.2. 単一引用符・二重引用符](#422-単一引用符二重引用符)
    - [4.2.3. 特殊文字](#423-特殊文字)
    - [4.2.4. フォーマット規則](#424-フォーマット規則)
    - [4.2.5. 文字列結合演算子](#425-文字列結合演算子)
  - [4.3. 関数](#43-関数)
    - [4.3.1. printf()](#431-printf)
    - [4.3.2. strlen()](#432-strlen)
    - [4.3.3. substr()](#433-substr)
    - [4.3.4. str\_replace()](#434-str_replace)
    - [4.3.5. trim()](#435-trim)
    - [4.3.6. ucwords()](#436-ucwords)
    - [4.3.7. strtolower()](#437-strtolower)
- [](#)
- [](#-1)

# 2. url
- [git](https://github.com/ogstogst/php_beginner)
- [dev](http://localhost:49152/)
- [dev_database](http://localhost:49153/)
- [予約語一覧](https://www.php.net/manual/ja/reserved.php)
- [定義済みの定数](https://www.php.net/manual/ja/reserved.constants.php)

# 3. PHPの概要[PHP overview]
- PHPはプログラムをコンパイルせずに実行するスクリプト言語。
- 動的なWebページの生成が可能なため、HTMLに埋め込み、Webアプリケーションの開発に利用できる。
- PHPはWebサーバーで実行されることから、サーバーサイドスクリプト言語と言われている。（JavaScriptはクライアントサイドと呼ばれる）
- PHPを使用する際にライセンス料はかからない。
- PHPはほとんどのLinuxディストリビューションに同梱されている。
- PHPはオープンソース。ソースコードが公開されているため、誰でもPHPの内部を見ることができる
- PHPは、SQLiteをはじめPostgreSQL, MySQL, Oracle Database, Microsoft SQL Server のほか、多くのデータベースをさポートしている。
- PHPでは、空行は無視される。
- [PHPのコメントの書き方](/php_overview/comment.php)

## 3.1. PHPの動作環境
- オペレーティングシステム
  PHPはクロスプラットフォームに対応しているので、Windows, macOS, Linux, Solaris, あらゆるバージョンのUNIX環境すべてで使用することができる。
- CGI規格をサポートするWebサーバー
  PHPはApache, Nginx, Microsoft IISなどの多くのWebサーバーと互換性がある。
  PHPはサーバーサイドスクリプト言語であるため、Webサーバー上で動作する。
- データベース
  PHPはSQLite, PostgreSQL, MySQL, Oracle Database, Microsoft SQL Serverなど、多くのデータベースシステムをサポートしている。
  これにより、PHPはデータ駆動型のWebアプリケーションの開発に適している。
- ブラウザ
  PHPで生成されたWebページは、すべての主要なWebブラウザで表示することができる。
  ただし、ブラウザはPHPコードを直接解釈するわけではなく、サーバー上でPHPが実行され、結果として生成されたHTMLをブラウザが解釈する。

## 3.2. 用語

### 3.2.1. ホワイトスペース
半角スペースやタブのように空白に見える文字や、改行や空行のように目に見えない文字を指す。

### 3.2.2. プラットフォーム
プラットフォームとは、ソフトウェアが動作するための基盤や環境を指す。これはオペレーティングシステム(Windows, macOS, Linuxなど)やハードウェア(PC, スマホ, サーバーなど)、
またはソフトウェアフレームワーク(.NET, Java, Node.js)などを含むことがある。
プラットフォームは、アプリケーションが実行される際の「ステージ」のようなもので、アプリケーションが正しく動作するために必要なライブラリ、ツール、サービスを提供する。
Windowsプラットフォームとか、Androidプラットフォームとか言ったりする。

### 3.2.3. クロスプラットフォーム
クロスプラットフォームとは、あるソフトウェアが複数の異なるオペレーティングシステムやハードウェア環境で動作する特性を指す。
例えば、Windows, macOS, Linuxなどの異なるオペレーティングシステムで同じアプリケーションが動作する場合、そのアプリケーションはクロスプラットフォームといえる。
クロスプラットフォームの開発は、一つのコードベースで複数のプラットフォームをカバーできるため、開発労力の削減や保守性の向上に寄与する。
しかし、各プラットフォームの特性を最大限に活用するためには、プラットフォーム固有のコードを書く必要がある場合もある。
Java, Pythonは異なるオペレーティングシステムで動作する特性をもつからクロスプラットフォーム。
Objective-CやSwiftはiOSやmacOS向けのアプリケーション。Appleのプラットフォーム上でしか動作しないため、クロスプラットフォームではない。

### 3.2.4. CGI
CGI（Common Gateway Interface）規格をサポートするWebサーバーとは、CGIというプロトコルを用いて外部プログラムと通信できるWebサーバーのことを指す。

## 3.3. MEMO
- Webサーバー？
- HTTPリクエスト？
- HTTPSリクエスト？
- クライアントサイド？
- Linuxディストリビューション？
- オープンソース？
- クロスプラットフォーム？

# 4. テキストと数の操作

## 4.1. MEMO
1. C
2. D
3. D
4. A
5. C
6. D
7. A
8. D
9. B
10. A
11. C

## 4.2. 用語
### 4.2.1. 変数
変数とは、プラグラムが動作する際に使用する値を保存する箱のようなもの。
変数を管理するためにつける名前を、'変数名'と呼び、変数名の前には「$」をつける。

### 4.2.2. 単一引用符・二重引用符
単一引用符 === シングルクォート
単一引用符で囲まれた文字列内では、変数は展開されず、エスケープシーケンス（例えば\nや\t。特殊文字とも呼ぶ）も解釈されない。
単一引用符で囲まれた変数名は変数が値に置き換えられた文字列とはならない。
二重引用符 === ダブルクォート
単一引用符と異なり、変数の展開や特定のエスケープシーケンス（例えば\nで改行、\tでタブ。特殊文字とも呼ぶ）の解釈が行われる。
単一引用符と異なり、二重引用符で囲まれた変数名は変数が値に置き替えられた文字列となる。
これにより、動的な文字列を降り簡単に生成することができる。
[エスケープシーケンス](/php_text-and-number/quote.php)

### 4.2.3. 特殊文字
1. \n : 改行（LF、Line Feed）を表します。
2. \r : キャリッジリターン（CR、Carriage Return）を表します。
3. \t : タブを表します。
4. \\ : バックスラッシュ自体を表します。
5. \$ : ドル記号を表します。変数の展開を避ける場合に使用します。
6. \" : ダブルクォートを表します。ダブルクォートで囲まれた文字列内でダブルクォートを使用する場合にエスケープが必要です。
7. \' : シングルクォート（アポストロフィ）を表します。シングルクォートで囲まれた文字列内でシングルクォートを使用する場合にエスケープが必要です。
8. \x[0-9A-Fa-f]{1,2} : 16進数で指定された文字を表します。例えば、\x41は「A」を表します。
9. \u{[0-9A-Fa-f]+} : Unicode文字を表します。例えば、\u{41}は「A」を表します。
10. \0 : NULL文字を表します。

### 4.2.4. フォーマット規則

### 4.2.5. 文字列結合演算子
[official](https://www.php.net/manual/ja/language.operators.string.php)

## 4.3. 関数
### 4.3.1. printf()
[official](https://www.php.net/manual/ja/function.printf.php)
[ex](/php_text-and-number/printf.php)
printf()関数は、フォーマットされた文字列を出力する。フォーマットを指定することで、形式をそろえた文字列を出力することができる。
printf(フォーマット, フォーマット中に変換する値)

### 4.3.2. strlen()
[official](https://www.php.net/manual/ja/function.strlen.php)
[ex](/php_text-and-number/strlen.php)
与えられたstringの長さを返す。
strlen()が返すのはバイト数であり、文字数ではない。

### 4.3.3. substr()
[official](https://www.php.net/manual/ja/function.substr.php)
[ex](/php_text-and-number/substr.php)
文字列の一部分を取り出す。
```php
substr(string $string, int $offset, ?int $length = null): string
```

### 4.3.4. str_replace()
[official](https://www.php.net/manual/ja/function.str-replace.php)
[ex](/php_text-and-number/str_replace.php)
一部の文字列を置換する。
```php
str_replace(
    array|string $search,
    array|string $replace,
    string|array $subject,
    int &$count = null
): string|array
// この関数は、subject の中の search を全て replace に置換します。
// この関数は、置換後の文字列あるいは配列を返します。
```

### 4.3.5. trim()
[official](https://www.php.net/manual/ja/function.trim.php)
[ex](/php_text-and-number/trim.php)
文字列の先頭および末尾にあるホワイトスペースを取り除く
```php
trim(string $string, string $characters = " \n\r\t\v\x00"): string
```
2番目のパラメーターを指定しない場合、trim()は以下の文字を削除する。
- " " (ASCII 32 (0x20)): 通常の空白。
- "\t" (ASCII 9 (0x09)): タブ。
- "\n" (ASCII 10 (0x0A)): リターン。
- "\r" (ASCII 13 (0x0D)): 改行。
- "\0" (ASCII 0 (0x00)): NULバイト。
- "\v" (ASCII 11 (0x0B)): 垂直タブ。

### 4.3.6. ucwords()
[official](https://www.php.net/manual/ja/function.ucwords.php)
[ex](/php_text-and-number/ucwords.php)

### 4.3.7. strtolower()
[official](https://www.php.net/manual/ja/function.strtolower.php)
[ex](/php_text-and-number/strtolower.php)
- strtoupper()もある。すべて大文字にするらしい。

#

#