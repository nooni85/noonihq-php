<?php
require __DIR__ . "/../mysql.php";

class MySqlLocal implements MySql {
    var $host = "localhost";
    var $user = "devqa";
    var $password = "1234";
    var $db = "devqa";

    function getHost() {
        return $this->host;
    }
    function getUser() {
        return $this->user;
    }
    function getPassword() {
        return $this->password;
    }
    function getDb() {
        return $this->db;
    }
}