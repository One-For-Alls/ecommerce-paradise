<?php if (isset($error)) : ?>
  <h4><?= $error['message'] ?></h4>
  <?php else: ?>
    <div class="row">
            <!-- Imagen del Producto -->
            <div class="col-md-6">
                <img src="<?= $productDetail['image'] ?>" class="img-fluid" alt="<?= $productDetail['name'] ?>">
            </div>

            <!-- Detalles del Producto -->
            <div class="col-md-6">
                <h2><?= $productDetail['name'] ?></h2>
                <p class="text-muted"><?= $productDetail['category'] ?></p>
                <p class="lead"><?= $productDetail['description'] ?></p>
                <h3 class="text-primary">S/. <?= $productDetail['price'] ?></h3>
                
                <!-- Botones de acción -->
                <button class="btn btn-primary">Añadir al Carrito</button>
                <button class="btn btn-outline-secondary">Agregar a Favoritos</button>
            </div>
        </div>
    <?php endif ?>