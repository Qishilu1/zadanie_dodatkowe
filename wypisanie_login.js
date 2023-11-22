document.getElementById("logowanie_formularz").addEventListener("submit", function(event) {
    event.preventDefault(); 

    fetch("login_skrypt.php", {
        method: "POST",
        body: new FormData(this)
    })
    .then(response => response.text())
    .then(data => {
        if (data === "Zalogowano pomyślnie.") {
            let accountType = parseInt(data.split(":")[1]);
            if (accountType === 0) {
                window.location.href = "przegladanie.php"; 
            } else if (accountType === 1) {
                window.open = "panel_zarzadzania.php"; 
            } else {
                document.getElementById("wypisanie").innerHTML = "<strong>Nieprawidłowy typ konta.</strong>";
            }
        } else {
            document.getElementById("wypisanie").innerHTML = "<strong>" + data + "</strong>";
        }
    })
    .catch(error => console.error("Błąd:", error));
});
