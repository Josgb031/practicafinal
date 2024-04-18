<!DOCTYPE html>
<html>
<head>
	<title>Parciales</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Respuestas a parciales de Adrian Alcantara</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Matricula</label>
     	<input type="text" name="uname" placeholder="Ingresar matricula"><br>

     	<label>Contraseña</label>
     	<input type="password" name="password" placeholder="Ingresar contraseña"><br>

     	<button type="submit">Ingresar</button>
          <a href="signup.php" class="ca">Crear cuenta</a>
     </form>
</body>
</html>