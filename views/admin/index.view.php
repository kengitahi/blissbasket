 <div class="container pt-4">
     <h1 class="mb-2 h3">Products</h1>
     <p>
         <a href="create.php" class="btn btn-info btn-sm text-white fw-bold">Add Product</a>
     </p>
     <div class="mb-3">
         <form action="../search.php" method="post">
             <div class="input-group mb-3">
                 <input type="text" class="form-control" aria-label="Product search input" placeholder="Search products" name="search">
                 <div class="input-group-append">
                     <button class="btn btn-secondary">Search</button>
                 </div>
             </div>
         </form>
     </div>
     <table class="table table-striped">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Image</th>
                 <th scope="col">Name</th>
                 <th scope="col">Price</th>
                 <th scope="col">Create Date</th>
                 <th scope="col">Actions</th>
             </tr>
         </thead>

         <tbody>
             <?php foreach ($model['products'] as $index => $product) : ?>
                 <tr>
                     <th scope="row"><?= $index + 1 ?></th>
                     <td>
                         <?php if (empty($product['image']) || !isset($product['image'])) { ?>
                             <img src="../inc/img/default.png" class="rounded table-img">

                         <?php } else { ?>
                             <a href="../product.php?id=<?= $product['id'] ?>" class="text-decoration-none">
                                 <img src="../assets/product-imgs/<?= $product['image'] ?>" class="rounded table-img" title="View <?= $product['title'] ?>">
                             </a>
                         <?php } ?>
                     </td>
                     <td>
                         <a href="../product.php?id=<?= $product['id'] ?>" class="text-decoration-none">
                             <?= $product['title'] ?>
                         </a>
                     </td>
                     <td><?= '$' . $product['price'] ?></td>
                     <td><?= $product['create_date'] ?></td>
                     <td>
                         <a type="button" class="btn btn-sm btn-outline-primary m-1" href="update.php?id=<?= $product['id'] ?>">Edit</a>
                         <a type=" button" class="btn btn-sm btn-outline-danger m-1" href="delete.php?id=<?= $product['id'] ?>">Delete</a>
                     </td>
                 </tr>
             <?php endforeach; ?>
         </tbody>
     </table>

 </div>