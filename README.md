## 環境構築

```
docker compose build
```

```
./vendor/bin/sail up
./vendor/bin/sail composer install
./vendor/bin/sail php artisan migrate
./vendor/bin/sail php artisan db:seed
```

以下にアクセス
http://localhost
