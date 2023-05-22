<?php

require_once 'database.php';

Class User extends Database{

    private $tableName = "users";

    //Insert data
    public function insertData($data){

        $name = $data[0];
        $mobile = $data[2];
        $email = $data[1];
        $pass = password_hash($data[3], PASSWORD_DEFAULT);
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

    // Email validation
    
    public function emailValidation($email){
        try{
            $stmt =$this->conn->prepare("SELECT email FROM {$this->tableName} WHERE email = :email");
            $stmt->bindParam(":email", $email);

            if($stmt->execute()){
                if($stmt->rowCount() > 0){
                    return 1;
                }else{
                    return 0;
                }
            }

        }catch(PDOException $e){
            echo $e->getMessage();
            $this->conn->rollBack();
        }
    }


    //update password

    //login


}

$user = new User;