<?php

class Controller
{
    protected static function views($nameView, $params)
    {
        require_once $_SERVER['DOCUMENT_ROOT'].'/App/View/'.$nameView;
    }

    protected static function redirectTo($nameView)
    {
        header('Location: '.$nameView); exit();
    }
}