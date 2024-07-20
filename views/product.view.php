<section class="container pt-4">
    <?php if (empty($model)) { ?>
        <?php redirect('./'); ?>
    <?php } else { ?>
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body gap-4">
                        <?php if (empty($model['product']['image']) || !isset($model['product']['image'])) { ?>
                            <img src="./inc/img/default.png" class="img-fluid rounded" style="max-width:40%; margin-inline:auto;" alt="product image not found">
                        <?php } else { ?>
                            <img src="./assets/product-imgs/<?= $model['product']['image'] ?>" alt="<?= $model['product']['title'] ?>" class="img-fluid rounded" style="max-width:40%; margin-inline:auto;" />
                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <h2 class="card-text h3"><?= $model['product']['title'] ?></h2>
                        <p class=" card-text"><?= $model['product']['description'] ?></p>
                        <p class=" card-text"><?= $model['product']['price'] ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <?php if (is_user_authenticated()) { ?>
                    <a type="button" class="btn btn-outline-primary m-1" href="admin/update.php?id=<?= $model['product']['id'] ?>">Edit Product</a>
                    <a type=" button" class="btn btn-outline-danger m-1" href="admin/delete.php?id=<?= $model['product']['id'] ?>">Delete Product</a>
                <?php } ?>
            </div>
        <?php } ?>

</section>