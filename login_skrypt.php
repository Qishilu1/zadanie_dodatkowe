<?php
session_start();

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

    $get_user_query = "SELECT * FROM users WHERE login='$login'";
    $result = mysqli_query($database, $get_user_query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row["password"];
        $account_type = $row["account_type"];

        if (password_verify($password, $hashed_password)) {
            echo "Zalogowano pomyślnie.";

            if ($account_type == 0) {
                header("Location: przegladanie.php");
                exit();
            } elseif ($account_type == 1) {
                header("Location: panel_zarzadzania.php");
                exit();
            } else {
                echo "Nieprawidłowy typ konta.";
            }
        } else {
            echo "Błędne dane logowania.";
        }
    } else {
        echo "Użytkownik nie istnieje.";
    }

    mysqli_close($database);
}
?>
