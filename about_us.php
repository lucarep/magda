<?php

session_start();

?>

<html lang="it">

<head>
    <meta charset="utf-8">
    <title> Magda </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
</head>

<body id="bodyAU">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Magda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Home</a>
                    <?php
                    if (isset($_SESSION["utentiID"])) {
                        echo "<a class='nav-link' href='lemiepiante.php'>Le mie piante</a>
                        <a class='nav-link' href='obiettivi.php'>Obiettivi</a>
                  <a class='nav-link' href='file php\logout.inc.php'>Logout</a>";
                    } else {
                        echo "<a class='nav-link' href='login.php'>Accedi</a>
                  <a class='nav-link' href='registrati.php'>Registrati</a>";
                    }
                    ?>
                    <a class="nav-link" href="contattaci.php">Contattaci</a>
                    <a class="nav-link active" aria-current="page" href="about_us.php">About us</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="sectionAU">
        <img class="sectionAU" src="pictures/sky.jpg" id="background">
        <img class="sectionAU" src="pictures/mountain.png" id="mountain">
        <img class="sectionAU" src="pictures/forest.png" id="forest">
        <h1 id="textAU" style="letter-spacing: 5px;"> SCOPRI DI PIU' SU DI NOI </h1>
    </section>
    <script>
        let background = document.getElementById("background");
        let mountain = document.getElementById("mountain");
        let forest = document.getElementById("forest");
        let text = document.getElementById("text");

        window.addEventListener('scroll', function() {
            var value = window.scrollY;

            background.style.top = value * 0.5 + 'px';
            mountain.style.top = -value * 0.10 + 'px';
            forest.style.top = value * 0.10 + 'px';
            text.style.top = -value * 0.25 + 'px';
        })
    </script>
    <div class="container-fluid mx-0 my-3" style="color: #303926; text-align: center;">
        <div class="row">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
            </svg>
            <h1>Chi Siamo</h1>
            <p style="font-size: 25px;">Dietro lo sviluppo di Magda ci sono due studenti universitari: Chiara Massari e Luca
                Repechini.
                Entrambi frequentiamo la facolt?? di ingegneria informatica alla Sapienza, l'idea comune che ci ha condotto
                allo sviluppo di questa web-app
                ?? stata quella di fare qualcosa che non tenesse solo conto dell'utente, ma anche del mondo che lo circonda,
                dalle piante dentro casa fino all'intero pianeta.
                Annaffiare le piante pu?? sembrarci un'azione di poco conto, ma teniamo sempre a mente che anche
                un battito d'ali di una farfalla pu?? provocare un uragano.
            </p>
        </div>

    </div>
    <hr>
    <div class="container-fluid mx-0 my-3" style="color: #303926; text-align: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
        </svg>
        <h1>Perch?? il Nome Magda</h1>
        <p class="pAU"> L'idea del nome nasce dal videogioco preferito di uno di noi: </p><br>
        <img src="pictures/The_Legend_of_Zelda_Breath_of_the_Wild_logo.png" id="zelda_logo">
        <hr>

        <div class="row" style="margin-top: 40px;">
            <div class="col-sm">
                <h2>Nel gioco sono presenti moltissimi puzzle detti sacrari</h2>
                <p class="pAU"> In particolare uno ha catturato la nostra attenzione poich?? circondato da moltissimi
                    fiori e piante</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" style="stroke:#303926; stroke-width:0.8px" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                </svg>
            </div>
            <div class="col-sm">
                <img src="pictures/sacrario-removebg-preview.png" class="img-fluid rounded">
            </div>

        </div>
        <hr>
        <div class="row" style="margin-top: 40px;">
            <div class="col-sm">
                <img src="pictures/Magda-removebg-preview.png" class="img-fluid rounded">
            </div>
            <div class="col-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" style="stroke:#303926; stroke-width:0.8px; margin-top:20px" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" />
                </svg>
                <h2>Qui entra in gioco lei, Magda</h2>
                <p class="pAU">Link infatti(il personaggio del gioco), qualora venisse colto a calpestare la vegetazione
                    che circonda il sacrario, verrebbe sgridato e rimproverato proprio da Magda.
                    per questo motivo abbiamo deciso di dedicargli il nome del sito
                </p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid mx-0 my-3" style="color: #303926; text-align: center;">

        <h3>Se hai altre curiosit?? non esitare a contattarci!</h3>
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" style="stroke:#303926; stroke-width:1.5px " fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
        </svg> <br>
        <a class="btn btn-xxl btn-primary mb-4" role="button" style="font-size: 30px; border-radius: 25px;" href="contattaci.php">Contattaci</a>

    </div>
    <div class="text-center p-3" style="background-color:#303926; color: white;">
        ?? 2021 Proudly made in Italy:
        <a class="text-light" href="index.php">Magda</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
<script type="module" defer src="JS\kursor.js"></script>

</html>