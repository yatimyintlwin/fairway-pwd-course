<?php

include("mysql.php");
$db = connect();

$id = $_POST['id'];
$name = $_POST['name'];
$value = $_POST['value'];

// $db->query("UPDATE roles SET name='$name', value=$value WHERE id = $id");

$sql = "UPDATE roles SET name = :name, value = :value WHERE id = :id";
$statement = $db->prepare($sql);
$statement->execute(["name" => $name, "value" => $value, "id" => $id]);

header("location: index.php");
