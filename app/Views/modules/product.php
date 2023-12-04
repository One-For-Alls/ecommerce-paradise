<?php if ($productDetail && !empty($productDetail)) : ?>
  <div class="product row">
    <!-- Imagen del Producto -->
    <div class="product__div-img col-md-6">
      <img class="product__img" src="<?= $productDetail['image'] ?>" class="img-fluid" alt="<?= $productDetail['name'] ?>">
    </div>

    <!-- Detalles del Producto -->
    <div class="product__details col-md-6">
      <div class="product__details-brand">
        <p class="product__details-brand-p"><?= $productDetail['brand'] ?></p>
        <span class="product__details-brand-span">Cod: 302323472423482734</span>
      </div>
      <h2 class="product__details-name"><?= $productDetail['name'] ?></h2>
      <p class="product__details-description lead"><?= $productDetail['description'] ?></p>
      <h3 class="product__details-price">S/. <?= $productDetail['price'] ?></h3>
      <p class="product__details-price-discount price-discount">S/. <?= $productDetail['price'] ?></p>
      <div class="product__details-quantity">
        <button class="product__details-quantity-less" onclick="cambiarCantidad(-1)">-</button>
        <input class="product__details-quantity-product" type="number" id="cantidad" value="1" min="1" max="4">
        <button class="product__details-quantity-plus" onclick="cambiarCantidad(1)">+</button>
      </div>
      <button class="product__details-add btn btn-primary">Añadir al Carrito</button>
      <button class="product__details-favorite btn btn-outline-secondary">Agregar a Favoritos</button>
    </div>
  </div>
<?php endif ?>