<?php

include("connection.php");
$link=Connection();

$sname=$_POST['sname'];
$smno=$_POST['smno'];
$semail=$_POST['semail'];
$saddr=$_POST['saddr'];
$loc=$_POST['location'];

$shopid="shp".date("Y")."sb_";
$sql1="select * from shop_details where sid=(SELECT max(sid) from shop_details) ";

$result=mysqli_query($link,$sql1);

if($result!=false){

while($row=mysqli_fetch_array($result)){

$shopid.=(string) ($row["sid"]+1);


}

$sql="insert into shop_details(sid,shopid,sname,smno,semail,saddr,location) values('','$shopid','$sname','$smno','$semail','$saddr','$loc')";

if(!mysqli_query($link,$sql)){
 echo mysqli_error($link);
}
else{


$ntable="CREATE TABLE IF NOT EXISTS $shopid (
  pno int(11) NOT NULL AUTO_INCREMENT,
  pname varchar(50) NOT NULL,
  price int(11) NOT NULL,
  per varchar(10) NOT NULL,
  quantity int(11) NOT NULL,
  category varchar(50) NOT NULL,
  PRIMARY KEY (`pno`)
) ";
      if(!mysqli_query($link,$ntable)){
        die('Sorry for inconvineince'. mysqli_error($link));
      }
      else{
        header("Location:shopbackportal.php?smsg=$shopid");
        exit();
      }


//header("location:home.php");
}
}
else{
  echo mysqli_error();
}



 ?>
