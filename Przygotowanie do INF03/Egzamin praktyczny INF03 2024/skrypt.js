function Resetuj() {
    document.getElementById("imie").value = "";
    document.getElementById("nazwisko").value = "";
    document.getElementById("email").value = "";
    document.getElementById("zgloszenie").value = "";
}

function Wyslij() {
    let imie = document.getElementById("imie").value;
    let nazwisko = document.getElementById("nazwisko").value;
    let email = document.getElementById("email").value;
    let zgloszenie = document.getElementById("zgloszenie").value;
    let czyZapoznany = document.getElementById("regulamin").checked;

    const komunikat = document.getElementById("komunikat");
    if (!czyZapoznany) {
        komunikat.style.color = "red";
        komunikat.innerHTML = "Musisz zapoznać się z regulaminem";
    }
    else {
        komunikat.style.color = "navy";
        komunikat.innerHTML = imie.toUpperCase() + " " + nazwisko.toUpperCase() + "<br>Treść Twojej sprawy: " + zgloszenie;
    }
}