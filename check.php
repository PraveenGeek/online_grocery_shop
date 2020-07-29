<?php

$shopid=$_POST['email'];
$pwd=$_POST['password'];

include("connection.php");
$link=Connection();

$sql="select * from shop_details where semail='$shopid' ";

$result=mysqli_query($link,$sql);


if($result!=false){

while($row=mysqli_fetch_array($result)){
$check= $row["smno"];
session_start();
$temp= $row['shopid'];
$imid = $row['sid'];
$_SESSION['shopid']= $temp;
$_SESSION['imgid']= $imid;
if($check == $pwd){
  header("Location:shopbackportal.php?login=success");
  exit();
}
else{
  header("Location:shopbackportal.php?login=failed");
  exit();
}


}


}


mysqli_free_result($result);
mysqli_close($link);
 ?>
