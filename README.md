## 環境構築

```
git clone git@github.com:3110123/backend.git

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

cp .env.example .env
    
./vendor/bin/sail up

```
```
./vendor/bin/sail php artisan key:generate

./vendor/bin/sail composer install

npm install

npm run build

./vendor/bin/sail php artisan migrate

./vendor/bin/sail php artisan db:seed
```

以下にアクセス
http://localhost
