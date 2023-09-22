<?php


header('Content-Type: application/json');

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/PDOConnection.php';
$vacancyId = $_GET['vacancyId'];

$connection = new PDOConnection();
$rows = $connection->select("SELECT id, name, phone, FROM vacancy_peoples where vacancyId = $vacancyId");
echo json_encode($rows);

/*echo json_encode([
    ['id' => 111, 'name' => 'vasya', 'phone' => '+7'],
    ['id' => 222, 'name' => 'petya', 'phone' => '+8'],
    ['id' => 333, 'name' => 'zora', 'phone' => '+9'],
]);*/