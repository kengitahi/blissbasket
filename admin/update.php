<?php
require '../inc/app.php';

$id = sanitize($_GET['id']) ?? null;

if (is_get() && !$id) {
    redirect('./');
}

$bag = [];

$statement = $pdo->prepare('SELECT * FROM products where id=:id');
$statement->execute(
    [
        ':id' => $id,
    ]
);

$product = $statement->fetch(PDO::FETCH_ASSOC);

$bag['product'] = $product;

if (is_post()) {

    $errors = [];

    $id = sanitize($_POST['id']);

    $title = sanitize($_POST['title']);
    $description = sanitize($_POST['description']);
    $price = $_POST['price'];

    if (!isset($title) || empty($title)) {
        $errors[] = "The product name is required, please provide one when editing.";
    }

    if (!isset($price) || empty($price)) {
        $errors[] = "The product price is required, please provide one.";
    } elseif (!is_numeric($_POST['price'])) {
        $errors[] = "Please provide a valid price";
    }

    if ($_POST['price'] <= 0) {
        $errors[] = "The price should be more than 0";
    }

    $bag['errors'] = $errors;

    if (empty($errors)) {
        $image = $_FILES['image'];
        $imageName = $product['image'];

        if ($image && $image['tmp_name']) {
            $imageName = randomString(10) . "-" . $image['name'];
            $imagePath = "../assets/product-imgs/$imageName";
            move_uploaded_file($image['tmp_name'], $imagePath);
        }

        $statement = $pdo->prepare('UPDATE products SET title = :title, image = :image, description = :description, price=:price WHERE id=:id');
        $statement->execute(
            [
                ':id' => $id,
                ':title' => $title,
                ':image' => $imageName,
                ':description' => $description,
                ':price' => $price,
            ]
        );
        redirect('./');
    }
}

$bag['title'] = 'Update ' . $product['title'];

adminView('admin/update', $bag);
