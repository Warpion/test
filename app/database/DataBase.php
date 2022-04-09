<?php

namespace app\database;

use app\singleton\DataBaseConnection;

class DataBase
{
    public $dbh;

    public function __construct()
    {
        $db = new DataBaseConnection();

        $this->dbh = $db->connect();
    }

    public function run()
    {

        foreach($this->dbh->query('SELECT * from users') as $row) {
            print_r($row);
        }
    }
}