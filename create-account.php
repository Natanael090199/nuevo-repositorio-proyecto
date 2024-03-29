<?php	
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Crear cuenta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>

<div class="container">

	<?php
	

	include 'conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$email= $_POST['email'];
	$name= $_POST['name'];
	$pass= $_POST['password'];

	// Query to check if the email already exist
	$checkEmail = "SELECT `Tabla_Usuario_01_Email` FROM `tabla_usuario_01` WHERE $email = `Tabla_Usuario_01_Email`";
//echo $_POST['email'];
	// Variable $result hold the connection data and the query
/* 	$result = $conn-> mysqli_query($checkEmail);
	 //Variable $count hold the result of the query
	$count = mysqli_num_rows($result);
	// If count == 1 that means the email is already on the database
	if ($count == 1) {
	echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>That email is already in our database.</p>
					<p><a href='login.html'>Please login here</a></p>
				</div>";
	} else { */	
	
	/*
	si el email no existe, este se envia a la base de datos y se crea la cuenta
	*/
/* 	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'] */;
	
	// El password_hash() convierte el character en hash para luego enviarlo a la base de datos
	/* $passHash = password_hash($pass, PASSWORD_DEFAULT); */
	
	// Query para enviar los datos
	$query = "INSERT INTO `tabla_usuario_01` (`Tabla_Usuario_01_Id`, `Tabla_Usuario_01_Nombre`, `Tabla_Usuario_01_Email`, `Tabla_Usuario_01_Contrasena`) VALUES (NULL, '$name', '$email', '$pass');";

	if (mysqli_query($conn, $query)) {
		/* echo "<body><div class='alert alert-success mt-4' role='alert'><h3>Tu cuenta ha sido creada con éxito.</h3><br>
		<img src=images/tr3.jpg class=img-responsive alt=PHP MySQL logos><br><br>
		<div class='alert alert-success' role='alert'>
  		<h4 class='alert-heading'>Well done!</h4>
  		<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  		<hr>
  		<p class='mb-0'>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
		</div>
		<a class='btn btn-outline-primary' href='profileCreat.html' role='button'>INGRESAR</a></div><body>"; */	//el href va dirigido a profileCreat.html	
		
		$_SESSION['loggedin'] = true;
		$_SESSION['Tabla_Usuario_01_Id'] = mysqli_insert_id($conn);
		$_SESSION['Tabla_Usuario_01_Nombre'] = $_POST['name'];
		$_SESSION['start'] = time();
		$_SESSION['expired'] = $_SESSION['start'] + (1 * 60);
		header('Location: Menu-1.php');
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}	
		
	mysqli_close($conn);
	?>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>