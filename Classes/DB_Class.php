<?php

Namespace App\DB;

class DBClass
{

  function __construct()
  {
    global $db;
    if (!$db) {
      throw new \Exception("Error Connection With Database..", 1);

    }
  }


  public function insertNewUser($name,$email,$password){
    global $db;
    $password = md5($password."0x");
    $query = "INSERT INTO users (name,email,password) Values('$name', '$email', '$password')";
    if ( $db->query($query) ) {
      return $db->insert_id;
    }else {
      return false;
    }
  }
}



 ?>
