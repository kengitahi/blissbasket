<?php
require '../inc/app.php';

$errors = [];

if (is_post()) {

    // dump($_FILES['image']);
    // exit();

    $title = sanitize($_POST['title']);
    $description = sanitize($_POST['description']);
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    if (!isset($title) || empty($title)) {
        $errors[] = "The product name is required, please provide one.";
    }

    if (!isset($price) || empty($price)) {
        $errors[] = "The product price is required, please provide one.";
    } elseif (!is_numeric($_POST['price'])) {
        $errors[] = "Please provide a valid price";
    }

    if ($_POST['price'] <= 0) {
        $errors[] = "The price should be more than 0";
    }

    if (!is_dir('../assets/product-imgs')) {
        mkdir('../assets/product-imgs');
    }

    if (empty($errors)) {
        $image = $_FILES['image'] ?? null;
        $imageName = "";
        if ($image && $image['tmp_name']) {
            $imageName = randomString(10) . "-" . $image['name'];
            $imagePath = "../assets/product-imgs/$imageName";
            move_uploaded_file($image['tmp_name'], $imagePath);
        }

        $statement = $pdo->prepare('INSERT INTO products (title, image, description, price, create_date) VALUES (:title, :image, :description, :price, :date)');
        $statement->execute(
            [
                ':title' => $title,
                ':image' => $imageName,
                ':description' => $description,
                ':price' => $price,
                ':date' => $date
            ]
        );
        redirect('./');
    }
}

$bag['errors'] = $errors;
$bag['title'] = 'Add Product';

adminView('admin/create', $bag);
