<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/app.css" />
    <title>BasketBliss
        <?php if (isset($model['title'])) {
            echo ' - ' . $model['title'];
        } else {
            echo '';
        } ?>
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-body-tertiary fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="./">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="main-nav">
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-lg-0">
                    <?php if (is_user_authenticated()) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" aria-current="page" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/imgs/avatar-1.jpeg" alt="user avatar" class="avatar rounded-pill" />
                                <span class="align-middle">Kennedy Gitahi</span>
                            </a>
                            <ul class="dropdown-menu px-2">
                                <p>kengitahi@hotmail.com</p>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Dashboard</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Settings</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="btn btn-danger" href="logout.php">Log Out</a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php require APP_PATH . "views/$view.view.php"; ?>

    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>