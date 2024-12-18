<?php

namespace Classes;

use PDO;

class Database
{
    private $connection;
    private $statement;
    public function __construct(array $dsnData, string $username = 'root', string $password = '') {
        try {
            $dsn = 'mysql:' . http_build_query($dsnData, '', ';');

            $this->connection = new PDO($dsn, $username, $password, [
                PDO::FETCH_DEFAULT => PDO::FETCH_ASSOC
            ]);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (\PDOException $pdoe) {
            dd($pdoe->getMessage());
        }
    }
    public function query(string $query, array $params = []) {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }
    public function get() {
        return $this->statement->fetch();
    }
    public function getAll() {
        return $this->statement->fetchAll();
    }
}