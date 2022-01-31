<?php

?>

<!DOCTYPE HTML>
<html>
<head>
		<title>Inicio de Sesión</title>
		<link rel="stylesheet" href="css/style_login.css">
</head>
<body>
<form action="" method="POST">
  	<div class="container">
      	<h1>PHP Inicio de Sesión</h1>

    		<label for="username"><b>Usuario <span style="color:red">*</span></b></label>
    		<input type="text" placeholder="Username" name="DNI" required>

    		<label for="password"><b>Contraseña <span style="color:red">*</span></b></label>
    		<input type="password" placeholder="Password" name="Contraseña" required>

    		<button type="submit">Login</button>
  	</div>

  	<!--<div class="container" style="background-color:#f1f1f1">
    		<button type="button" onclick="window.location.href='index.php'" class="cancelbtn">Cancel</button>
    		<span class="psw"><a href="#">Forgot password?</a></span>
  	</div>-->

</form>
</body>
</html>
