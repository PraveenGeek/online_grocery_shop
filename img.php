<?php
session_start();
$id = $_SESSION['imgid'];
include("connection.php");
$link=Connection();

//echo "$id";
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
    $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
	$sql = "UPDATE shop_details SET imageType = '{$imageProperties['mime']}' , imageData ='{$imgData}' WHERE sid='$id' "; 
	
	$current_id = mysqli_query($link, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($link));
	if(isset($current_id)) {
		header("Location: home.php");
	}
}
}
?>