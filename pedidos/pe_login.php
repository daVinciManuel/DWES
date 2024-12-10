<?php session_start(); ?>
<!DOCTYPE html>
<?php
require "./validate.php";
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	if(isset($_SESSION["username"]) && isset($_SESSION["password"])){ 
		header("Location: ./pe_inicio.php");
	}
	?>
	<title>Web Pedidos</title>
	<style>body{background:#ababab;}main{width:fit-content;margin:0 auto;}</style>
</head>
<body>
	<center>
		<h1>WELCOME TO WEB PEDIDOS</h1>
		<hr> <br>
	</center>
	<main>
		<form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="post">
			<h3>Login</h3>
			<label for="username">Username:</label>
			<input type="text" name="username">
			<br>
			<label for="password">Password:</label>
			<input type="text" name="password">
			<br>
			<input type="submit" value="Enviar">
			<br>
		</form>
	</main>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$username = trim($_POST["username"]);
			$password = trim($_POST["password"]);
			if(verifyLogin($username,$password)){
				
				header('Location: ./pe_inicio.php');
			}
		}

	?>
</body>
</html>