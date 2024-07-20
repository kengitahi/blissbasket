<section class="container pt-4">
    <?php if (empty($model)) { ?>
        <?php redirect('./'); ?>
    <?php } else { ?>
        <h1 class="mb-3 h3">product "<?= $model['title'] ?>"</h1>
    <?php } ?>

</section>