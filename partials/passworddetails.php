<?php

require_once 'database.php';

Class PasswordDetails extends Database{

    private $tableName = 'passwordDetails';

    public function checkCategory($cat){
        try{
            $stmt = $this->conn->prepare("SELECT category FROM {$this->tableName} WHERE category = :cat");
            $stmt->bindParam(":cat", $cat);

            if($stmt->execute()){
                if($stmt->rowCount() > 0){
                  return $stmt->rowCount(). " ". $cat;
                 
                }else{
                    return 0;
                }
            }

        }catch(PDOException $e){
            $e->getMessage();
            $this->conn->rollBack();
        }
    }

    //add password details
 
    public function addData($pass, $user, $des, $cat, $slevel){
        try{
            $stmt = $this->conn->prepare("INSERT INTO {$this->tableName} (password, category, security_level, user_name, de, uid) VALUES (:pass, :cat, :slevel, :uname, :des, :uid)");

            $stmt->bindParam(":pass", $pass);
            $stmt->bindParam(":cat", $cat);
            $stmt->bindParam(":slevel", $slevel);
            $stmt->bindParam(":des", $des);
            $stmt->bindParam(":uname", $user);
            $stmt->bindParam(":uid", $_SESSION['uid']);

            $this->conn->beginTransaction();

            if($stmt->execute()){
                $this->conn->commit();
                return 0;
            }else{
                return 1;
            }
            

        }catch(PDOException $e){    
            echo $e->getMessage();
            $this->conn->rollBack();
        }
    }

    //get the count of passwords
    public function count(){
        try{
            $stmt = $this->conn->prepare("SELECT COUNT(pid) as cnt FROM {$this->tableName} WHERE uid = {$_SESSION['uid']}");
            if($stmt->execute()){
                if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    return $row['cnt'];
                }
            }else{
                return 1;
            }
        }catch(PDOException $e){
            $e->getMessage();
            $this->conn->rollBack();
        }
    }

    //get all password data related to the client
    public function getData(){
        try{
            $stmt =  $this->conn->prepare("SELECT * FROM {$this->tableName} WHERE uid = {$_SESSION['uid']}");
            $data = '';
            if($stmt->execute()){
                if($stmt->rowCount() > 0){
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $sec = '';
                        if( $row['security_level'] == 'low'){
                            $sec = '<span class="badge badge-primary" style="background-color:blue; opacity: 0.6">Low</span>';
                        }else if ($row['security_level'] == 'mid'){
                            $sec = '<span class="badge badge-warning" style="background-color:orange; opacity: 0.6">Mid</span>';
                        }else{
                            $sec = '<span class="badge badge-danger" style="background-color:red; opacity: 0.6">High</span>';
                        }

                        // <h5 class="card-subtitle mb-2 text-muted">'.
                                
                        // $row['security_level']
                        // .'</h5>

                        $data .= '<div class="col-md-2 col-sm-1" style="margin-bottom:10px;">
                        <div class="card" style="width: 18rem; border:2px solid #065471; padding:10px; border-radius: 20px;" >
                            <div class="card-body">
                                <h4 class="card-title">'.substr($row['category'], 0, 15).'</h4>
                             '.$sec.'
                
                                <div class="boxx">
                                <p class="card-text">'.$row['de'].'</p>
                                </div>                
                                <a href="#" class="card-link" style="background-color: #065471; color:white; border-radius: 4px; padding: 3px 6px 3px 6px;" id="'.$row['pid'].'">View</a>
                            </div>
                        </div> 
                    </div>';
                    }

                    return $data;
                }else{
                    return 1;
                }
            }

        }catch(PDOException $e){
            $e->getMessage();
            $this->conn->rollBack();
        }
    }
}

$pass = new PasswordDetails();