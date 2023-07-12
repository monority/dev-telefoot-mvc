<?php
$page = "home";
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

$pages = array(
    "home" => array(
        "model" => "HomeModel",
        "controller" => "HomeController",
        "view" => "HomeView"
    ),
    "create" => array(
        "model" => "createModel",
        "controller" => "createController",
        "view" => "createView"
    ),
    "login" => array(
        "model" => "loginModel",
        "controller" => "loginController",
        "view" => "loginView"
    ),
);
$find = false;

foreach ($pages as $key => $value) {
    if ($page === $key) {
        $find = true;
        $model = $value["model"];
        $controller = $value["controller"];
        $view = $value["view"];
    }
}

if ($find) {
    require("../config/index.php");

    $dsn = "mysql:host=" . DB_HOSTNAME . ";dbname=" . DB_DATABASE;
    $db = new PDO($dsn, DB_USERNAME, DB_PASSWORD);

    require(DIR_MODEL . "$page.php");
    require(DIR_CONTROLLER . "$page.php");
    require(DIR_VIEW . "$page.php");

    $pageModel = new $model($db);
    $pageController = new $controller($pageModel);
    $pageView = new $view($pageController);

    $pageView->render();
}

?>