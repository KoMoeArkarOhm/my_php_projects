<!DOCTYPE html>
<html>
<head>
	<title>Read Cookie in broswer</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
</head>
<body>
	<div class="container">
		
		<h1>Your Cookies<span class="badge badge-warning">
<?php $cookie_count = array_count_values($_COOKIE);
echo  sizeof($cookie_count); ?>
		</span> are</h1>
		<br />
		<?php 
foreach ($_COOKIE as $key => $value) {
?> 
		<ul class="list-group">
			<li class="list-group-item">Cookie Key  : <?php echo $key; ?> 
				<a href="delete_cookie.php?key=<?php echo $key ?>">
					<span class="fas fa-trash float-right text-danger">
				    </span> 
			    </a>
		</li>
			<li class="list-group-item">Cookie Value : <?php echo $value; ?></li>
		</ul>

 

   

<br />

 <?php } ?>
 <a href="cookie_entry_form.php" class="btn btn-info">Wanna Create More Cookie</a>

<br />
		
	</div>
	
</body>
</html>
