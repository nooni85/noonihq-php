<?php
require_once __DIR__ . "/config/index.php";
require_once __DIR__ . "/config/mysql.php";

class App {
    var $brand = "누니HQ";

    public function getBrand()
    {
        return $this->brand;
    }

    public function getMySqlConnectString() : MySql
    {
        global $mysql;
        return $mysql;
    }
}
