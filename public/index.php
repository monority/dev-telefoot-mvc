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
    "logout" => array(
        "model" => "logoutModel",
        "controller" => "logoutController",
        "view" => "logoutView"
    ),
    "newpassword" => array(
        "model" => "newpasswordModel",
        "controller" => "newpasswordController",
        "view" => "newpasswordView"
    ),
    "resetpassword" => array(
        "model" => "resetModel",
        "controller" => "resetController",
        "view" => "resetView"
    ),
    "index" => array(
        "model" => "indexModel",
        "controller" => "indexController",
        "view" => "indexView"
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

    // $dsn = "mysql:host" . DB_HOSTNAME . ";dbname=" . DB_DATABASE;
    $dsn ="mysql:host=localhost;dbname=telefoot";
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