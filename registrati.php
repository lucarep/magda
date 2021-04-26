<!doctype html>
<html lang="it">

<head>
  <meta charset="utf-8">
  <title> Magda </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="animate.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body id="bodyR" background="pictures\scott-webb-C6oPXOatFD8-unsplash.jpg">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Magda</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="index.html">Home</a>
          <a class="nav-link" href="login.php">Accedi</a>
          <a class="nav-link active" aria-current="page" href="registrati.php">Registrati</a>
          <a class="nav-link" href="contattaci.php">Contattaci</a>
          <a class="nav-link" href="about_us.html">About us</a>
        </div>
      </div>
    </div>
  </nav>
  <hr>
  <div class="container-fluid mx-0 my-3" style="color: #303926;">
    <div class="row">
      <div class="col-sm animate__animated animate__fadeInDownBig " style="text-align: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
          <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
        </svg> <br>
        <h1 class="text-center" style="letter-spacing: 10px;">Registrati, <br> è semplice.</h1>
        <form id="formRegistrati">
          <input id="nomeR" type="text" placeholder="NOME" required>
          <br>
          <input id="cognomeR" type="text" placeholder="COGNOME" required>
          <br>
          <input id="emailR" type="email" placeholder="EMAIL" required>
          <br>
          <input id="passwordR" type="password" placeholder="PASSWORD" required>
          <br>
          <input id="submitR" type="submit" value="INVIA!">

        </form>

      </div>
    </div>

    <div class="text-center p-3 fixed-bottom" style="background-color:#303926; color: white;">
      © 2021 Proudly made in Italy
      <a class="text-light" href="index.html">Magda</a>
    </div>
</body>

</html>