<?php



function includeModules($archive, $file = null, $data = null)
{

  if ($file) {
    $products = $data['products'];
    $title = $data['categories']['name'];
    $path = __DIR__ . "/../Views/modules/{$archive}.php";
  } else {
    $path = __DIR__ . "/../Views/modules/partials/{$archive}.php";
  }
  return include_once $path;
}

function includeModuleCategory($category)
{
  $route = RouteController::ctrGetRoutesById($category);
  $categoryName = CategoryController::ctrGetCategoryById($route['category_id']);
  $productsCategory = ProductController::ctrGetProductsByCategory($route['category_id']);

  $path = __DIR__ . "/../Views/modules/category.php";

  if($productsCategory) {
    return include_once $path;
  }else {
    $error =  ['message' => 'Error no existen productos en esta categoria...'];
    return include_once $path;
  }
}
function includeModuleProduct($categorySlug, $productSlug)
{
  $route = RouteController::ctrGetRoutesById($categorySlug);
  $categoryName = CategoryController::ctrGetCategoryById($route['category_id']);
  $product = ProductController::ctrGetProductBySlug($productSlug);
  $productDetail = ProductController::ctrGetProductDetail($route['category_id'], $product['id']);

  $path = __DIR__ . "/../Views/modules/product.php";

  if($productDetail) {
    return include_once $path;
  }else {
    $error =  ['message' => 'Error no existen productos en esta categoria...'];
    return include_once $path;
  }
}
