<div class="container pt-4">
    <h1 class="mb-3 h3">Add New Product</h1>

    <?php if (!empty($model['errors'])) { ?>
        <div class="alert alert-danger my-2 pb-0 mb-3">
            <?php foreach ($model['errors'] as $error) { ?>
                <p class=""><?= $error ?></p>
            <?php } ?>
        </div>
    <?php } ?>

    <form action="create.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="image" class="mb-2"></label>Product Image:</label>
            <input type="file" class="form-control" name="image" id="image" accept=".jpg, .jpeg, .png">
        </div>
        <div class="mb-3">
            <label for="title" class="mb-2"></label>Product Name:</label>
            <input type="text" class="form-control" name="title" value="<?= $_POST['title'] ?? ''; ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="mb-2"></label>Product Description:</label>
            <textarea class="form-control" name="description"><?= $_POST['description'] ?? ''; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="title" class="mb-2"></label>Product Price:</label>
            <input type="number" step="0.01" class="form-control" name="price" value="<?= $_POST['price'] ?? ''; ?>">
        </div>
        <div class="mb-3">
            <button class="btn btn-sm btn-outline-primary m-1" type="submit">Add Product</button>
        </div>
    </form>
</div>