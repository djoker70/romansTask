<?php
header('Content-Type: application/json');

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/PDOConnection.php';
$connection = new PDOConnection();
$rows = $connection->select('SELECT id, title, description FROM vacancy');
echo json_encode($rows);

/*echo json_encode([
    ['id' => 111, 'title' => 'qqqqq', 'description' => 'wwwww'],
    ['id' => 222, 'title' => 'aaaaaa', 'description' => 'sssss'],
    ['id' => 333, 'title' => 'zzzzzz', 'description' => 'ccccc'],
]);*/