<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		if(!isset($_SESSION["username"])){
			header('Location: ./pe_login.php');
		}
	?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Pedidos</title>
	<style>body{background:#bdbddb;}main{width:fit-content;margin:0 auto;}</style>
</head>
<body>
	<center>
		<h1>WELCOME TO WEB PEDIDOS</h1>
		<hr> <br>
	</center>
	<main>
		<h1>Hola <?php if(isset($_SESSION["username"])){echo $_SESSION["username"];} ?></h1>
		<form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="post">
		</form>
	</main>
	<?php
	?>
</body>
</html>

<?php
// GOTTA MAKE VALIDATE FUNCTIONS FOR LOGIN IN A NEW FILE
// userExists($user): boolean  => comprueba que user esta en base de datos.
// correctPassword($user,$pass): boolean => comprueba que el password es del usuario dado.
?>