<!DOCTYPE html>
<html>
<head>
	<title>mail form</title>
</head>
<body>
	<form method="post">
		<input type="text" placeholder="name"name="name" required="">
		<input type="email" placeholder="email" name="email" required="">
		<input type="text" placeholder="asunto"name="asunto" required="">
		<textarea placeholder="mensaje" name="msg"></textarea>
		<input type="submit" name="enviar">
	</form>
	<?php
	incluide("correo.php")
	?>
</body>
</html>