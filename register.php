<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>System ERP - zadanie dodatkowe</title>
		<script type="text/javascript" src="skrypt_haslo.js" async></script>
		<script type="text/javascript" src="wypisanie_rejestracja.js" async></script>
	</head>
	
	<header>
		<h1>Witamy na naszej stronie!</h1>
	</header>
	
	<body>

		<main id="rejestracja">
			<p><b>Rejestracja</b></p>
			<div id="register">
				<form action="register_skrypt.php" method="POST" id="rejestracja_formularz">
					<label for="login"><b>Login:</b></label><br><br>
					<input type="text" id="login" name="login" placeholder="Login" required><br><br><br><br>
					
					<label for="passwd"><b>Hasło:</b></label><br><br>
					<input type="password" id="passwd" name="passwd" placeholder="Hasło" required><br><br>
					<input type="checkbox" id="pokaz_haslo">Pokaż hasło
					
					<div id="przyciski_login">
					<a href="login.php">Logowanie</a>
					<button type="submit" form="rejestracja_formularz" value="submit">Utwórz konto</button>
				</div>

				
				</form>

				<div id="wypisanie"></div>

			</div>

		</main>
	</body>
	
	<footer>
		
	</footer>
</html>