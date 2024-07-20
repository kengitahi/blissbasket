<?php
require '../inc/app.php';

$id = sanitize($_GET['id']) ?? null;
if (!$id) {
    redirect('./');
}

if (is_post()) {
    $statement = $pdo->prepare('DELETE FROM products where id=:id');
    $statement->execute(
        [
            ':id' => $id,
        ]
    );
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
$bag['title'] = 'Delete ' . $product['title'];

adminView('admin/delete', $bag);
