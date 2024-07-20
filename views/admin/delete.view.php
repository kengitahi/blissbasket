<div class="container pt-4">

    <?php if (empty($model)) { ?>
        <?php redirect('./'); ?>
    <?php } else { ?>
        <h1 class="mb-3 h3">Delete "<?= $model['title'] ?>"?</h1>

        <p class="my-3 h5">Are you sure you want to delete "<?= $model['title'] ?>"?</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row"><?= $model['product']['id'] ?></th>
                    <td>
                        <?php if (empty($model['product']['image']) || !isset($model['product']['image'])) { ?>
                            No image provided
                        <?php } else { ?>
                            <img src="../assets/product-imgs/<?= $model['product']['image'] ?>" class="delete-table-img">
                        <?php } ?>
                    </td>
                    <td><?= $model['product']['description'] ?></td>
                </tr>
            </tbody>
        </table>

        <div class="gap-4 mt-4" style="display: flex;">
            <a class="btn btn-outline-info" style="width:fit-content !important" href="./">No, Go back</a>

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $model['product']['id'] ?>">
                <button class="btn btn-danger" type="submit">Yes, delete it</button>
            </form>
        </div>
    <?php } ?>

</div>