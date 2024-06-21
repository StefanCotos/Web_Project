<?php
/*
use controllers\UserController;
use controllers\ReportController;
use database\Database;

include_once "..\src\database\Database.php";
include_once "..\src\controllers\UserController.php";
include_once "..\src\controllers\ReportController.php";

$db = new Database();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

$requestMethod = $_SERVER["REQUEST_METHOD"];


switch ($uri[4]) {
    case 'user':
        $user = null;
        if (isset($uri[5])) {
            if ($uri[5] == 'exist') {
                $user = "exist";
            }
            if ($uri[5] == 'forgot') {
                $user = "forgot";
            }
            if ($uri[5] == 'contact') {
                $user = "contact";
            }
            if (is_numeric($uri[5])) {
                $user = (int)$uri[5];
            }
        }

        $controller = new UserController($db->getConnection(), $requestMethod, $user);
        $controller->processRequest();
        break;
    case 'report':
//        $report = null;

        $controller = new ReportController($db->getConnection(), $requestMethod);
        $controller->processRequest();
        break;
    default:
        header("HTTP/1.1 404 Not Found");
        exit();
}*/


$requestUri = $_SERVER['REQUEST_URI'];
$requestUri = str_replace('/Web_Project', '', $requestUri);

switch ($requestUri) {
    case '/':
        require __DIR__ . '/../src/views/index.html';
        break;
    case '/admin.html':
        require __DIR__ . '/../src/views/admin.html';
        break;
    case '/about.html':
        require __DIR__ . '/../src/views/about.html';
        break;
    case '/contact.html':
        require __DIR__ . '/../src/views/contact.html';
        break;
    case '/help.html':
        require __DIR__ . '/../src/views/help.html';
        break;
    case '/log_in.html':
        require __DIR__ . '/../src/views/log_in.html';
        break;
    case '/post.html':
        require __DIR__ . '/../src/views/post.html';
        break;
    case '/postuntilapprove.html':
        require __DIR__ . '/../src/views/postuntilapprove.html';
        break;
    case '/report.html':
        require __DIR__ . '/../src/views/report.html';
        break;
    case '/see_reports.html':
        require __DIR__ . '/../src/views/see_reports.html';
        break;
    case '/sign_up.html':
        require __DIR__ . '/../src/views/sign_up.html';
        break;
    case '/statistics.html':
        require __DIR__ . '/../src/views/statistics.html';
        break;
    default:
        http_response_code(404);
        echo "Page not found.";
        break;
}
