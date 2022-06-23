<?php
define("HOST", "localhost");
define("USERNAME","root");
define("PASSWORD","");
$conn=new mysqli(HOST,USERNAME,PASSWORD,"final");
if($conn){
	echo "DELETED";
	echo "<br>";
}
$id=$_GET['id'];
//echo $id;

$sql = 'DELETE FROM payments WHERE sn='.$id;
$result=$conn->query($sql);
session_start();
if(!isset($_SESSION['Row Deleted successfully'])) {
    header("Location: http://localhost/finalform/process/show.php");
    exit;
}
?>