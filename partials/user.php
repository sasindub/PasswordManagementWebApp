<?php

require_once 'database.php';

session_start();

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

            $this->conn->beginTransaction();


            if($stmt->execute()){
                $this->conn->commit();
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
                    //if the email is not available then send the email verification code 

                    // ini_set( 'display_errors', 1 );
                    // error_reporting( E_ALL );
                    
                    // $from = "tioss.infor@gmail.com";
                    // $to = $email;
                    // $subject = "lockMe Confirmation code: ";
                    // $message = 'Your e-mail confirmation code is <span style="font-size:25pt;"><b>".rand(00000,99999)."</b><span>';
                    // $headers = "From: {$from}\r\nContent-Type: text/html;";
                    
                    // if(mail($to,$subject,$message, $headers)) {
                    //     return "sent";
                    // } else {
                    //     return 0;
                    // }

                    return 0;
                
                }
            }

        }catch(PDOException $e){
            echo $e->getMessage();
            $this->conn->rollBack();
        }
    }

    //email confirmation code
    public function confirmEmailCode($code){
        try{

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }


    //update password

    //login
    public function login($email, $pass){
        try{

            $stmt = $this->conn->prepare("SELECT * From {$this->tableName} WHERE email = :email");
            $stmt->bindParam(":email", $email);

          

            if($stmt->execute()){
                if($stmt->rowCount() > 0){
                    if($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        if(password_verify($pass,$row['password'])){
                            $_SESSION['username'] = $row['uname'];
                            $_SESSION['uid'] = $row['uid'];
                            $_SESSION['tele'] = $row['mobile'];
                            $_SESSION['email'] = $row['email'];
                            return 0;
                        }else{
                            return 1;
                        }
                    }
                }else{
                    return 1;
                }
            }

        }catch(PDOException $e){
            echo $e->getMessage();
            $this->conn->rollback();
        }
    }

    public function addData($pass, $user, $des, $cat, $slevel){
        try{
            $stmt = $this->conn->prepare("INSERT INTO {$this->tableName} ");
        }catch(PDOException $e){    
            echo $e->getMessage();
            $this->conn->rollBack();
        }
    }

}

$user = new User;