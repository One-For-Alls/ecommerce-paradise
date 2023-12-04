<?php 
require_once __DIR__ . '/../config/connection.php';

class ProductModel {
  public static function mdlGetProducts() {
    $stmt = Connection::conn()->prepare('SELECT p.id,p.brand, p.name, p.slug, p.description, p.price, p.price_discount, p.color, c.name AS category, c.slug AS categorySlug, p.image FROM products AS p inner join categories AS c ON p.category_id = c.id');
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
  public static function mdlGetProductDetail($productId) {
    $stmt = Connection::conn()
      ->prepare("SELECT p.*, c.name AS category FROM products AS p INNER JOIN categories AS c ON p.category_id = c.id WHERE p.id = :productId");
    $stmt-> bindParam(':productId', $productId, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}