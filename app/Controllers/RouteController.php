<?php
class RouteController {
  public static function ctrGetRoutes() {
    $response = RouteModel::mdlGetRoutes();
    return $response;
  }
  public static function ctrGetRoutesById($slug) {
    $response = RouteModel::mdlGetRoutesById($slug);
    return $response;
  }
}