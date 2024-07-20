<?php

require './inc/app.php';

$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

$bag = [];

$bag['products'] = $products;
$bag['title'] = 'Home';

view('index', $bag);
