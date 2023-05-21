<?php

require_once 'user.php';

if(isset($_POST['sname'])){
    $dataArr = array($_POST['sname'], $_POST['semail'], $_POST['mobile'], $_POST['spass']);

   echo $user->insertData($dataArr);
}
