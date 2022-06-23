<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
    <style>
      * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
button{
  border: none;
  border-radius: 15px;
  box-shadow: 0 0 8px rgb(207, 207, 207);
}

button:hover{
  border: none;
  padding: 15px;
  border-radius: 15px;
  box-shadow: inset 0 0 8px #f9f8fc;
  } 


.button-os{
   position: static;
    width: 200px;
    height: 65px;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    background-color: #f9f8fc;
    border: 2.5px solid #0e172c;
    transition: background-color 2.2s;
    transition-duration: 3s;
    transition: 1.5s;
  }
  
  .button-os:hover{
    position: static;
    top: 30px;
    background-color: #fec7d7;
  }
  
  .button-os a{
    font-size: 20px;
    display: block;
    text-decoration: none;
    color:#0e172c;
    transition: 1.5s;
  }
  
  .button-os a:hover{
    letter-spacing: 5px;
  }
        
table {
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  border: 3px solid purple;
}


th, td {
  padding: 20px;
}
html {
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
}

thead th, tfoot th {
  font-family: 'Rock Salt', cursive;
}

th {
  letter-spacing: 2px;
}

td {
  letter-spacing: 1px;
}

tbody td {
  text-align: center;
}

tfoot th {
  text-align: right;
}
thead, tfoot {
  background: url(leopardskin.jpg);
  color: white;
  text-shadow: 1px 1px 1px black;
}

thead th, tfoot th, tfoot td {
  background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.5));
  border: 3px solid purple;
}


</style>
</head>
<table border="2px">
    <thead>
        <th>SN</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Company Name</th>
        <th>Street Address</th>
        <th>Apartment</th>

        <th>City</th>
        <th>Total Price</th>

        <th>Email Address</th>
        <th>EDIT</th>

    </thead>
    <tbody>
    <?php
define("Host","localhost");
define ("User","root");
define("Password","");
$conn= new mysqli(Host,User, Password, "final");


        $sql="Select * from payments";
        $result=$conn->query($sql);
        if($result->num_rows>=0){

        foreach($result as $value){
            ?>
                <tr>
                    <td><?php

                    $id = $value['sn'];
                        echo $id;

                        $e_url = 'edit.php?id='.$id;
                        $d_url = 'delete.php?id='.$id;
                        $u_url = 'update.php?id='.$id;?>
                    </td>
                    <td><?php echo $value['fname'];?></td>
                    <td><?php echo $value['lname'];?></td>
                    <td><?php echo $value['cn'];?></td>
                    <td><?php echo $value['houseadd'];?></td>
                    <td><?php echo $value['apartment'];?></td>
                    <td><?php echo $value['city'];?></td>
                    <td><?php echo $value['tp'];?></td>
                    <td><?php echo $value['email'];?></td>
                    <td><a href="<?php echo $e_url;?>">edit</a>
                        <a href="<?php echo $d_url;?>">delete</a></td>
                </tr>
                <?php  }


                }  ?>
    </tbody>
</table>
<button id="foot"><button class="button-os"><a href="pscheck.php">Cancel</a></button></button>
</body>
       </html>