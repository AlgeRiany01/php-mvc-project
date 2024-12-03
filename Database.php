<?php 



class Database
{
    public $con;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';
        $this->con = new PDO($dsn, 'root', '');
    }

    public function query($query) {
        $statement = $this->con->prepare($query);
        $statement->execute();
        return $statement;
    }
}
