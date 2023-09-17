<?php

include("vendor/autoload.php");

// use Helpers\Auth;


// use Libs\Database\MySQL;

// $mysql = new MySQL;
// $db = $mysql->connect();
// $result = $db->query("SELECT * FROM roles");

// print_r($result->fetchAll());

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);
$id = $table->insert([
    "name" => "Alice",
    "email" => "alice@gmail.com",
    "phone" => "23456789",
    "address" => "Yangon",
    "password" => "password",
]);

echo $id;
