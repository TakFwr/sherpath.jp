# 本番環境
URL: https://sherpath.jp/
WPの管理画面: https://sherpath.jp/wp-admin/


# ローカル開発環境構築

## 事前準備

### MAMPとWordPressのインストール
- [MAMP](https://www.mamp.info/en/downloads/)をインストール
- [WordPress](https://ja.wordpress.org/download/)をダウンロード
- Applications > MAMP > htdocs の中に hits.ac.jp フォルダを作成して回答したwordpressの中身をコピー
- MAMP.appを起動するとブラウザ（ http://localhost:8888/MAMP/?language=English ）が立ち上がるので、左上のToolsからphpMyAdminを開いてデータベースを作成
- http://localhost:8888/sherpath.jp/ にアクセスしてWordPressのインストールを行う
- データベース名、ユーザー名、パスワードを入力してインストール
- サイトのタイトル、ユーザー名、パスワードを入力してインストール
- インストールが完了するとログイン画面が表示されるのでログイン

MAMPを利用してローカルでWordPressの立ち上げが完了


### リポジトリのclone
- 作業フォルダ(例）work )にgitのリポジトリ（ [GitHub](https://github.com/TakFwr/sherpath.jp.git) ）をclone
- 以下コマンドでMAMPのテーマディレクトリにgitのシンボリックリンクを作成
```bash
$ ln -s /Users/ユーザー名/作業フォルダ/sherpath.jp/sherpath-theme /Applications/MAMP/htdocs/sherpath.jp/wp-content/themes/sherpath-theme
```

これでgitに監視されているローカルの作業フォルダのファイルを編集すると、MAMPのテーマディレクトリにも反映される

### Node.js yarnのインストール
- Node.jsをプロジェクト毎にバージョン管理するにはanyenvを使うと良い
- qiita 参考 https://qiita.com/kyosuke5_20/items/eece817eb283fc9d214f
- anyenv nodenvのインストールが完了したらnode.jsのインストール
```bash
$ nodenv install 18.8.0
```
```bash
$ nodenv global 18.8.0
```
- プロジェクトにバージョンを指定
```bash
$ nodenv local 18.8.0
```
```bash
$ nodenv rehash
```
```bash
$ node -v
```
- yarnのインストール
```bash
$ yarn install
```

### scssのwatch
- scssのwatchを行うために以下コマンドを実行
```bash
$ yarn watch
```

### ローカルでの確認
- http://localhost:8888/sherpath.jp/ にアクセスしてローカルでの確認を行う