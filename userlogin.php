<?php
require_once('connection.php');
$usname=$_POST['name1'];
$usphone=$_POST['phonenumber'];
$sql="SELECT * FROM items WHERE Phone='$usphone' and Name = '$usname'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
      while($row = mysqli_fetch_assoc($res))
    {
        
       session_start();
	$_SESSION['Phone3']=$usphone;
	$_SESSION['Name3']=$usname;
    $_SESSION['uslocation'] = $row['Location'];
    
	header("Location:index1.php");
       } 
	
}
else {
	echo "invlaid";
	}