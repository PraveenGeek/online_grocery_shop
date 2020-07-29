
<?php
include("connection.php");
$link=Connection();
session_start();
$tbl=strtolower((string)$_SESSION['shopid']);


for ($i = 0; $i < count($_POST['uitem']); $i++) {
  if (isset($_POST['uitem'][$i])) {
    $name=$_POST['uitem'][$i];
    $price=$_POST['nprice'][$i];
    $qty=$_POST['nqty'][$i];


    $sql="update $tbl set price=$price , quantity=$qty where pname='$name'";
    if(!mysqli_query($link,$sql)){
      echo mysqli_error();
    }
  }
}
if($i== count($_POST['uitem'])){
  header("Location:home.php?disp=yes");exit();
}
?>
