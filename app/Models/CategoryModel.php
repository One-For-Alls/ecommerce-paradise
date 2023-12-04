<?php 
require_once __DIR__ . '/../config/connection.php';

class ModelCategory {
  public static function mdlGetCategories() {
    $stmt = Connection::conn()->prepare('SELECT * FROM categories');
    $stmt->execute();
    return $stmt->fetchAll();
  }
  public static function mdlGetCategoryById($id) {
    $stmt = Connection::conn()->prepare('SELECT * FROM categories WHERE id = :id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
  }
  public static function mdlGetRouteCategory() {
    $stmt = Connection::conn()->prepare('SELECT r.type, c.slug, r.category_id, c.name FROM routes AS r INNER JOIN categories AS c ON r.category_id = c.id');
    $stmt->execute();
    return $stmt->fetchAll();
  }
}