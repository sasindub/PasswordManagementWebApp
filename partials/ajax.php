<?php

require_once 'user.php';
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

}
