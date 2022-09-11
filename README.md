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


## テストC

```
select genres.name, avg(items.price) as count from genres left join items on genres.id = items.genre_id group by genres.id;
```

GROUP BY句 を使用することでジャンルのIDごとにグルーピングしそれぞれの平均を出しています。

```
+----+-------------+--------+------------+------+----------------------+------+---------+------+------+----------+--------------------------------------------+
| id | select_type | table  | partitions | type | possible_keys        | key  | key_len | ref  | rows | filtered | Extra                                      |
+----+-------------+--------+------------+------+----------------------+------+---------+------+------+----------+--------------------------------------------+
|  1 | SIMPLE      | genres | NULL       | ALL  | PRIMARY              | NULL | NULL    | NULL |    3 |   100.00 | Using temporary                            |
|  1 | SIMPLE      | items  | NULL       | ALL  | items_genre_id_index | NULL | NULL    | NULL |    3 |   100.00 | Using where; Using join buffer (hash join) |
+----+-------------+--------+------------+------+----------------------+------+---------+------+------+----------+--------------------------------------------+
```

上の結合条件で使用するのでitemsテーブルのgenre_idにindexを貼った方が良いと思います。
