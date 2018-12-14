<?php
class Singleton
{
    private static $instance = null;
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public function do_something($str)
    {
        echo "Input string: {$str}";
    }

}

Singleton::getInstance()->do_something('foo bar baz');