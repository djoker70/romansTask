<?php

$vacancyId = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];

header('Content-Type: application/json');

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/PDOConnection.php';
$connection = new PDOConnection();
$rows = $connection->insert("INSERT INTO vacancy_peoples vacancyId = $vacancyId, name = $name, phone = $phone");

echo json_encode(true);