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
$fname = $_POST["fname"];

$lname = $_POST["lname"];

$cn = $_POST["cn"];

$houseadd = $_POST["houseadd"];

$apartment = $_POST["apartment"];

$city = $_POST["city"];

$tp = $_POST["tp"];

$email = $_POST["email"];


$s= 'INSERT INTO payments(sn, fname, lname, cn, houseadd, apartment, city, tp, email) VALUES
    ("","'.$fname.'","'.$lname.'","'.$cn.'","'.$houseadd.'","'.$apartment.'","'.$city.'","'.$tp.'","'.$email.'")';
$conn->query($s);
echo $s;
session_start();
if(!isset($_SESSION['Done successfully'])) {
    header("Location: http://localhost/finalform/process/pscheck.php");
    exit;
}

?>

