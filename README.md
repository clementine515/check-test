# お問い合わせフォーム
## 個別連絡事項
コメントを添える方法が不明だったのでこちらに一言失礼します。
提出期限が4/26 17:00となっていますが、実際始めたのは4/17でスタート時に申請を失念していたため本日提出いたします。

## 環境構築

Dockerビルド
1. laravel-docker-template.git
2. docker-compose up -d --build

Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:denerate
5. php artisan migrate
6. php artisan db:seed

## 使用技術

・PHP 8.0
・Laravel 10.0
・MySQL 8.0

##URL

・開発環境：http://localhost/
・phpMyAdmin: http://localhost:8080/
