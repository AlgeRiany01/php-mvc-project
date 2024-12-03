<?php 



class Database
{
    public $con;
    public function __construct($config)
    {
         $dsn = 'mysql:'.http_build_query($config,'',';');
        $this->con = new PDO($dsn, 'root', '',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query, $params = []) {
        $statement = $this->con->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}
