<?php

require_once 'database.php';

Class User extends Database{

    private $tableName = "users";

    //Insert data
    public function insertData($data){

        $name = "";
        $mobile = 0;
        $email = "";
        $pass = password_hash("samath", PASSWORD_DEFAULT);
        try{

            $stmt = $this->conn->prepare("INSERT INTO {$this->tableName} (uname, mobile, email, password) VALUES (:uname, :mobile, :email, :pass)");

            $stmt->bindParam(":uname", $name);
            $stmt->bindParam(":mobile",$mobile);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pass", $pass);

            if($stmt->execute()){
                return 0;
            }else{
                return 1;
            }

        }catch(PDOException $e){
            $e->getMessage();
            $this->conn->rollBack();
        }
    }

    //Get email 


    //update password

    //login


}

$user = new User;