<?php

require_once 'user.php';

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
        echo "jugath";
    }

}

//login interaction with database


if(isset($_POST['inputPassword']) && isset($_POST['inputEmail'])){
   echo $user->login($_POST['inputEmail'],$_POST['inputPassword']);
}

