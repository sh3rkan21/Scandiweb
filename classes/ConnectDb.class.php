<?php

class ConnectDb

{
    private static $instance = null;
    private $conn;

    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "shop";

    private function __construct(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $this->conn = new PDO($dsn, $this->user, $this->pwd);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new ConnectDb();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}