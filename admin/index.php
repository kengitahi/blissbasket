<?php

require '../inc/app.php';

if (!is_user_authenticated()) {
    redirect('/bs_cart/admin/login.php');
}

$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

$bag['title'] = 'Admin';
$bag['products'] = $products;

adminView('admin/index', $bag);
