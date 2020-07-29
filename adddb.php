<?php
include("connection.php");
$link=Connection();
session_start();
$table= strtolower((string)$_SESSION['shopid']);
//echo $table;
for ($i = 0; $i < count($_POST['name']); $i++) {
  if (isset($_POST['name'][$i])) {
    $name=$_POST['name'][$i];
    $price=$_POST['price'][$i];
    $per=$_POST['per'][$i];
    $qty=$_POST['quantity'][$i];
    $ctg=$_POST['category'][$i];


    $sql="insert into $table values('','$name',$price,'$per',$qty,'$ctg')";
    if(!mysqli_query($link,$sql)){
      echo mysqli_error();
    }
  }
}
if($i== count($_POST['name'])){
  header("Location:home.php?");exit();
}
?>
