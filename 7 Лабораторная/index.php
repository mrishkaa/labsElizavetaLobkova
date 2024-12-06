<?php
require __DIR__ . '/product.php';
require __DIR__ . '/client.php';

$product = new Product();
$product->new_information("Помада Pure Color Envy Sculpting", "Косметический продукт стоимостью 30 долларов способен изменить губы, образ и настроение. С его помощью удастся улучшить линию губ, а пигменты сделают цвет совершенным.", "Бельгия");
$product->new_cost(3250);

echo $product->about_product();

$client = new Client();

$client->name = "Марина";
$client->lastOrder = "Помада Pure Color Envy Sculpting";
$client->money = 9500;

echo $client->about_client();

$client->last_order("Румяна Pure Color Envy Sculpting Blush");
$client->money(5250);

echo $client->about_client();
?>