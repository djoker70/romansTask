<?php

class PDOConnection
{
    private $connection;

    public function __construct()
    {
        $con = require_once $_SERVER['DOCUMENT_ROOT'] . '/php/environment/db_con.php';
        $this->connection = new PDO('mysql:host=' . $con['host'] . ';dbname=' . $con['dbname'], $con['user'], $con['pass']);
    }

    /**
     * @return PDO
     */
    private function getConnection()
    {
        return $this->connection;
    }

    public function select(string $prepareQuery, array $params = [], int $mode = PDO::FETCH_ASSOC): array
    {
        $query = $this->getConnection()->prepare($prepareQuery);
        foreach ($params as $paramName => &$paramValue) {
            $query->bindParam(':' . $paramName, $paramValue);
        }
        $query->execute();
        $result = [];
        while ($row = $query->fetch($mode)) {
            $result[] = $row;
        }
        return $result;
    }

    public function insert(string $prepareQuery, array $params = []): bool
    {
        $query = $this->getConnection()->prepare($prepareQuery);
        return $query->execute($params);
    }

    public function lastInsertId(string $name = null): false|string
    {
        return $this->getConnection()->lastInsertId($name);
    }
}