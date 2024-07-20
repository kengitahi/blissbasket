<?php
require '../inc/app.php';

$view_bag = [
    'title' => "Login",
    'heading' => 'Log In'
];

if (is_user_authenticated()) {
    redirect('./');
}

if (is_post()) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = sanitize($_POST['password']);


    if (authenticate_user($email, $password)) {
        $_SESSION['email'] = $email;
        redirect('./');
    } else {
        $view_bag['status'] = "The provided credentials did not work. Please try again";
    }
}

adminView('admin/login', $view_bag);
