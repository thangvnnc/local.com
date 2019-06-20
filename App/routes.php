<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/App/Controller/HomeController.php';

$router = new Router(new Request);

// Test http://local.com?start=0&end=10
$router->get('/', function ($request) {
    // Xử lý middleware
    HomeController::index($request);
});

$router->get('/login', function ($request) {
    // Xử lý middleware
    HomeController::login($request);
});

$router->get('/profile', function($request) {
    // Xử lý middleware
    HomeController::profile($request);
    return;
});

$router->post('/login', function ($request) {
    // Xử lý middleware
    HomeController::postLogin($request);
});

$router->post('/data', function($request) {
    // Xử lý middleware
    HomeController::data($request);
    return;
});
