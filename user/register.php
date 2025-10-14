<?php
require_once __DIR__ . "/../config.php";

$config = new Config();
$mysql = $config->getMySqlConnectString();

$my_conn = new mysqli($mysql->getHost(), $mysql->getUser(), $mysql->getPassword(), $mysql->getDb());

if ($my_conn->connect_error) {
    die("Connection failed: " . $my_conn->connect_error);
}

$my_conn->close();

phpinfo();