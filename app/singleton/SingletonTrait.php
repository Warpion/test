<?php

namespace app\singleton;

trait SingletonTrait
{

    public static $instance = null;

    public function __construct()
    {
        //
    }

    public function __clone()
    {
        //
    }

    public function __wakeup()
    {
        //
    }

    public static function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }

}
