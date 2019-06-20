<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/App/TCustomMVC/Model.php';

class User extends Model
{
    public $table;

    /**
     * @dbf username:VARCHAR(50) NOT NULL
     */
    public $username;

    /**
     * @dbf password:VARCHAR(128) NOT NULL
     */
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