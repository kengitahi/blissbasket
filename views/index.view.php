<!-- Hero -->
<section class="home-hero d-flex flex-column justify-content-center align-items-center">
    <div class="text-center text-white">
        <h2><small>Welcome</small></h2>
        <h1>Best Shopping Experience</h1>
    </div>
</section>

<!-- Product cards -->
<section class="container pt-3 pb-5">
    <div class="text-center py-4">
        <h2 class="h1">Our Products</h2>
        <h3 class="h4">
            <small> For Your Shopping Pleasure </small>
        </h3>
    </div>

    <div class="cards">
        <?php foreach ($model['products'] as $product) : ?>
            <div class="card">
                <?php if (empty($product['image']) || !isset($product['image'])) { ?>
                    <img src="./inc/img/default.png" class="card-img-top" alt="product image not found">
                <?php } else { ?>
                    <img src="./assets/product-imgs/<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['title'] ?>">
                <?php } ?>
                <div class="card-body">
                    <h5 class="card-title"><?= $product['title'] ?></h5>
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
</section>