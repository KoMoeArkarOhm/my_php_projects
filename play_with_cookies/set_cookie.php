
<?php 
$cookieKey = $_POST['cookieKey'];
$cookieValue =$_POST['cookieValue'];
setcookie($cookieKey, $cookieValue);

/*setcookie('arkar_cookie', '4', 10); // not working expired date not working */
header("location: index.php");
 ?>