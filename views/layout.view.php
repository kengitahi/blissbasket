<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/app.css" />
    <title>BasketBliss<?= $model['title'] ? ' - ' . $model['title'] : '' ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-body-tertiary fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="./">BasketBliss</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="main-nav">
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <?php if (is_user_authenticated()) { ?>
                            <a class="nav-link" href="admin">Admin</a>
                        <?php } ?>

                    </li>
                </ul>
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <a class="position-relative nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" title="Show shopping cart">
                            <img src="./assets/imgs/Bag.svg" alt="shopping cart SVG" class="shopping-cart" />
                            <span class="position-absolute top-0 translate-middle badge rounded-pill bg-info  fw-bold">
                                3
                                <span class="visually-hidden">number of items in shopping cart</span>
                            </span>
                            <span class="align-middle d-md-none d-inline">Shopping cart
                            </span>
                        </a>
                    </li>
                    <?php if (is_user_authenticated()) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" aria-current="page" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./assets/imgs/avatar-1.jpeg" alt="user avatar" class="avatar rounded-pill" />
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
                                    <a class="dropdown-item" href="#">settings</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="btn btn-danger" href="admin/logout.php">Log Out</a>
                                </li>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item"><a class="nav-link" href="admin">Login</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php require APP_PATH . "views/$view.view.php"; ?>

    <!-- offcanvas/drawer element -->
    <section class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="shoppingcart" data-bs-scroll="false" data-bs-backdrop="true">
        <div class="offcanvas-header shadow">
            <h5 class="offcanvas-title" id="shoppingcart">
                Your shopping cart
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="card mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./assets/imgs/slider-4.jpeg" class="hor-img rounded-start" alt="..." />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <div class="card-footer horizontal">
                                <p>$1200</p>
                            </div>

                            <div class="card-footer horizontal">
                                <button class="btn product-see-btn btn-info fs-8  fw-bold">
                                    Got to Checkout
                                </button>
                                <button class="btn product-add-btn btn-danger fs-8 fw-bold">
                                    Remove From Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./assets/imgs/slider-4.jpeg" class="hor-img rounded-start" alt="..." />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <div class="card-footer">
                                <p>$1200</p>
                            </div>

                            <div class="card-footer horizontal">
                                <button class="btn product-see-btn btn-info fs-8 fw-bold">
                                    Got to Checkout
                                </button>
                                <button class="btn product-add-btn btn-danger fs-8 fw-bold">
                                    Remove From Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="productModalLabel">
                        Product name
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="./assets/imgs/slider-4.jpeg" class="hor-img rounded" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text pb-3 border-bottom border-dark-subtle">
                                        This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content
                                        is a little bit longer.
                                    </p>
                                    <div>
                                        <p>$1200</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info fw-bold">
                        See More Details
                    </button>
                    <button type="button" class="btn btn-success fw-bold">
                        Add to cart
                    </button>
                    <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>