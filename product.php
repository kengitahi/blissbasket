<?php
require './inc/app.php';

$id = sanitize($_GET['id']) ?? null;
if (!$id) {
    redirect('./');
}

$statement = $pdo->prepare('SELECT * FROM products where id=:id');
$statement->execute(
    [
        ':id' => $id,
    ]
);

$product = $statement->fetch(PDO::FETCH_ASSOC) ?? null;

$bag['product'] = $product;
$bag['title'] = $product['title'];

view('product', $bag);
