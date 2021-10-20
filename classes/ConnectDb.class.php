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

// CREATE TABLE products SQL
/*
CREATE TABLE `shop`.`products` ( `id` INT NOT NULL AUTO_INCREMENT ,
`sku` VARCHAR(155) NOT NULL ,
`name` VARCHAR(155) NOT NULL ,
`price` DECIMAL(10,2) NOT NULL ,
`product_type` VARCHAR(155) NOT NULL ,
`size` INT NULL DEFAULT NULL ,
`height` INT NULL DEFAULT NULL ,
`width` INT NULL DEFAULT NULL ,
`length` INT NULL DEFAULT NULL ,
`weight` INT NULL DEFAULT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;
*/