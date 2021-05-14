<?php

session_start();

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "dbMagda";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connessione non riuscita: " . mysqli_connect_error());
}

// CALCOLO TOTALE OBIETTIVI
$query1 = "SELECT COUNT(*) AS tot FROM obiettivi";
$result = mysqli_query($conn, $query1);
$process = $result = mysqli_fetch_array($result);
$tot = $process[0];

// INSERISCO OBIETTIVI SE NON PRESENTI 
$query2 = "SELECT COUNT(*) as presente FROM haobiettivi  WHERE utente=$_SESSION[utentiID];";
$result2 = mysqli_query($conn, $query2);
$process2 = $result2 = mysqli_fetch_array($result2);
$presente = $process2[0];
if ($presente == 0) {
    //echo("non presente");
    for ($i = 0; $i <= $tot; $i++) {
        $query2 = "INSERT INTO haobiettivi(utente,obiettivoID) VALUES (?,?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $query2)) {
            header("location: ../obiettivi.php?error=errore");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ii", $_SESSION["utentiID"], $i);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}

// AGGIORNO NUMERO PIANTE 
$query3 = "UPDATE haobiettivi
           SET numeropiante = $_SESSION[numpiante]
           WHERE utente = $_SESSION[utentiID]";
$result3 = mysqli_query($conn, $query3);

// CALCOLO OBIETTIVI COMPLETATI

$query4 = "SELECT COUNT(*) as completati FROM haobiettivi as ho WHERE ho.utente = $_SESSION[utentiID] AND ho.sbloccato = 1;";
$result4 = mysqli_query($conn, $query4);
$process = $result4 = mysqli_fetch_array($result4);
$completati = $process[0];


?>

<head>
    <meta charset="utf-8">
    <title> Magda </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- IL CODICE PHP RISOLVE PROBLEMI DI CACHE -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>

<body>
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
                        <a class='nav-link active' aria-current='page' href='obiettivi.php'>Obiettivi</a>
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
    <div class="container-fluid bgObiettivi" style="text-align: center;">
        <style>
            .greetings {
                font-size: 50px;
                text-align: center;
                padding-top: 10px;
                letter-spacing: 3px;
                color: #303926;
                font-weight: 1000;
            }
        </style>
        <br>
        <?php
        echo
        "
            <svg xmlns='http://www.w3.org/2000/svg' width='48' height='48' fill='#303926' class='bi bi-asterisk'
                viewBox='0 0 16 16'>
                <path
                d='M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z' />
                </svg>
            <h1 class='greetings'>Ecco i tuoi obiettivi  <br>" . $_SESSION['nome'] . "</h1>";
        ?>

    </div>
    <div class="container-fluid">
        <div class="row" style="margin-top: 20px; margin: 20px;">

            <?php
            echo "<h4 style='color: #303926;'> Hai raggiunto: " . $completati . "/" . $tot . " obiettivi 🏆</h4>";
            ?>
        </div>
    </div>
    <hr>
    <footer>
        <div class="text-center p-3 fixed-bottom" style="background-color:#303926; color: white;">
            © 2021 Proudly made in Italy:
            <a class="text-light" href="index.php">Magda</a>
        </div>
    </footer>
</body>