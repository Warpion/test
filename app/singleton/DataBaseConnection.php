<?php

namespace app\singleton;

use app\config\DataBaseConfig;

class DataBaseConnection
{
    use SingletonTrait;
    
    public $dbh;

    public function connect()
    {
        $dsn = DataBaseConfig::DB_CONNECTION.':host='.DataBaseConfig::DB_HOST.';dbname='.DataBaseConfig::DB_DATABASE;

        try {
            $this->dbh = new \PDO($dsn, DataBaseConfig::DB_USERNAME, DataBaseConfig::DB_PASSWORD);
            return $this->dbh;
        } catch (\PDOException $e) {
            print "DB Error!: " . $e->getMessage();
            die();
        }
    }
}