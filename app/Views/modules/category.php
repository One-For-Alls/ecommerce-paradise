
<?php if (isset($error)) : ?>
  <h4><?= $error['message'] ?></h4>
<?php else: ?>
  <div class="row">
    <?php foreach ($productsCategory as $product) : ?>
      <div class="main__product col-12 col-md-3">
        <picture class="main__product-picture">
          <div class="main__product-tag main__product-tag--new">
            <span>Nuevo</span>
          </div>
          <a href="<?= $_SERVER['REQUEST_URI'] . '/' . $product['slug']?>">
            <img class="main__product-picture-img" src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
          </a>
          <h6 class="main__product-picture-brand"><?= $product['brand'] ?></h6>
          <h6 class="main__product-picture-title"><?= $product['name'] ?></h6>
          <span class="main__product-picture-price">S/ <?= $product['price'] ?></span>
          <span class="main__product-picture-price price-discount">S/ <?= $product['price_discount'] ?></span>
          <div class="main__product-cart" data_id="<?= $product['id'] ?>">
            <button class="main__product-cart-button">Añadir <i class="cart__button-icons-i icon-cart"></i></button>
          </div>
        </picture>
      </div>
  <?php endforeach; ?>
  </div>
  <?php endif; ?>