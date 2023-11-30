<?php

require_once '../Controllers/CategoryController.php';
require_once '../Models/CategoryModel.php';

class CategoryAjax {
  public static function ajaxGetCategories() {
    $response = CategoryController::ctrGetCategories();
    echo json_encode($response);
  }
  public static function ajaxGetRouteCategory() {
    $response = CategoryController::ctrGetRouteCategory();
    echo json_encode($response);
  }
}

  if(isset($_POST['accion']) && $_POST['accion'] == 1) {
    $datos = CategoryAjax::ajaxGetCategories();
  }
  if(isset($_POST['accion']) && $_POST['accion'] == 2) {
    $datos = CategoryAjax::ajaxGetRouteCategory();
  }

