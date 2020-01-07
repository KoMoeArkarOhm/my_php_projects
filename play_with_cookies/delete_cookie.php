<?php 
$deleteCookie = $_GET['key'];
setcookie($deleteCookie, '', time()-1);
 header("location: index.php");
 ?>

