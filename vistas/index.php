<?php

?>

<!DOCTYPE HTML>
<html>
<img align="center" src="assets/img/cabecera.png" width="1350" height="300" />
<head>
		<title>Inicio de Sesión</title>
		<link rel="stylesheet" href="css/style_login.css">
</head>
<body>
<form action="" method="POST">
  	<div class="container">
      	<h1 align="center">Inicio de Sesión</h1>
			<img src="assets/img/Login icono.png" width="20" height="20"/>
    		<label for="username"><b>Usuario <span style="color:red">*</span></b></label>
    		<input type="text" placeholder="Username" name="DNI" required>
			<img src="assets/img/contra icon.png" width="20" height="20"/>
    		<label for="password"><b>Contraseña <span style="color:red">*</span></b></label>
    		<input type="password" placeholder="Password" name="Contraseña" required>

    		<button type="submit">Login</button>
  	</div>



</form>
</body>
</html>
