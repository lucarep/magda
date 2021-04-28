<?php

session_start();

?>

<!doctype html>
<html lang="it">

<head>
  <meta charset="utf-8">
  <title> Magda </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
  <link rel="stylesheet" href="animate.css">
  <link href="style.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
</head>

<body id="bodyL" background="pictures\pexels-element-digital-1470171.jpg">
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
            echo "<a class='nav-link' href='lemiepiante.php'>Le mie piante</a>
                  <a class='nav-link' href='file php\logout.inc.php'>Logout</a>";
          } else {
            echo "<a class='nav-link active' aria-current='page' href='login.php'>Accedi</a>
                  <a class='nav-link' href='registrati.php'>Registrati</a>";
          }
          ?>
          <a class="nav-link" href="contattaci.php">Contattaci</a>
          <a class="nav-link" href="about_us.php">About us</a>
        </div>
      </div>
    </div>
  </nav>
  <hr>
  <div class="container-fluid" style="color: #303926;">
    <div class="row" style="text-align: center;">
      <div class="animate__animated animate__fadeInDownBig ">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
          <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
        </svg> <br>
        <h1 class="text-center " style="letter-spacing: 10px;">Accedi</h1>
        <p style="letter-spacing: 5px;"> Inserisci le credenziali qui sotto</p>
        <form id="formLogin" action="file php\login.inc.php" method="post">
          <input id="emailL" name="email" type="email" placeholder="EMAIL" required>
          <br>
          <input id="passwordL" name="password" type="password" placeholder="PASSWORD" required>
          <br>
          <input id="submitL" name="submit" type="submit" value="LOGIN">
          <br>
          <br>
          <?php
          /* stampa controllo errori */
          if (isset($_GET['error'])) {
            if ($_GET['error'] == 'campivuoti') {
              echo "<div class='alert alert-danger' role='alert' 
                      style='max-width: 470px;
                      max-height: 200px;text-align:center; margin: 0 auto'>
                      riempire tutti i campi!
                      </div>";
            } elseif ($_GET['error'] == 'nonregistrato') {
              echo "<div class='alert alert-danger' role='alert' 
                      style='max-width: 470px;
                      max-height: 200px;text-align:center; margin: 0 auto'>
                      devi prima registrarti!
                      </div>";
            } elseif ($_GET['error'] == 'passworderrata') {
              echo "<div class='alert alert-danger' role='alert' 
                      style='max-width: 470px;
                      max-height: 200px;text-align:center; margin: 0 auto'>
                      password errata!
                      </div>";
            }
          }
          ?>
        </form>
      </div>
    </div>
  </div>
  <footer>
    <div class="text-center p-3 fixed-bottom" style="background-color:#303926; color: white;">
      © 2021 Proudly made in Italy:
      <a class="text-light" href="index.html">Magda</a>
    </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
<script type="module" defer src="JS\kursor.js"></script>

</html>