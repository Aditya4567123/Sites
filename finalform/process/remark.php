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
$Name = $_POST["Name"];
echo "Name:".$Name."<br>";
$Email = $_POST["Email"];
echo "Email:".$Email."<br>";
$Subject = $_POST["Subject"];
echo "Subject:".$Subject."<br>";
$Message = $_POST["Message"];
echo "Message:".$Message."<br>";

$s= 'INSERT INTO remark(sn, Name, Email, Subject, Message) VALUES
    ("","'.$Name.'","'.$Email.'","'.$Subject.'","'.$Message.'")';
$conn->query($s);
echo $s;
session_start();
$_SESSION['message']= "Message sent Successfully";

?>

