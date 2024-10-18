function Resetuj() {
    document.getElementById("imie").value = "";
    document.getElementById("nazwisko").value = "";
    document.getElementById("email").value = "";
}

function Wyslij() {
    let imie = document.getElementById("imie").value;
    let nazwisko = document.getElementById("nazwisko").value;
    let email = document.getElementById("email").value;
    let czyZapoznany = document.getElementById("regulamin").checked;
}
    if (!czyZapoznany) {
        document.getElementById("komunikat").innerHTML = "Musisz zapoznać się z regulaminem";
    }