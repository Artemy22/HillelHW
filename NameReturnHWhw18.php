<?php

/**
 * Создать в БД таблички:
 * users (id, first_name, last_name, phone, email, password, role_id, address_street_id)
 * user_roles(id, name, key, create_at, update_at)
 * address_countries(id, name)
 * address_cities(id, country_id, name)
 * address_streets(id, city_id, type, name)
 * categories(id, parent_id, name)
 * types(id, name)
 * company(id, name)
 * products (id, name, country_id, type_id, category_id, description, price, )
 * option_types(id, name)
 * options(id, type_id, name)
 * option_products(option_id, product_id)
 * Заполнить все таблички по 2 записи и сделать sql дамп.
 *
 * Для таблиц: users, user_roles, address_countries, address_cities, address_streets -создать классы.
 * Сделать табличный вывод пользователей через использование обьектов.
 *
 */
class NameReturnHWhw18
{
    public static function getPDO(): PDO
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=myBase';
        $user = 'root';
        $pass = '1234';
        return new PDO($dsn, $user, $pass);
    }
}

$pdo = NameReturnHWhw18::getPDO();
$sql = 'SELECT * FROM users';
$sht = $pdo->prepare($sql);
$sht->setFetchMode(PDO::FETCH_CLASS, 'User');
$sht->execute([':user_id' => 3]);
//var_dump($sht->fetchAll());
$sht->bindValue(':user_id', 2);
$sht->execute();
print_r($sht->fetch());