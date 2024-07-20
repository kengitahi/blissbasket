<div class="container pt-4">
    <h1 class="mb-3 h3">You searched for "<?= $model['searchTerm'] ?>".</h1>

    <?php if (empty($model['products'])) { ?>
        <p class="mb-3 h4">We could not find any products. Try another search below.</p>
        <div>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Product search input" placeholder="Search products" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-secondary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    <?php } else { ?>
        <p class="mb-3">Here are the results.</p>
        <div class="cards">
            <?php foreach ($model['products'] as $product) : ?>
                <div class="card">
                    <a href="product.php?id=<?= $product['id'] ?>">
                        <?php if (empty($product['image']) || !isset($product['image'])) { ?>
                            <img src="./inc/img/default.png" class="card-img-top" alt="product image not found">
                        <?php } else { ?>
                            <img src="./assets/product-imgs/<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['title'] ?>">
                        <?php } ?>
                    </a>
                    <div class="card-body">
                        <h2 class="card-title h5">
                            <a href="product.php?id=<?= $product['id'] ?>" style="text-decoration:none;">
                                <?= $product['title'] ?>
                            </a>
                        </h2>
                        <p class="card-text">
                            <?= $product['description'] ?>
                        </p>

                        <div class="card-footer">
                            <p>$<?= $product['price'] ?></p>
                        </div>

                        <div class="card-footer">
                            <a class="btn product-see-btn btn-info fw-bold" href="product.php?id=<?= $product['id'] ?>">
                                See Product
                            </a>
                            <a class="btn product-add-btn btn-success fw-bold" href="#">
                                Add to Cart
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php } ?>