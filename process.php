<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных из формы
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $education = $_POST["education"];
    $previousJob = $_POST["previous-job"];
    $age = $_POST["age"];

    // Сохранение данных в файл
    $data = array(
        "name" => $name,
        "phone" => $phone,
        "education" => $education,
        "previousJob" => $previousJob,
        "age" => $age
    );
    $file = "applicants.txt";
    $fp = fopen($file, "a");
    fwrite($fp, json_encode($data) . "\n");
    fclose($fp);

    // Отправка ответа клиенту
    echo "success";
} else {
    // Получение списка откликнувшихся из файла
    $applicants = array();
    $file = "applicants.txt";
    $fp = fopen($file, "r");
    while (!feof($fp)) {
        $line = fgets($fp);
        if (!empty($line)) {
            $data = json_decode($line, true);
            array_push($applicants, $data);
        }
    }
    fclose($fp);

    // Отправка списка откликнувшихся клиенту
    header('Content-Type: application/json');
    echo json_encode($applicants);
}
?>