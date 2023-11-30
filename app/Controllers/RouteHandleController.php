<?php

class RouteHandleController {

  public static function handleRoute($tipo, $id) {
      $controllerName = 'ProductController';
      $methodName = 'ctrGetProductsBy' . ucfirst($tipo);

      if (class_exists($controllerName) && method_exists($controllerName, $methodName)) {
        $products = $controllerName::$methodName($id);
        $categories = CategoryController::ctrGetCategoryById($id);
        return [
          'products' => $products,
          'categories' => $categories
        ];
      } else {
        echo "Controlador o método no encontrado.";
      }
  }
}
