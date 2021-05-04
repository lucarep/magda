<?php

  session_start();

?>

<!doctype html>
<html lang="it">

<head>
  <meta charset="utf-8">
  <title> Magda </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
  <link href="style.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
</head>

<body>
  <!-- LOADING SCREEN-->
  <div class="intro" style="text-align: center;">
    <h1 class="logo-header">
      <svg class="logo" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
        class="bi bi-asterisk" viewBox="0 0 16 16">
        <path
          d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
      </svg>
      <br>
      <span class="logo">Mag</span>
      <span class="logo">da.</span>
    </h1>
    <script src="JS\intro.js"></script>
  </div>
  <!-- LANDING PAGE-->
  <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Magda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <?php
                    if (isset($_SESSION["utentiID"])) {
                        echo "<a class='nav-link' href='lemiepiante.php'>Le mie piante</a>
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
  <div class="container-fluid mx-0 my-3" style="background-color: #faf3e0; color: #303926;">
    <div class="row">
      <div class="col-lg">
        <h1 class="text-left" style="background: linear-gradient(to right, #134E5E 0%, #71B280 100%);-webkit-background-clip: text;
                -webkit-text-fill-color: transparent; font-size: clamp(1rem, 2vw + 3rem, 6rem); ">Ti <br> presentiamo
          <br>
          Magda
        </h1>
        <h4 class="text-left" style="size: 80px;">La webapp che aiuta a prenderti cura <br> delle tue piante.</h4>
        <br>
        <a class="btn btn-xxl btn-primary mb-4" role="button" style="font-size: 30px; border-radius: 25px;"
          href="registrati.php">Registrati subito</a>
      </div>
      <div class="col-sm">
        <img src="pictures/pexels-daria-shevtsova-930004.jpg" class="img-responsive Img">
      </div>
    </div>
  </div>
  <hr>
  <div class="container-fluid my-3" style="background-color: #faf3e0; color: #303926">
    <div class="row">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-asterisk"
        viewBox="0 0 16 16">
        <path
          d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
      </svg>
      <h3 class="text-center"> Rendendolo meravigliosamente semplice</h3>
    </div>
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="pictures/pexels-cottonbro-4065890.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Aggiungi le tue piante</h5>
            <p class="card-text">Anche se non sei nato con il pollice verde, puoi contare su un ampia varietà di piante
              accessibili dal nostro database</p>

          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="pictures/pexels-karolina-grabowska-4397906.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Controlla quando annaffiarle</h5>
            <p class="card-text">Una volta aggiunte controlla periodicamente la scadenza suggerita per innaffiarle</p>

          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="pictures/pexels-cottonbro-4503817.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Fatto</h5>
            <p class="card-text">Da adesso in poi non correrai più il rischio di scordarti di dedicare il giusto tempo
              alle tue amate piante</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container-fluid mx-0" style="background-color: #faf3e0; color: #303926;">
    <div class="row">
      <div class="col-sm">
        <img src="pictures/pexels-valentin-antonucci-1275393.jpg" class="img-responsive Img">
      </div>
      <div class="col-sm">
        <h3 class="text-left"><em>"Quello che facciamo <br> è soltanto una goccia nell'oceano. <br>
            Ma se non ci fosse quella goccia <br> all'oceano mancherebbe."</em></h3>
        <p style="font-size: calc(15px + 0.2rem)">L'iperidratazione non solo danneggia le tue piante <br>
          ma spreca anche molta acqua. <br>
          In media l'uso dell'acqua all'aperto rappresenta <br>
          quasi un terzo dell'acqua usata in casa, <br>
          andando ad aumentare nelle regioni più calde, <br>
          si stima inoltre che circa il 50% di quest'acqua venga sprecata <br>
          a causa dell'irrigazione eccessiva. <br>
          Per questo ci impegnamo ad offirti <br>
          una giusta cadenza per farlo.

        </p>
      </div>
    </div>
  </div>
  <hr>
  <!--curiosità-->
  <div class="container my-3" style="background-color: #faf3e0; color: #303926">
    <div class="row">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-asterisk"
        viewBox="0 0 16 16">
        <path
          d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
      </svg>
      <h3 class="text-center"> Alcune curiosità che forse non conoscevi</h3>
    </div>
    <div class="row">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button style="background-color: #303926;" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button style="background-color: #303926;" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button style="background-color: #303926;" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button style="background-color: #303926;" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button style="background-color: #303926;" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pictures/pexels-pixabay-66896.jpg" class="d-block w-100" style="width:95px;height:500px;">
            <div class="card-body" style="background-color: #C9C0B9 ">
              <h3>Tappeti di fiori</h3>
              <p>Da metà marzo a metà maggio una parte dell'Olanda si trasforma in un immenso tappeto di fiori.<br>
                Si inizia a marzo, con lo sbocciare dei crocus, seguiti dai narcisi e dai giacinti.<br>
                Infine compaiono i meravigliosi colori dei tulipani, che fioriscono da metà aprile<br>
                circa fino alla prima settimana di maggio</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pictures/pexels-ella-wei-6601422.jpg" class="d-block w-100" style="width:95px;height:500px ">
            <div class="card-body" style="background-color: #C9C0B9
                    ">
              <h3>Piante anti-zanzare</h3>
              <p>Le piante antizanzare sono un ottimo repellente naturale per tenere lontane<br>
                le zanzare dal vostro balcone e dalla vostra casa.<br>
                Ne esistono diverse e con caratteristiche che le rendono più o meno adatte a diversi ambienti.<br>
                Alcune sono: Gerani, Lavanda, Citronella e Calendula.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pictures/pexels-cottonbro-5103048.jpg" class="d-block w-100" style="width:95px;height:500px">
            <div class="card-body" style="background-color: #C9C0B9">
              <h3>Le piante nel deserto</h3>
              <p>Il deserto è un posto difficile per essere una pianta a causa dell'aria secca e calda.<br>
                Per trasportare i nutrienti dalle loro radici, le piante fanno in modo che l'acqua dalle<br>
                foglie evapori in un processo chiamato traspirazione. Ma nel deserto, molte piante<br>
                si sono adattate per risparmiare acqua.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pictures/pexels-karolina-grabowska-4041392.jpg" class="d-block w-100"
              style="width:95px;height:500px">
            <div class="card-body" style="background-color: #C9C0B9;
                    ">
              <h3>Piante medicinali</h3>
              <p>Le proprietà terapeutiche delle piante sono parte della memoria storica di tante culture
                tradizionali.<br>
                I rimedi a base di erbe sono da sempre utilizzati per curare malattie e disturbi.<br>
                Ancora oggi, la natura è fonte di ispirazione per nuove medicine.<br>
                Le più comuni sono: Arnica, Eucalipto, Goji e Melissa.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pictures/pexels-lexie-blessing-4173853.jpg" class="d-block w-100" style="width:95px;height:500px">
            <div class="card-body" style="background-color: #C9C0B9">
              <h3>Concimi naturali per le tue piante</h3>
              <p>Le piante richiedono la giusta dose di fertilizzanti. Questi sono nutrienti fondamentali<br>
                per garantirne la fioritura e la durata nel tempo. Il terreno, infatti, deve essere<br>
                sempre fertile per fornire le sostanze di cui la pianta ha bisogno per svilupparsi.<br>
                Si possono realizzare ottimi concimi usando semplici ingredienti: Bucce di banana, gusci d’uovo e fondi
                di caffè.
              </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <hr>
  <div class="container-fluid mx-0" style="background-color: #faf3e0; color: #303926;">
    <div class="row">
      <div class="col-sm" style="text-align: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-asterisk"
          viewBox="0 0 16 16">
          <path
            d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
          <h1>Carattersitiche principali</h1>
        </svg>

        <ul style="text-align: left;">
          <li> aggiungi quante piante vuoi </li>
          <li> dai un nickname alle tue piante </li>
          <li> aggiungi una foto personalizzata </li>
          <li> schedule dinamico in base alle stagioni </li>
          <li> e tanto altro ancora </li>
        </ul>
      </div>
      <div class="col-sm">
        <img src="pictures/kaufmann-mercantile-a7Woj8W6J0s-unsplash.jpg" class="img-responsive Img"
          alt="Responsive image" style="margin-bottom: 20px; max-width: 1800px; max-height: 800px;">
      </div>
    </div>
  </div>
  <!--random quote-->
  <hr>
  <div class="container-fluid my-3" style="background-color: #faf3e0;
  color: #303926">
    <div class="row">
      <div id="quote">
        <div id="output" style="font-size: clamp(1rem, 1vw + 1rem, 3rem);"><br><br></div>
        <button class="btn btn-xxl btn-primary mb-4" id="quoteButton" style="font-size: 25px">Scopri una frase</button>
      </div>
    </div>
    <script src="JS\quote.js"></script>
  </div>
  <footer class="text-center" style="background-color: #C9C0B9;">
    <div class="container p-4 pb-0" style="background-color:#C9C0B9; color: #303926;">
      <section class="">
        <form action="">
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
              <p class="pt-2">
                <strong>Registrati alla newsletter</strong>
              </p>
            </div>
            <div class="col-md-5 col-12">
              <div class="form-outline mb-4">
                <input type="email" id="form5Example2" class="form-control" />
                <label class="form-label" for="form5Example2">Indirizzo Email</label>
              </div>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-4">
                Registrati
              </button>
            </div>
          </div>
        </form>
      </section>
    </div>
    <div class="text-center p-3" style="background-color:#303926; color: white;">
      © 2021 Proudly made in Italy:
      <a class="text-light" href="index.php">Magda</a>
    </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
<script type="module" defer src="JS\kursor.js"></script>

</html>