<?php

function display($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function dump($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function is_post()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get()
{
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function redirect($url)
{
    header("Location: $url");
    die;
}

function sanitize($value)
{
    return htmlspecialchars(trim($value));
}

function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $str = '';

    for ($i = 0; $i < $n; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $str .= $characters[$randomIndex];
    }

    return $str;
}


function view($view, $model = "")
{
    require APP_PATH . "views/layout.view.php";
}

function adminView($view, $model = "")
{
    require APP_PATH . "admin/views/layout.view.php";
}

function authenticate_user($email, $password)
{
    $users = CONFIG['users'];

    if (!isset($users[$email])) {
        return false;
    }

    $user_password = $users[$email];

    return $user_password === $password;
}

function is_user_authenticated()
{
    return isset($_SESSION['email']);
}

function ensure_user_is_authenticated()
{
    if (!is_user_authenticated()) {
        redirect('../login.php');
        die();
    }
}
