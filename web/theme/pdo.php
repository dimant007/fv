<?php

$pdo = new PDO("mysql:host=localhost;dbname=iworld", "root", "");

$color = $_POST['color'];
$type = $_POST['type'];

$stmt = $pdo->prepare("SELECT price FROM prices WHERE color_id = :color AND type_id = :type");
$stmt->execute([":type" => $type, ":color" => $color]);

echo $stmt->fetch()['price'];