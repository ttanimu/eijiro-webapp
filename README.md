# eijiro-webapp
This is the code part of the dictionary web application using Apache2, PHP, Perl and Eijiro dictionary data(ver 79).

これはApache2、PHP、Perl、英辞郎(ver 79)を使用した辞書ウェブアプリケーションのコード部分。

## 準備
英辞郎(ver 79)に含まれる英和データ"eijiro79.txt"と和英データ"waeiji79.txt"の文字コードはSJISであるが、これをUTF-8に変換した"eijiro79.txt"を"e/"ディレクトリに、同じく変換した"waeiji79.txt"を"j/"ディレクトリに配置する。

PHPの設定でshort_open_tagを有効にする。
Ubuntu 18.04なら"/etc/php/7.2/apache2/php.ini"の
"short_open_tag = Off"の行を"short_open_tag = On"に変更する。

Apache2の設定ファイル"/etc/apache2/envvars"の
"#. /etc/default/locale"の行を". /etc/default/locale"に変更する。
これはPHPのescapeshellcmd()関数で日本語を処理するため。

## 実行
ウェブブラウザで開くのは英和辞書では"e/"ディレクトリ、和英辞書では"j/"ディレクトリ。

## 注意
英辞郎は別途購入ください。
このコードと英辞郎を組み合わせて使用する場合は英辞郎のライセンスを遵守ください。