<?php

require_once '../Controllers/ProductController.php';
require_once '../Models/ProductModel.php';

class ProductAjax {
  public static function ajaxGetProducts() {
    $response = ProductController::ctrGetProducts();
    echo json_encode($response);
  }
  public static function ajaxGetProductsCategory($slug) {
    $response = ProductController::ctrGetProductsCategory($slug);
    var_dump($response);
    echo json_encode($response);
  }
}
  if(isset($_POST['accion']) && $_POST['accion'] == 1) {
    $datos = ProductAjax::ajaxGetProducts();
  }

  if(isset($_POST['accion']) && $_POST['accion'] == 2) {
    $slug = $_POST['slug'];
    $datos = ProductAjax::ajaxGetProductsCategory($slug);
  }
