//                                             ---FUNKCJE---
function test()
{
    alert("Witaj");
    // cialo funkci
}

function test2()
{
    let number1 = +prompt("Podaj pierwszą liczbę:");
    let number2 = +prompt("Podaj drugą liczbę:");
    let wynik = (number1 * number2)? number1 * number2: number1 * number2; // ????????????????????
    let method = (isNaN(wynik))?
    "Wprowadź tylko liczby":
    "Iloczyn liczb " + number1 + " i " + number2 + " wynosi " + wynik;
    alert(method);
}

//                                      --- MOZLIWOSC WYPISYWANIA TEKSTU ---
document.write("<h1>Tytuł strony</h1> <b>Tekst wyświetlany przez document.write()</b> <br> <img src='cat.jpg' width='500px'> <br>");

//                                          --- SZYFROWANIE ---

// let znak = prompt("Podaj znak: ","");
// alert(znak.charCodeAt(0));

let login = prompt("Podaj login:");
let password = prompt("Podaj hasło:");
let haslo = password.charCodeAt(0);
if (login == "admin" && haslo == 56) {
    document.write("<body bgcolor='#AAFFAA'><h1>zalogowany</h1></body>")
}
else {
    document.write("<body bgcolor='#FF5555'><h1>Nieprawidłowe login lub hasło</h1></body>");
}

//                                          --- SWITCH ---
//                  --- W zaleznosci od podanej wartosci wykonuje rozne polecenia ---
switch(prompt("Podaj imię","")) {
    case "Daniel":
        alert ("Co zrobiłem?");
        break;
    case "Stanisław":
        alert("Matematyka!");
        break;
    case "Roma":
        alert("bomba");
        break;
}