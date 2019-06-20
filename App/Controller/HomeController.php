<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/App/TCustomMVC/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/App/TCustomMVC/Request.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/App/Model/User.php';

class HomeController extends Controller
{
    public function __construct() {
    }

    public static function index (Request $request)
    {
        $params = $request->getBody();
        self::views('index.php', $params);
    }

    public static function login (Request $request)
    {
        $params = $request->getBody();
        self::views('login.php', $params);
    }

    public static function postLogin (Request $request)
    {
        $params = $request->getBody();

        // get post login
        $user = User::parse($params);

        print_r($user->getCommentProperties());
//        self::redirectTo('/profile');

    }

    public static function profile (Request $request)
    {
        $params = $request->getBody();
        print_r($params);
    }

    public static function data (Request $request)
    {
        $params = $request->getBody();
        print_r($params);
    }
}