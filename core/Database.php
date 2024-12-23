<?php

namespace core;

use PDO;

class Database
{
    public $con, $statement;

    public function __construct($config)
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->con = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->con->prepare($query);
        $this->statement->execute($params);
        return $this;
    }
    public function get()
    {
        return $this->statement->fetchAll();
    }
    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {

        $result =  $this->statement->fetch();
        if (!$result) {
            abort();
        }
        return $result;
    }
}
