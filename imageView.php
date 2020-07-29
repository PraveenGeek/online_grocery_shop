<?php
    require_once "connection.php";
    if(isset($_GET['image_id'])) {
        $sql = "SELECT imageType,imageData FROM shop_details WHERE sid=" . $_GET['image_id'];
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["imageType"]);
        echo $row["imageData"];
	}
?>