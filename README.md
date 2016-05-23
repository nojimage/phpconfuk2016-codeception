# Codeception デモ

このプロジェクトは、PHPカンファレンス福岡 2016でのデモで使用したプロジェクトです。

## インストール

githubからクローンして

```
git clone https://github.com/nojimage/phpconfuk2016-codeception.git
```

ディレクトリに移動

```
cd phpconfuk2016-codeception
```

composer installを実行

```
composr install
```

## テストの実行

```
vendor/bin/codecept run acceptance TwitterSearchCept
```

で実行できます。

```
vendor/bin/codecept run acceptance TwitterSearchCept -vv
```

とすると、テストシナリオのステップを表示しながら実行されます。


## テストシナリオ

`tests/acceptance/TwitterSearchCept.php` が上記実行コマンドで呼び出されるテストケースのファイルです。

Cest形式のファイルも同梱しています。

## 発表スライド

http://php-tips.com/2016/05/21/phpconfuk2016-lt-codeception/
