<?php

namespace app;

use app\database\DataBase;

class App
{
    public static function run()
    {
        $db = new DataBase();

        $db->run();

    }
}