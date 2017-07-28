<?php

//Définition des constantes
define("ROOT_PATH", dirname(__DIR__));
define("WEB_PATH", __DIR__);
define("SRC_PATH", ROOT_PATH."/src");
define("VIEW_PATH", SRC_PATH."/views");
define("CTRL_PATH", SRC_PATH."/controllers");
define("MODEL_PATH", SRC_PATH."/models");

//chargement de la bilbliothèque mvc
require ROOT_PATH. "/lib/mvc.php";

$controller = filter_input(INPUT_GET, "c", FILTER_SANITIZE_URL);

require CTRL_PATH."/{$controller}.php";