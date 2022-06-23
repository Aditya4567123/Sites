<?php
define("HOST", "localhost");
define("USERNAME","root");
define("PASSWORD","");
$conn=new mysqli(HOST,USERNAME,PASSWORD,"final");
if($conn){
$id=$_POST['id'];
//update data from form
$fname = $_POST["fname"];

$lname = $_POST["lname"];

$cn = $_POST["cn"];

$houseadd = $_POST["houseadd"];

$apartment = $_POST["apartment"];

$city = $_POST["city"];

$tp = $_POST["tp"];

$email = $_POST["email"];


$sql="UPDATE payments SET fname='".$fname."', lname='".$lname."', cn='".$cn."', houseadd='".$houseadd."', apartment='".$apartment."', city='".$city."', tp='".$tp."'  where sn=".$id;
$result=$conn->query($sql);	
?>
