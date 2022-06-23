<?php
define("HOST", "localhost");
define("USERNAME","root");
define("PASSWORD","");
$conn=new mysqli(HOST,USERNAME,PASSWORD,"final");
if($conn){
	echo"Connected!! "."You can now update the data.";
	echo "<br>";
}
$id=$_GET['id'];
//echo $id;

$sql = 'SELECT * FROM payments WHERE sn='.$id;
$result=$conn->query($sql);
if($result->num_rows>=0){
	$data=$result->fetch_row();
	$f=$data[1];
	$l=$data[2];
	$c=$data[3];
	$h=$data[4];
	$a=$data[5];
	$ci=$data[6];
	$tp=$data[7];
    $e=$data[8];

	
}
?>

?>
<html>
    <head>
        <title>Purchase Update Form</title>
        <link rel="stylesheet" href="../css/purchase.css">

    </head>

<body>
<div class="container">
  <div class="title">
      <h2>Product Update Form</h2>
  </div>
<div class="d-flex">
  <form action="payments.php" method="POST">
    <label>
      <span class="fname" >First Name <span class="required">*</span></span>
      <input type="text" name="fname" value="<?php echo $f;?>">
    </label>
    <label>
      <span class="lname">Last Name <span class="required">*</span></span>
      <input type="text" name="lname" value="<?php echo $l;?>">
    </label>
    <label>
      <span>Company Name (Optional)</span>
      <input type="text" name="cn" value="<?php echo $c;?>">
    </label>
    <label>
      <span>Street Address <span class="required">*</span></span>
      <input type="text" name="houseadd" placeholder="House number and street name" value="<?php echo $h;?>"required>
    </label>

    <label>
    <span>Town / City <span class="required">*</span></span>
      <input type="text" name="city" value="<?php echo $ci;?>"> 
    </label>
    <label>
      <span>Total price <span class="required">*</span></span>
      <input type="text" name="tp" value="<?php echo $tp;?>"> 
    </label>
    <label>
      <span>Email Address <span class="required">*</span></span>
      <input type="email" name="email" value="<?php echo $e;?>"> 
    </label>
    <button type="submit" class="upbtn" id="upbut">Update</button>

    
    <button type="button" class="cancelbtn" id="canbut">Cancel</button>
      <script>
       document.getElementById("canbut").addEventListener("click", myFunction);
       function myFunction() {
         window.location.href="show.php";
       }
      </script>
</body>