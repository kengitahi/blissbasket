<div class="container pt-4">
    <?php if (empty($model['product'])) { ?>
        <?php redirect('./'); ?>
    <?php } else { ?>
        <h1 class="mb-3 h3">Update "<?= $model['product']['title'] ?? ''; ?>"</h1>

        <?php if (!empty($model['errors'])) { ?>
            <div class="alert alert-danger my-2 pb-0 mb-3">
                <?php foreach ($model['errors'] as $error) { ?>
                    <p class=""><?= $error ?></p>
                <?php } ?>
            </div>
        <?php } ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="image" class="mb-2"></label>New Product Image:</label>
                <input type="file" class="form-control" name="image" id="image" accept=".jpg, .jpeg, .png">
                <?php if ($model['product']['image']) { ?>
                    <p id="imageHelp" class="form-text mt-3 mb-1">This is the current product image</p>
                    <img src="../assets/product-imgs/<?= $model['product']['image'] ?>" class="update-img">
                <?php } else { ?>
                    <p id="imageHelp" class="form-text mt-3 mb-1">This product does not have an image yet. </p>
                <?php } ?>
            </div>
            <div class=" mb-3">
                <label for="title" class="mb-2"></label>New Product Name:</label>
                <input type="text" class="form-control" name="title" value="<?= $model['product']['title'] ?? ''; ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="mb-2"></label>New Product Description:</label>
                <textarea class="form-control" name="description"><?= $model['product']['description'] ?? ''; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="title" class="mb-2"></label>New Product Price:</label>
                <input type="number" step="0.01" class="form-control" name="price" value="<?= $model['product']['price'] ?? ''; ?>">
            </div>
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <div class="mb-3">
                <button class="btn btn-sm btn-outline-primary m-1" type="submit">Update Product</button>
            </div>
        </form>
    <?php } ?>
</div>