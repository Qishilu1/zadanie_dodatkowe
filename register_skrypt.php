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

    $check_query = "SELECT * FROM users WHERE login='$login'";
    $check_result = mysqli_query($database, $check_query);

    if (!$check_result) {
        echo "Błąd zapytania.";
    } else {
        if (mysqli_num_rows($check_result) > 0) {
            echo "Użytkownik o podanej nazwie już istnieje.";
        } else {
            $insert_query = "INSERT INTO users (login, password) VALUES ('$login', '$hashed_password')";
            
            $insert_result = mysqli_query($database, $insert_query);

            if ($insert_result) {
                echo "Rejestracja zakończona sukcesem. Możesz się teraz zalogować.";
            } else {
                echo "Błąd rejestracji.";
            }
        }
    }

    mysqli_close($database);
}
?>
