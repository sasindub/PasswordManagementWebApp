<?php

require_once 'user.php';
require_once 'passworddetails.php';

extract($_POST);

//Sign up interaction with database
//insertData
if(isset($_POST['sname'])){
    $dataArr = array($_POST['sname'], $_POST['semail'], $_POST['mobile'], $_POST['spass']);

   echo $user->insertData($dataArr);
}


if(isset($_POST['type'])){
    //email Validation and send the verification code
    if($_POST['type'] == 'emailValid'){
        echo $user->emailValidation($_POST['email']);
    }

    //confirm email code
    if($_POST['type'] == 'confirmCode'){
        echo $user->confirmEmailCode($_POST['code']);
    }

    //Account page interactions

    //check category availability

    if($_POST['type'] == 'catCheck'){
        echo $pass->checkCategory($_POST['cat']);
    }

    //get user details
    if($_POST['type'] == 'userdetails'){

       
            echo $user->getLogins();
          
        
    }

    //add password data
    if($_POST['type'] == 'pdata'){
        echo $pass->addData($_POST['passw'], $_POST['user'], $_POST['des'], $_POST['catt'], $_POST['slevel']);
    }

    //get count of passwords
    if($_POST['type'] == 'count'){
        echo $pass->count();
    }

    //get password data
    if($_POST['type'] == 'getdata'){
        echo $pass->getData();
    }

    //secure alert password confirmation (View)
    if($_POST['type'] == 'passView'){
        echo $pass->getSecureLevel($_POST['id']);
    }

    //get all the details of a password (view)
    if($_POST['type'] == 'confirmSecure'){
        echo $pass->getAllDetailsPass($_POST['pasSecure']);
    }

}

//login interaction with database


if(isset($_POST['inputPassword']) && isset($_POST['inputEmail'])){
   echo $user->login($_POST['inputEmail'],$_POST['inputPassword']);

}


//Account page interaction

//add new password data
if(isset($_POST['cat']) && isset($_POST['pass']) && isset($_POST['user']) && isset($_POST['des'])){
    echo "kumal";
}

