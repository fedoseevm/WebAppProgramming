function oblicz_przyprostokatnej()
{
    let przeciwprostokatna = +prompt("Podaj długość przeciwprostokątnej:","");
    let przyprostokatna = +prompt("Podaj dugość jednej przyprostokątnej:","");
    if (isNaN(przeciwprostokatna) || isNaN(przyprostokatna)) {
        alert("Podane dane nie są liczbami");
    }
    else {
        if (przeciwprostokatna <= przyprostokatna) {
            alert("Przeciwprostokątna powinna być większa od przyprostokątnej!");
        }
        else {
            alert("Długość drugiej przyprostokątnej = " + Math.round(Math.sqrt(Math.pow(przeciwprostokatna, 2) - Math.pow(przyprostokatna, 2)) * 100) / 100);
        }
    }
}

function oblicz_przeciwprostokatnej() {
    let przyprostokatna1 = +prompt("Podaj długość pierwszej przyprostokątnej:","");
    let przyprostokatna2 = +prompt("Podaj dugość drugiej przyprostokątnej:","");
    if (isNaN(przyprostokatna1) || isNaN(przyprostokatna2)) {
        alert("Podane dane nie są liczbami");
    }
    else {
        alert("Długość drugiej przyprostokątnej = " + Math.round(Math.sqrt(Math.pow(przyprostokatna1, 2) + Math.pow(przyprostokatna2, 2)) * 100) / 100);
    }
}