<?php

class User
{
    public $id;
    public $username;
    public $password;

    static function parse(array $data)
    {
        $user = new User();

        foreach($data as $key => $val)
        {
            if(property_exists($user,$key))
            {
                $user->$key =  $val;
            }
        }

        return $user;
    }

    function __construct()
    {
    }
}