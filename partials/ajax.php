<?php

require_once 'user.php';

extract($_POST);

if($_POST['type'] == 'insert'){
    echo $user->insertData($data);
}