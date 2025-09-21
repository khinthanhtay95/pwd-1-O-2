<?php

// XSS

$name = $_POST['name'];
$value = $_POST['value'];

$sql = "INSERT INTO roles (name, value) VALUES (:name, :value)";
echo $sql;

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '');

$statment = $db->prepare($sql);
$statment->execute(['name' => $name, 'value' => $value]);

header("location: index.php");
