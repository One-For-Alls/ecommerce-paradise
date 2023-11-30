<?php

class Connection
{
  private static $host = '127.0.0.1';
  private static $db   = 'bd-paradise';
  private static $user = 'root';
  private static $pass = '';
  private static $charset = 'utf8mb4';

  public static function conn()
  {
    try {
      $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=". self::$charset;
      $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
      ];
      $pdo = new PDO($dsn, self::$user, self::$pass, $options);
      return $pdo;
    } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
  }
}
