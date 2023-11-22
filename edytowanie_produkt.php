<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>System ERP - edytowanie produktów</title>
	</head>
	
	<header>
		<h1>Dodawanie</h1>
	</header>
	
	<body>

    <main id="przyciski">
        <a href="panel_zarzadzania.php">Strona Główna</a>
        <a href="przegladanie.php">Przeglądanie</a>
    </main>

	<aside id="produkty_lewo">
		<h2>Aktualne produkty w bazie danych:</h2><br>
		
		<?php
			$dbhost = "localhost";
			$dbname = "erpdatabase";
			$dbuser = "root";
			$dbpass = "";
	
			$database = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
			if (mysqli_connect_errno()) {
				echo "Błąd połączenia: " . mysqli_connect_errno();
				exit();
			}

			$zapytanie_produkty = "SELECT NazwaProduktu, Opis, Cena, Dostępność FROM produkty";
			$wynik_produkty = mysqli_query($database, $zapytanie_produkty);
			
			if(mysqli_num_rows($wynik_produkty) > 0){			

				echo "<ol>";				

				while ($row_produkt = mysqli_fetch_assoc($wynik_produkty)){
					echo "<li>";
					echo "Nazwa: " . $row_produkt["NazwaProduktu"] . "<br> Opis: " . $row_produkt["Opis"] . "<br> Cena: " . $row_produkt["Cena"] . "<br> Dostępność: " . $row_produkt["Dostępność"];
					echo "</li>";
				}
				echo "</ol>";
				echo "==================================================";
			}
			else{
				echo "Nie ma żadnych produktów w bazie danych.";
			}

			mysqli_close($database);
		?>
	</aside>

	<section id="produkty_prawo">
		<select id="wybor_produkty">
			<option value="dodawanie_produkt">Dodaj produkt</option>
			<option value="edytowanie_produkt">Edytuj produkt</option>
			<option value="usuwanie_produkt">Usuń produkt</option>
		</select>
	</section>

	<div id="dodawanie_produkt1" class="">

	</div>

	<div id="edytowanie_produkt1" class="">

	</div>

	<div id="usuwanie_produkt1" class="">

	</div>
	</body>
	
	<footer>
		
	</footer>
</html>