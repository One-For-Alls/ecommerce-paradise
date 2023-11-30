<?php
class CategoryController {
  public static function ctrGetCategories() {
    $response = ModelCategory::mdlGetCategories();
    return $response;
  }
  public static function ctrGetCategoryById($id) {
    $response = ModelCategory::mdlGetCategoryById($id);
    return $response;
  }
  public static function ctrGetRouteCategory() {
    $response = ModelCategory::mdlGetRouteCategory();
    return $response;
  }
}