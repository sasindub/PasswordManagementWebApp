<?php

require_once 'user.php';
//insertData
if(isset($_POST['sname'])){
    $dataArr = array($_POST['sname'], $_POST['semail'], $_POST['mobile'], $_POST['spass']);

   echo $user->insertData($dataArr);
}

//email Validation
if(isset($_POST['type'])){
    if($_POST['type'] == 'emailValid'){
        echo $user->emailValidation($_POST['email']);
    }
}
