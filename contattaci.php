<?php



session_start();



$messaggio_inviato = false;

// controllo se è stata inserita l'email
if (isset($_POST['email']) && $_POST['email'] != '') {

  // controllo se l'email è valida
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $messaggio = $_POST['messaggio'];

    // preparo l'invio della mail

    $to = "magdaltw2021@gmail.com";
    $contenuto = "";
    $contenuto .= "Nuovo messaggio da: " . $nome . "\r\n";
    $contenuto .= "messaggio: " . $messaggio . "\r\n";

   mail($to,$email,$contenuto);

    $messaggio_inviato = true;
  }
}

?>


<!DOCTYPE html>
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

<body id="bodyC">
  <?php
  if ($messaggio_inviato) :
  ?>
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
            <a class="nav-link active" aria-current="page" href="contattaci.php">Contattaci</a>
            <a class="nav-link" href="about_us.php">About us</a>
          </div>
        </div>
      </div>
    </nav>
    <header id="form_desc">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
      </svg> <br>
      Grazie per averci contattato!
    </header>
    <p id="p_form_desc">
      Ti risponderemo al più presto.
    </p>
    <footer>
      <div class="text-center p-3 fixed-bottom" style="background-color:#303926; color: white;">
        © 2021 Proudly made in Italy:
        <a class="text-light" href="index.php">Magda</a>
      </div>
    </footer>
  <?php
  else :
  ?>
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
                  <a class='nav-link' href='file php\logout.inc.php'>Logout</a>";
            } else {
              echo "<a class='nav-link' href='login.php'>Accedi</a>
                  <a class='nav-link' href='registrati.php'>Registrati</a>";
            }
            ?>
            <a class="nav-link active" aria-current="page" href="contattaci.php">Contattaci</a>
            <a class="nav-link" href="about_us.php">About us</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container-fluid animate__animated animate__fadeInDownBig">
      <header id="form_desc">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
          <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
        </svg> <br>
        CONTATTACI
      </header>
      <p id="p_form_desc">
        Hai già fatto tanto per le tue piante e per il pianeta <br> dicci cosa possiamo fare noi ora per te.
      </p>
      <form id="formC" action="contattaci.php" method="POST">
        <input id="nomeC" name="nome" type="text" placeholder="NOME" required>
        <input id="emailC" name="email" type="email" placeholder="EMAIL" required>
        <textarea id="messaggioC" name="messaggio" type="text" placeholder="MESSAGGIO" required></textarea>
        <input id="submitC" type="submit" value="INVIA!">
      </form>
    </div>
    <footer>
      <div class="text-center p-3 fixed-bottom" style="background-color:#303926; color: white;">
        © 2021 Proudly made in Italy:
        <a class="text-light" href="index.php">Magda</a>
      </div>
    </footer>
  <?php
  endif;
  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
<script type="module" defer src="JS\kursor.js"></script>

</html>