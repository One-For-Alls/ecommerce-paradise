<?php

class validate {
  public static function validateRoutes() {
    $routes = RouteController::ctrGetRoutes();
    $listRoutes = [];

    foreach ($routes as $route) {
      $listRoutes[] = $route['slug'];
    }
    return $listRoutes;
  }

  public static function validateProducts() {
    $produts = ProductController::ctrGetProducts();
    $listProducts = [];

    foreach ($produts as $produt) {
      $listProducts[] = $produt['slug'];
    }
    return $listProducts;
  }
}