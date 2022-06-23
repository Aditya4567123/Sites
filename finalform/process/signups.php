<?php
define("Host","localhost");
define ("User","root");
define("Password","");
$conn= new mysqli(Host,User, Password, "final");
if($conn){
    echo"DB connected Successfully<br>";
}

$s="CREATE DATABASE final";
$conn->query($s);
$email = $_POST["email"];
echo "Email:".$email."<br>";
$name = $_POST["name"];
echo "User Name:".$name."<br>";
$Password = md5($_POST["psw"]);
echo "Password Name:".$Password."<br>";

$s= 'INSERT INTO signup(sn, email, name, password) VALUES
    ("","'.$email.'","'.$name.'","'.$Password.'")';
$conn->query($s);
echo $s;
session_start();
$_SESSION['message']= "Account created Successfully";
header('location:http://localhost/finalform/loginpage/login.php');
?>






