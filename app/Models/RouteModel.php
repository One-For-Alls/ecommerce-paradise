<?php 
require_once __DIR__ . '/../config/connection.php';

class RouteModel {
  public static function mdlGetRoutes() {
    $stmt = Connection::conn()->prepare('SELECT * FROM routes');
    $stmt->execute();
    return $stmt->fetchAll();
  }
  public static function mdlGetRoutesById($slug) {
    $stmt = Connection::conn()
      ->prepare("SELECT r.type, r.slug, r.category_id, c.name FROM routes AS r INNER JOIN categories AS c ON r.category_id = c.id WHERE r.slug = :slug");
    $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}