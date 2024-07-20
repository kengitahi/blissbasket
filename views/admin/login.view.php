<div class="container pt-4">
    <div class="row">
        <h1 class="mb-3 h3">
            <?= $model['heading']; ?>
        </h1>
    </div>
    <div class="row">
        <!-- Content here -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control bg-primary mt-2 text-white" value="Login" name="login">
            </div>
        </form>
    </div>
    <?php
    if (isset($model['status'])) {
        echo "<p class='text-danger'>" . $model['status'] . "</p>";
    }
    ?>
</div>