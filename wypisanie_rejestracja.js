
document.getElementById("rejestracja_formularz").addEventListener("submit", function(event) {
        event.preventDefault(); 

    
    fetch("register_skrypt.php", {
        method: "POST",
        body: new FormData(this)
        })
    .then(response => response.text())
    .then(data => {

        document.getElementById("wypisanie").innerHTML = "<strong>" + data + "</strong>";
    })
    .catch(error => console.error("Błąd:", error));
});
