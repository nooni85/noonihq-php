<?php

$runPhpProfile = getenv('PHP_PROFILE');
$mysql = null;

switch ($runPhpProfile) {
    default:
        require_once __DIR__ . "/mysql/my-config-local.php";
        $mysql = new MySqlLocal();
        break;
}