# asoport

## アプリ概要

麻生の学校内で個人個人が作ったポートフォリオを投稿、共有する Web アプリとなっています。<br>
また、投稿したポートフォリオや Github リポジトリは実際にアクセスすることができます。（Github のリポジトリが公開設定になっている時のみ）<br>

**機能**<br>

-   ポートフォリオ一覧、投稿、編集、検索、詳細機能
-   認証機能（ログイン、新規登録）
-   プロフィール編集機能
-   外観モード（ライト、ダーク）
-   Github の公開リポジトリの閲覧機能
-   公開・非公開機能

**使用技術**<br>
[![My Skills](https://skillicons.dev/icons?i=html,css,javascript,jquery,php,bootstrap,docker,laravel,git,github,githubactions,webpack&theme=dark)](https://skillicons.dev)<br>

-   HTML5
-   CSS3
-   JavaScript(ES2015)
-   jQuery v3.6.0
-   php v7.4
-   BootStrap v4.0.0
-   docker v20.10.22
-   docker-compose v2.2.3
-   Laravel v6.20.26
-   git v2.25.1
-   github
-   githubacitons
-   webpack v4

## **--ここから開発者向け--**
## make コマンドのインストール

**初回セットアップを行う前に実行してください。**<br>
Windows(Powershell、管理者権限なしで実行してください。)

```powershell
Set-ExecutionPolicy RemoteSigned -scope CurrentUser
iex (new-object net.webclient).downloadstring('https://get.scoop.sh')
scoop install gow
```

## 初回セットアップ

※コマンドの部分をコピペして使用してください。
Windows の方は Powershell から実行お願いします。

1. Github から開発環境をインストール

Powershell Core(v7),ターミナル(mac)

```bash
cd ~ &&
git clone https://github.com/koki-sys/asoport.git
```

Powershell(最初から入っているもの)

```bash
cd ~
git clone https://github.com/koki-sys/asoport.git
```

2. ディレクトリの移動

```bash
cd ~/asoport
```

3. ライブラリなどのインストール

```bash
make init
```

ローカルサーバー:http://localhost:80

## サーバーの起動

Laravel のサーバー、データベースのサーバーを起動します。

```bash
make up
```

## サーバーの停止

Laravel のサーバー、データベースのサーバーを停止します。

```bash
make down
```

## Laravel に関するコマンドを打つときの注意点

**`make up`を実行した後に下記のコマンドを実行してください**<br>
`php artisan make:controller SamplController`などのコマンドを打つときは、下記のコマンドを入力してから実行してください。

```bash
make app
# asoportディレクトリで実行
```

## MySQL への接続方法

**`make up`を実行した後に下記のコマンドを実行してください**

```bash
make sql
# asoportディレクトリで実行
```

## コンテナの構造

※コマンドではございません。

```bash
├── app - Laravelの入っているところ
├── web - nginxサーバーの入っているところ
└── db - mysqlが入っているところ
```

### app コンテナ

-   使用イメージファイル
    -   [php](https://hub.docker.com/_/php):7.4-fpm-bullseye
    -   [composer](https://hub.docker.com/_/composer):2.2

### web コンテナ

-   使用イメージファイル
    -   [nginx](https://hub.docker.com/_/nginx):1.22

### db コンテナ

-   使用イメージファイル
    -   [mysql/mysql-server](https://hub.docker.com/r/mysql/mysql-server):8.0

### mailhog コンテナ

-   使用イメージファイル
    -   [mailhog/mailhog](https://hub.docker.com/r/mailhog/mailhog)
