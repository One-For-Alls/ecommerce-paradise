<?php 
require_once __DIR__ . '/../config/connection.php';

class ProductModel {
  public static function mdlGetProducts() {
    $stmt = Connection::conn()->prepare('SELECT * FROM products');
    $stmt->execute();
    return $stmt->fetchAll();
  }
  public static function mdlGetProductByCategory($categoryId) {
    $stmt = Connection::conn()->prepare("SELECT * FROM products WHERE category_id = :category_id");
    $stmt-> bindParam(':category_id', $categoryId, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public static function mdlGetProductBySlug($slug) {
    $stmt = Connection::conn()->prepare("SELECT * FROM products WHERE slug = :slug");
    $stmt-> bindParam(':slug', $slug, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  public static function mdlGetProductDetail($categoryId, $productId) {
    $stmt = Connection::conn()
      ->prepare("SELECT p.id, p.name, p.description, p.price, p.color, c.name AS category, p.image FROM products AS p INNER JOIN categories AS c ON p.category_id = c.id WHERE p.id = :productId AND p.category_id = :categoryId");
    $stmt-> bindParam(':productId', $productId, PDO::PARAM_INT);
    $stmt-> bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}