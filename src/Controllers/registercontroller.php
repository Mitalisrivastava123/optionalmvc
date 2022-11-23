<?php
include "../config/config.php";

$name=$_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$job = $_POST["job"];
$password = $_POST["password"];

$user = User::create(array('name' => $name, 'email' => $email,'phone' =>$phone,'job' =>$job,'password' =>$password));

if($user)
{
    header("Location:../Views/loginform.php");
}

?>