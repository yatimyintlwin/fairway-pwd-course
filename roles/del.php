<?php

include("mysql.php");
$db = connect();

$id = $_GET['id'];

// $db->query("DELETE FROM roles Where id=$id");

$sql = "DELETE FROM roles Where id = :id";
$statement = $db->prepare($sql);
$statement->execute(["id" => $id]);

header("location: index.php");
