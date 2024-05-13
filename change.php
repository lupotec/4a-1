
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wijzig wachtwoord</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<br><br><br><br>
<div class="container">
	<a href='change.php'> HOME </a>
	<div class="panel panel-primary">
		<div class="panel-heading">Wachtwoord wijzigen:</div>
		<div class="panel-body">
			<br>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			

				<div class="form-group">
				<label for="code">Jou nieuw wachtwoord:</label>
				<input type="password" class="form-control" id="code" placeholder="new_wachtwoord" name="new_wachtwoord">
				</div>


				<button type="submit" class="btn btn-primary">wijzigen</button>
			</form>
			<br>
		</div>
	</div>
	
	

</div>

</body>
</html>

