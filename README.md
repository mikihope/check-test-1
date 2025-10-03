Attendance Management
環境構築

1. Docker ビルド
docker compose up -d --build

2. コンテナに入る
docker exec -it third-php bash

3. Composer インストール
composer install

4. .env 作成
cp .env.example .env


.env の設定例（DB接続）

DB_CONNECTION=mysql
DB_HOST=third-mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel

5. アプリケーションキー生成
php artisan key:generate

6. マイグレーション & シーディング
php artisan migrate:fresh --seed

使用技術 (実行環境)

PHP 8.1.33

Laravel 10.49.0

MySQL 8.0

Nginx 最新版

ER図
![ER図](er.png)

URL

開発環境: http://localhost:8080/
管理画面: http://localhost:8080/admin/contacts
