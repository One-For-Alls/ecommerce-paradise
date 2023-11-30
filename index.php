<?php
require_once 'app/Controllers/RouteController.php';
require_once 'app/Controllers/CategoryController.php';
require_once 'app/Controllers/ProductController.php';
require_once 'app/Controllers/RouteHandleController.php';

require_once 'app/Models/RouteModel.php';
require_once 'app/Models/CategoryModel.php';
require_once 'app/Models/ProductModel.php';

require_once 'app/Controllers/TemplateController.php';

require_once 'app/config/config-route.php';

$template = TemplateController::ctrTemplate();
