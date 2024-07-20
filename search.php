<?php
require './inc/app.php';

$searchTerm = sanitize($_POST['search']) ?? '';

if (!$searchTerm) {
    redirect('./');
}

$statement = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title OR description LIKE :description');
$statement->execute(
    [
        ':title' => "%$searchTerm%",
        ':description' => "%$searchTerm%",
    ]
);

$products = $statement->fetchAll(PDO::FETCH_ASSOC) ?? null;


$bag['products'] = $products;
$bag['searchTerm'] = $searchTerm;
$bag['title'] = "You searched for $searchTerm";

view('search', $bag);
