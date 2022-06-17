# asoport

## アプリ概要

執筆中です。

## makeコマンドのインストール
**初回セットアップを行う前に実行してください。**<br>
Windows(Powershell)
```powershell
Set-ExecutionPolicy RemoteSigned -scope CurrentUser
iex (new-object net.webclient).downloadstring('https://get.scoop.sh')
scoop install gow
```
## 初回セットアップ

※コマンドの部分をコピペして使用してください。
Windowsの方はPowershellから実行お願いします。

1. Github から開発環境をインストール

```bash
cd ~ &&
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

## コンテナの構造

※コマンドではございません。
```bash
├── app - Laravelの入っているところ
├── web - nginxサーバーの入っているところ
└── db - mysqlが入っているところ
```

### app コンテナ

-   使用イメージファイル
    -   [php](https://hub.docker.com/_/php):8.0-fpm-bullseye
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
