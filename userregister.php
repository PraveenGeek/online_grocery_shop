<?php 
require_once('connection.php');
$urname=$_POST['name'];
$urlocation=$_POST['location'];
$urphone=$_POST['phone'];
$sql="INSERT INTO items(Name,Phone,Location)VALUES('$urname','$urphone','$urlocation')";
$res=mysqli_query($conn,$sql);
if ($res) {
	
	header("Location:index.html");
}
else{
	echo "error";
}