<!DOCTYPE html>
<?php $base_url = Url::route() ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/c5c36fb1d2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?= $base_url ?>/app/public/resources/fontello/css/fontello.css">
  <link rel="stylesheet" href="<?= $base_url ?>/app/public/resources/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/app/public/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Tienda virtual</title>
</head>

<body>
  <?php includeModules('header') ?>
  <?php includeModules('horizontal-menu') ?>
  <main class="container mt-5">
    <?php

    $url = $_GET['url'] ?? '';
    $segments = explode('/', trim($url, '/'));

  if(!empty($segments)) {
    $category = $segments[0] ?? '';
    $product = $segments[1] ?? '';

    if($category === 'home') {
      includeModules('main');
    }else if(!empty($category) && empty($product)) {
      includeModuleCategory($category);
    }else if(!empty($category) && !empty($product)) {
      includeModuleProduct($category, $product);
    }
  }

    ?>
  </main>
  <?php includeModules('footer') ?>

  <script src="<?= $base_url ?>/app/public/resources/jquery/jquery.js"></script>
  <script>
    const base_url = '<?= $base_url ?>';
  </script>
  <script src="<?= $base_url ?>/app/public/js/products.js"></script>
  <script src="<?= $base_url ?>/app/public/js/category.js"></script>
</body>

</html>