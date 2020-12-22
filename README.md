
# ひとりでいけるモン

## \:notebook:主な機能
```
・サイトメインページ（サイトメイン画面、お問い合わせフォーム画面）
・ログイン画面等（ログイン画面、新規登録画面、パスワード変更画面）
・CRUD機能(作成、編集、更新、削除機能)
・テーブル検索機能
・ページネーション機能
```

## \:wrench:環境構築
```
・Apache 2.4.43
・PHP 7.4.6
・Mysql(MariaDB)  10.4.11 
・Laravel 6.20.7
```

## \:closed_lock_with_key:ダウンロード方法
Githubからダウンロードするかgit cloneしてください。

ダウンロード先
https://github.com/taka-sho0220/laravel-travel.git

git cloneする場合
```
git clone https://github.com/taka-sho0220/laravel-travel.git
```

## \:package:データベース設計

各種databese設計に関しては、migrationファイル(database/migrations)を作成しております。
コマンドでマイグレーションを行っていただくと、テーブルが作成できます。

コマンド↓
```
php artisan migrate
```


## \:open_file_folder:フォルダ構成
```
・application/  
　　・config/ デフォルトコントローラーの設定やデータベースの設定ファイル等  
　　・controler/ コントローラーのフォルダ  
　　・model/ データベース周りの処理フォルダ  
　　・views/ フロントエンドファイルをまとめたフォルダ
	・folio/  サイトの検索結果ページ以外をまとめたのフォルダ（管理画面も含む）
	  ・check/ サイトの検索結果ページをまとめたフォルダ
・system/ ライブラリやヘルパーを置いているフォルダ  
・assets/folio/ cssファイルをおいているフォルダ  
・images/img/ 画像を置いているフォルダ
・js/ jqueryのコードを置いているフォルダ　
・index.php　最初にこのファイルを読み込んでください  
```
