<!-- 
Design register pure CSS
Developed by @mrjopino
-->
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<p class="texto">Register</p>
<div class="Register">
<form method="post" action="register_login.php">
<span class="fontawesome-user"></span><input type="text" required placeholder="Username" autocomplete="off"> 
<span class="fontawesome-envelope-alt"></span><input type="text" id="email" required placeholder="Email" autocomplete="off">
<span class="fontawesome-lock"></span><input type="password" name="password" id="password" required placeholder="Contraseña" autocomplete="off"> 
<input type="submit" value="Registrar" title="Registra tu cuenta">
</form>
</div>
</html> 