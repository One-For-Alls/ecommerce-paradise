<?php
class ProductController {
  public static function ctrGetProducts() {
    $response = ProductModel::mdlGetProducts();
    return $response;
  }
  public static function ctrGetProductsByCategory($categoryId) {
    $response = ProductModel::mdlGetProductByCategory($categoryId);
    return $response;
  }
  public static function ctrGetProductBySlug($slug) {
    $response = ProductModel::mdlGetProductBySlug($slug);
    return $response;
  }
  public static function ctrGetProductDetail($categoryid, $productId) {
    $response = ProductModel::mdlGetProductDetail($categoryid, $productId);
    return $response;
  }
}