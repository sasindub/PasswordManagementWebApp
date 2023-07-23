<?php

Class Database{
    private $dbhost = "localhost";
    private $dbname = "passwordmanage";
    private $dbpass = "";
    private $dbuser = "root";

    protected $conn;

    public function __construct(){
        try{
            $dns = "mysql:host={$this->dbhost};dbname={$this->dbname}";

            $option = array(PDO::ATTR_PERSISTENT);

            $this->conn = new PDO($dns, $this->dbuser, $this->dbpass, $option);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}