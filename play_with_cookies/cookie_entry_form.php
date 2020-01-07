
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cookie Setter!!!!</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
 </head>
 <body>
 	<div class="container">
 		<h1>Set you are cookie here!!!</h1>
 <form action="set_cookie.php" method="post">
<div class="form-group">
 	<label for="cookieKey">Key</label>
 	<input type="text" name="cookieKey" class="form-control">
 </div>
<div class="form-group">
 	<label for="cookieValue">Value</label>
 	<input type="text" name="cookieValue" class="form-control">
</div>
 	<input type="submit" value="Save" class="btn btn-primary btn-lg">
 </form>
 	</div>
 
 </body>
 </html>