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
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@600&family=Lato:ital,wght@0,300;0,900;1,900&family=Space+Mono&display=swap" rel="stylesheet">
  <title>Tienda virtual</title>
</head>

<body>
  <?php includeModules('header') ?>
  <?php includeModules('horizontal-menu') ?>
  <main class="container mt-5">
    <?php

    $url = $_GET['url'] ?? null;
    $segments = explode('/', trim($url, '/'));
    $segments = array_filter($segments);

    if (!empty($segments)) {
      $category = $segments[0] ?? '';
      $product = $segments[1] ?? '';

      $routes = validate::validateRoutes();
      $routeProducts = validate::validateProducts();

      if ($category === 'home') {
        includeModules('main');
      } else if (in_array($category, $routes) || $category === 'account') {
        if (!empty($category) && empty($product)) {
          includeModuleCategory($category);
        } else if (!empty($category) && !empty($product) && $product === 'login') {
          includeModules('login', 'account');
        } else if (!empty($category) && !empty($product) && $product === 'register') {
          includeModules('register', 'account');
        } else if (!empty($category) && !empty($product) && in_array($product, $routeProducts)) {
          includeModuleProduct($category, $product);
        } else {
          includeModules('404');
        }
      } else {
        includeModules('404');
      }
    } else {
      includeModules('main');
    }

    ?>
  </main>
  <?php includeModules('footer') ?>

  <script>
    const base_url = '<?= $base_url ?>';
  </script>
  <script src="<?= $base_url ?>/app/public/resources/jquery/jquery.js"></script>
  <script src="<?= $base_url ?>/app/public/resources/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= $base_url ?>/app/public/js/products.js"></script>
  <script src="<?= $base_url ?>/app/public/js/category.js"></script>
  <script src="<?= $base_url ?>/app/public/js/account.js"></script>
</body>

</html>