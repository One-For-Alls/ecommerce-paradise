<?php

class Url
{
  public static function route()
  {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];
    $base_url = $protocol . '://' . $host . '/tiendaParadise';
    return $base_url;
  }
}
