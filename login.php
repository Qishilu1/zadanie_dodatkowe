<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>System ERP - zadanie dodatkowe</title>
		<script type="text/javascript" src="skrypt_haslo.js" async></script>
<!--	<script type="text/javascript" src="wypisanie_login.js" async></script> -->
	</head>
	
	<header>
		<h1>Witamy na naszej stronie!</h1>
	</header>
	
	<body>

		<main id="logowanie">
			<p><b>Logowanie</b></p>
			<div id="login">
				<form action="login_skrypt.php" method="POST" id="logowanie_formularz" name="logowanie">
					<label for="login"><b>Login:</b></label><br><br>
					<input type="text" id="login" name="login" placeholder="Login"><br><br><br><br>
					
					<label for="passwd"><b>Hasło:</b></label><br><br>
					<input type="password" id="passwd" name="passwd" placeholder="Hasło"><br><br>
					<input type="checkbox" id="pokaz_haslo">Pokaż hasło

					<div id="przyciski_login">
					<a href="register.php" id="przycisk_rejestracja_odnosnik">Zarejestruj się</a>
					<button type="submit" form="logowanie_formularz" value="Zaloguj się">Zaloguj się</button>
					</div>
				</form>

		<!--	<div id="wypisanie"></div>	-->
				
			</div>

		</main>
	</body>
	
	<footer>
		
	</footer>
</html>