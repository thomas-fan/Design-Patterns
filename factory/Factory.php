<?php
require_once './GuestUser.php';
require_once './AdminUser.php';
require_once './CustomerUser.php';
require_once './User.php';

class Factory
{
    private static $users = [
        'zhangfan' => 'admin',
        'thomas' => 'guest',
        'tom' => 'customer',
    ];

    public static function create(string $name): User
    {
       if (!isset(self::$users[$name])) {
           throw new Exception('Unknown user');
       }

       switch (self::$users[$name]) {
           case "guest" : return new GuestUser($name);
           case "customer" : return new CustomerUser($name);
           case "admin" : return new AdminUser($name);
           default:
               throw new Exception('Unknown user');
       }
    }

}