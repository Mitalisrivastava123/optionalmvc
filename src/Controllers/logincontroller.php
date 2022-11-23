<?php
session_start();
include "../config/config.php";

$email = $_POST["email"];
$password = $_POST["password"];


$user = User ::find('all', array('conditions' => array('email' => $email,'password' => $password)));

if($user)
{
    echo "You have login successfully";
}
else
{
    echo "<script>
    alert(' Your email  and password not match');
    window.location.href='../Views/loginform.php';
   </script>";
}



?>