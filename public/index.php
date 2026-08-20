<?php
define("D", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__) . D);
define("APP", ROOT . "app" . D);
define("CONFIG", APP . "config" . D);
define("CONTAINER", APP . "container" . D);
define("CORE", APP . "core" . D);
define("MODEL", APP . "model" . D);
define("VIEW", APP . "view" . D);
define("DOMAIN_NAME", "http://mvc.test/");
require_once(ROOT . "vendor\autoload.php");
$app = new PRO\core\app();

