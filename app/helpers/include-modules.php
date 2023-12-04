<?php

function includeModules($archive, $file = null)
{
  if (!$file) {
    $path = __DIR__ . "/../Views/modules/partials/{$archive}.php";
    return include_once $path;
  } else{
    $path = __DIR__ . "/../Views/modules/{$file}/{$archive}.php";
    return include_once $path;
  }
}

function includeModuleCategory($category)
{
  $route = RouteController::ctrGetRoutesById($category);
  $categoryName = CategoryController::ctrGetCategoryById($route['category_id']);
  $productsCategory = ProductController::ctrGetProductsByCategory($route['category_id']);

  if ($productsCategory) {
    $path = __DIR__ . "/../Views/modules/category.php";
    return include_once $path;
  }
}
function includeModuleProduct($categorySlug, $productSlug)
{
  $route = RouteController::ctrGetRoutesById($categorySlug);
  $categoryName = CategoryController::ctrGetCategoryById($route['category_id']);
  $product = ProductController::ctrGetProductBySlug($productSlug);
  $productDetail = ProductController::ctrGetProductDetail($product['id']);

  
  if ($productDetail) {
    $path = __DIR__ . "/../Views/modules/product.php";
    return include_once $path;
  }
}
