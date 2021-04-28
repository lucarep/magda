<?php

session_start();

?>

<!DOCTYPE html>
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

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Magda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Home</a>
                    <?php
                    if (isset($_SESSION["utentiID"])) {
                        echo "<a class='nav-link active'aria-current='page' href='lemiepiante.php'>Le mie piante</a>
                  <a class='nav-link' href='file php\logout.inc.php'>Logout</a>";
                    } else {
                        echo "<a class='nav-link' href='login.php'>Accedi</a>
                  <a class='nav-link' href='registrati.php'>Registrati</a>";
                    }
                    ?>
                    <a class="nav-link" href="contattaci.php">Contattaci</a>
                    <a class="nav-link" href="about_us.php">About us</a>
                </div>
            </div>
        </div>
    </nav>
    <?php
    echo "<h3 style='background: linear-gradient(to right, #134E5E 0%, #71B280 100%);-webkit-background-clip: text;
    -webkit-text-fill-color: transparent; font-size: clamp(1rem, 2vw + 3rem, 6rem); text-align:left;'><em>
    Bentornata/o $_SESSION[nome] !</em></h3>";
    ?>
    <div class="text-center p-3 fixed-bottom" style="background-color:#303926; color: white;">
        © 2021 Proudly made in Italy:
        <a class="text-light" href="index.html">Magda</a>
    </div>

</body>

</html>