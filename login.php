<?php
session_start();
if(isset($_SESSION['ingelogd'])){echo "<center><br><br><br><br><br>U bent al ingelogd. <a href='index.php'>Ga terug</a></center>"; }

if(isset($_POST['email']) && isset($_POST['wachtwoord'])){

	include_once('db.php');
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$wachtwoord = mysqli_real_escape_string($con, $_POST['wachtwoord']);
	//echo"<br>".$email." OK<br>";
	//echo"<br>".$wachtwoord." OK<br>";
	//WE ZIJN VEILIG

	$sql = "
	SELECT email, password FROM login 
	WHERE email= '$email' 
	AND password= '$wachtwoord' ";

	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		$_SESSION['ingelogd']="ja";
		$_SESSION['user']=$_POST['email'];
		$backTo="index.php";
		header('Location: '.$backTo);
	}else{
		echo"Je inloggegevens zijn niet juist! Probeer opnieuw!";
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<br><br><br><br>
<div class="container">
	<a href='index.php'> HOME </a>
	<div class="panel panel-primary">
		<div class="panel-heading">Inloggen:</div>
		<div class="panel-body">
			<br>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
				<div class="form-group">
				<label for="code">Jou e-mail:</label>
				<input type="email" class="form-control" id="email" placeholder="@" name="email">
				</div>


				<div class="form-group">
				<label for="code">Jou wachtwoord:</label>
				<input type="password" class="form-control" id="code" placeholder="wachtwoord" name="wachtwoord">
				</div>


				<button type="submit" class="btn btn-primary">login</button>
			</form>
			<br>
		</div>
	</div>
	
	

</div>

</body>
</html>

