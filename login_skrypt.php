<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dbhost = "localhost";
        $dbname = "erpdatabase";
        $dbuser = "root";
        $dbpass = "";

        $database = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (mysqli_connect_errno()) {
            echo "Błąd połączenia: " . mysqli_connect_errno();
            exit();
        }

        $login = $_POST['login'];
        $password = $_POST['passwd'];

        $wyszukanie_login = "SELECT * FROM users WHERE login='$login'";
        $wynik = mysqli_query($database, $wyszukanie_login);

        if (mysqli_num_rows($wynik) > 0) {
            $row = mysqli_fetch_assoc($wynik);
            $hashed_password = $row["password"];
            $typ_konta = $row["account_type"];

            if (password_verify($password, $hashed_password)) {
                if ($typ_konta == 0) {
                    header("Location: przegladanie.php");
                    exit();
                } elseif ($typ_konta == 1) {
                    header("Location: panel_zarzadzania.php");
                    exit();
                } else {
                    echo "Nieprawidłowy typ konta.";
                }
            } else {
                echo "Błędne dane logowania lub użytkownik nie istnieje.";
            }
        } else {
            echo "Błędne dane logowania lub użytkownik nie istnieje.";
        }

        mysqli_close($database);
    }
?>
