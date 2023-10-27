<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>System ERP - zadanie dodatkowe</title>

	</head>
	
	<header>
		<h1>Witamy na naszej stronie!</h1>
	</header>
	
	<body>

		<main id="rejestracja">
			<p><b>Rejestracja</b></p>
			<div id="register">
				<form action="register.php" method="POST" id="rejestracja">
					<label for="login"><b>Login:</b></label><br><br>
					<input type="text" id="login" name="login" placeholder="Login"><br><br><br><br>
					
					<label for="passwd"><b>Hasło:</b></label><br><br>
					<input type="password" id="passwd" name="passwd" placeholder="Hasło"><br>
					
					<input type="checkbox" id="pokaz_haslo">Pokaż hasło
				</form>

				<script type="text/javascript" src="skrypt_haslo.js"></script>

				
				<div id="przyciski_login">
					<a href="login.php">Logowanie</a>
					<button type="submit" form="rejestracja" value="submit">Utwórz konto</button>
				</div>
			</div>

		</main>
	</body>
	
	<footer>
		
	</footer>
</html>