<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dbhost = "localhost";
        $dbname = "erpdatabase";
        $dbuser = "root";
        $dbpass = "";

        $database = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (mysqli_connect_errno()) {
            echo "Błąd połączenia z bazą danych.";
            exit();
        }

        $login = mysqli_real_escape_string($database, $_POST['login']);
        $password = mysqli_real_escape_string($database, $_POST['passwd']);

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sprawdzenie_konta = "SELECT * FROM users WHERE login='$login'";
        $wynik_sprawdzenia = mysqli_query($database, $sprawdzenie_konta);

        if (!$wynik_sprawdzenia) {
            echo "Błąd zapytania.";
        } else {
            if (mysqli_num_rows($wynik_sprawdzenia) > 0) {
                echo "Użytkownik o podanej nazwie już istnieje.";
            } else {
                $dodanie_konta = "INSERT INTO users (login, password) VALUES ('$login', '$hashed_password')";
                
                $wynik_dodania = mysqli_query($database, $dodanie_konta);

                if ($wynik_dodania) {
                    echo "Rejestracja zakończona sukcesem. Możesz się teraz zalogować.";
                } else {
                    echo "Błąd rejestracji.";
                }
            }
        }

        mysqli_close($database);
    }
?>
