 <div class="container pt-4">
     <h1 class="mb-2 h3">Products</h1>
     <p>
         <a href="create.php" class="btn btn-info btn-sm text-white fw-bold">Add Product</a>
     </p>
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
                             Image Not added
                         <?php } else { ?>
                             <img src="../assets/product-imgs/<?= $product['image'] ?>" class="table-img">
                         <?php } ?>
                     </td>
                     <td><?= $product['title'] ?></td>
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