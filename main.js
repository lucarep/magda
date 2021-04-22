let quoteButton = document.getElementById('quoteButton');
let output = document.getElementById('output');
let quotes = [ "“Bellezza delle piante − i soli esseri viventi in questo universo che non producono rumore né rifiuti.”",
 "“Le piante e i fiori sono come i nostri progetti: alcuni non si sviluppano, altri crescono quando meno ce lo aspettiamo.”",
 "“Parla alle piante con l'amore che hai dentro, le farai crescere di più.”", "“La felce da bruciare cresce nei campi non coltivati.”",
"“Ogni fiore che sboccia ci ricorda che il mondo non è ancora stanco dei colori.”", "“Le piante conoscono bene i distinti sapori della luce.”"];

// mostra frase anche appena carica la pagina

function showQuote() {
    var number = Math.floor(Math.random() * quotes.length);
    var randomQuote = quotes[number];
    output.innerHTML = randomQuote;
}

window.onload = showQuote();

quoteButton.addEventListener('click', function(){
 var number = Math.floor(Math.random() * quotes.length);
 var randomQuote = quotes[number];
 //console.log(number);
 //console.log(randomQuote);
 output.innerHTML = randomQuote;
})

