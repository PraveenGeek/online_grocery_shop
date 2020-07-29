<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
    $shop1 = $_GET['shop'];
    session_start();

   $_SESSION['shop_ses'] = $shop1;

   header("Location:menu.php?shop_get=.$shop1");
echo '</response>';
?>