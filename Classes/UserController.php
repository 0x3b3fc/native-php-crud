<?php
use App\DB\DBClass;
//using th DB Class (Required)

$dbClass = new DBClass();

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) ) {
  echo $dbClass->insertNewUser($_POST['name'],$_POST['email'],$_POST['password']);
}


?>
