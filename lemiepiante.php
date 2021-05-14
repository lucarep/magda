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

/* CALCOLO NUMERO PIANTE */
$sql = "SELECT distinct COUNT(*) as somma FROM lemiepiante AS lmp JOIN utenti AS u ON u.utentiID=lmp.utentiID WHERE lmp.utentiID=$_SESSION[utentiID];";
$result = mysqli_query($conn, $sql);
$process = $result = mysqli_fetch_array($result);
$somma = $process[0];
$_SESSION["numpiante"] = $somma;

/* ELIMNA PIANTA E RICALCOLO TOTALE */
if (isset($_POST["delete"])) {

    $id = $_POST["delete"];
    $query = "DELETE FROM lemiepiante WHERE lemiepiante.pianteID = $id";
    $result = mysqli_query($conn, $query);
    $sql = "SELECT distinct COUNT(*) as somma FROM lemiepiante AS lmp JOIN utenti AS u ON u.utentiID=lmp.utentiID WHERE lmp.utentiID=$_SESSION[utentiID];";
    $result = mysqli_query($conn, $sql);
    $process = $result = mysqli_fetch_array($result);
    $somma = $process[0];
}

?>

<!DOCTYPE html>
<html lang="it">

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
    <div class="loader">
    </div>
    <div class="content">
        <style>
            div.card {
                float: left;
                margin: 23px;
                padding: 0px;
                border: 3px solid #F6EEDF;
                border-radius: 25px;
            }

            .card-img-top {
                object-fit: cover;
                object-position: 50% 30%;
                max-width: 400px;
                max-height: 180px;
                border-bottom: 3px solid #F6EEDF;
                border-top-left-radius: 25px;
                border-top-right-radius: 25px;
            }
        </style>
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
                            echo "<a class='nav-link active'aria-current='page' href='lemiepiante.php'>Le mie piante</a>
                            <a class='nav-link' href='obiettivi.php'>Obiettivi</a>
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



        <div class="container-fluid bgimg" style="text-align: center;">
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
            $hour = date("G");

            if ($hour > 0 && $hour < 24) {
                if ($hour >= 3 && $hour < 12) {
                    echo "
                <svg xmlns='http://www.w3.org/2000/svg' width='36' height='36' fill='#303926' class='bi bi-asterisk'
                viewBox='0 0 16 16'>
                <path
                d='M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z' />
                </svg>
                <h3 class='greetings'>Buongiorno " . $_SESSION['nome'] . "!</h3>";
                } else if ($hour >= 12 && $hour < 17) {
                    echo "
                <svg xmlns='http://www.w3.org/2000/svg' width='36' height='36' fill='#303926' class='bi bi-asterisk'
                viewBox='0 0 16 16'>
                <path
                d='M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z' />
                </svg>
                <h3 class='greetings'>Buon pomeriggio " . $_SESSION['nome'] . "!</h3>";
                } else {
                    echo "
                <svg xmlns='http://www.w3.org/2000/svg' width='48' height='48' fill='#303926' class='bi bi-asterisk'
                viewBox='0 0 16 16'>
                <path
                d='M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z' />
                </svg>
                <h3 class='greetings'>Buonasera " . $_SESSION['nome'] . "!</h3>";
                }
            }

            ?>

        </div>
        <div class="container-fluid">
            <div class="row" style="margin-top: 20px; margin: 20px;">
                <div class="col-lg">
                    <?php
                    echo "<h4 style='color: #303926;'> Hai attualmente: $somma pianta/e 🌱</h4>";
                    ?>
                </div>
                <div class="col-lg">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" style="position:absolute; right:20px; font-size: 25px" data-toggle="modal" data-target="#exampleModal">
                        Aggiungi una pianta +
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Aggiungi una pianta</h5>
                                </div>
                                <div class="modal-body">
                                    <form id="formLMP" action="file php\lemiepiante.inc.php" method="post">
                                        <input id="nicknameLMP" name="nickname" type="text" placeholder="NICKNAME" required>
                                        <br>
                                        <label style="position:absolute; left:0; letter-spacing:4px" for="specieLMP">SPECIE:</label>
                                        <br>
                                        <select class="form-control" name="specie" id="specieLMP" required>
                                            <option>Ciclamino</option>
                                            <option>Erica</option>
                                            <option>Falso papiro</option>
                                            <option>Geranio</option>
                                            <option>Lavanda</option>
                                            <option>Orchidea</option>
                                            <option>Photinia</option>
                                            <option>Rosa</option>
                                            <option>Rosmarino</option>
                                            <option>Salvia</option>
                                            <option>Valeriana rossa</option>
                                            <option>Violetta africana</option>
                                        </select>
                                        <br>
                                        <input id="submitLMP" name="submit" type="submit" value="AGGIUNGI">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" style="border-radius: 25px" data-dismiss="modal">Annulla</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($_GET['error'])) {

                    if ($_GET['error'] == 'nessunerrore') {
                        echo "<div class='alert alert-success alert-dismissable' role='alert' 
                                 style='max-width: 470px;
                                 max-height: 300px;text-align:center; margin: 0 auto'>
                                 <h4 class='alert-heading'>Tutto ok!</h4>
                                 <p> Hai correttamente inserito una nuova pianta. </p>
                                 <a href='#' style='text-decoration:none;color:#303926'class='close' data-dismiss='alert' aria-label='close'>CHIUDI</a>
                                </div>";
                    }
                }
                ?>

                <?php
                if (isset($_POST["annaffiata"])) {

                    $id = $_POST["annaffiata"];
                    $query = "SELECT lemiepiante.inizio, lemiepiante.intervallo FROM lemiepiante WHERE lemiepiante.pianteID = $id";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_row($result);
                    $inizio = $row[0];
                    $intervallo = $row[1];
                    $dataFinale = date('Y-m-d', strtotime($inizio . " + {$intervallo} days"));
                    $data = date("Y-m-d");
                    if ($dataFinale <= $data) {
                        $query2 = "UPDATE lemiepiante SET lemiepiante.inizio = '$data' WHERE lemiepiante.pianteID = $id";
                        $result = mysqli_query($conn, $query2);
                        echo "<div class='alert alert-success alert-dismissable' role='alert' 
                                 style='max-width: 470px;
                                 max-height: 300px;text-align:center; margin: 0 auto'>
                                 <h4 class='alert-heading'>Tutto ok!</h4>
                                 <p> La data è stata aggiornata! </p>
                                 <a href='#' style='text-decoration:none;color:#303926'class='close' data-dismiss='alert' aria-label='close'>CHIUDI</a>
                                </div>";
                        $query3 = "UPDATE haobiettivi
                                SET hainnaffiato = hainnaffiato + 1
                                WHERE utente = $_SESSION[utentiID];";
                        $result3 = mysqli_query($conn, $query3);
                    } else {
                        echo "<div class='alert alert-danger alert-dismissable' role='alert' 
                                 style='max-width: 470px;
                                 max-height: 300px;text-align:center; margin: 0 auto'>
                                 <h4 class='alert-heading'>Attenzione!</h4>
                                 <p> Stai tentando di annaffiare una pianta prima della data prevista. </p>
                                 <a href='#' style='text-decoration:none;color:#303926'class='close' data-dismiss='alert' aria-label='close'>CHIUDI</a>
                                </div>";
                    }
                }
                ?>
            </div>
        </div>
        <hr>
        <div class="container-fluid">

            <div class="scaduto row" style="background-color: #a0937d; border-radius:25px; margin: 20px;">
                <h1 style="color: #f6eedf;margin-top: 20px;">SCADUTO:</h1>
            </div>

            <div class="oggi row" style="background-color: #303926; border-radius:25px; margin: 20px;">
                <h1 style="color: #bfcba8;margin-top: 20px;">OGGI:</h1>
            </div>

            <div class="nonscaduto row" style="background-color: #a0937d; border-radius:25px; margin: 20px;">
                <h1 style="color: #f6eedf;margin-top: 20px;">TRA POCO:</h1>
            </div>
            <br>

        </div>

        <script>
            $(document).ready(function() {


                MyFunctions = {
                    waterSchedule: function(start, days) {
                        date = new Date(start);
                        days = Number(days);
                        date.setDate(date.getDate() + days);
                        today = new Date();
                        console.log(date);
                        if (today.getDate() > date.getDate()) {
                            return "SCADUTO";
                        } else if (today.getDate() == date.getDate()) {
                            return "OGGI";
                        }
                        month = '' + (date.getMonth() + 1),
                            day = '' + date.getDate(),
                            year = date.getFullYear();
                        console.log(year + " " + month + " " + day);
                        if (month.length < 2)
                            month = '0' + month;
                        if (day.length < 2)
                            day = '0' + day;

                        var timer = [day, month, year].join('/');
                        console.log(timer);

                        return timer;
                    }



                }
                $.getJSON("fetch.php", function(data, status) {
                    $.each(data, function(i, field) {
                        var final_date = MyFunctions.waterSchedule(field.inizio, field.intervallo);
                        if (final_date == "SCADUTO") {
                            var card = `<div class="card" style="width: 20rem; margin-bottom:80px">
                                  <img src="avatars/` + field.specie + `.jpg" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h3 class="card-title">` + field.nickname + `</h3>
                                    <hr class='hrCard'>
                                    <h5 class="card-title"> Specie: <br>` + field.specie + `</h5>
                                    <p "class="card-text"> <b> Da annaffiare: <br>` + final_date + `</b></p>                           
                                    <form action='lemiepiante.php' method="POST">
                                        <button name="annaffiata" type="submit" class="btn btn-primary" value="` + field.pianteID + `">Annaffiata</button>  
                                        <button name="delete" type="submit" class="btn btn-danger" style=" border-radius: 25px" value="` + field.pianteID + `">Elimina</button>
                                    </form>   
                                 </div>`;
                            $(".scaduto").append(card);
                        } else if (final_date == "OGGI") {
                            var card = `<div class="card" style="width: 20rem; margin-bottom:80px">
                            <img src="avatars/` + field.specie + `.jpg" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h3 class="card-title">` + field.nickname + `</h3>
                                    <hr class='hrCard'>
                                    <h5 class="card-title"> Specie: <br>` + field.specie + `</h5>
                                    <p "class="card-text"> <b> Da annaffiare: <br>` + final_date + `</b></p>                           
                                    <form action='lemiepiante.php' method="POST">
                                        <button name="annaffiata" type="submit" class="btn btn-primary" value="` + field.pianteID + `">Annaffiata</button>  
                                        <button name="delete" type="submit" class="btn btn-danger" style=" border-radius: 25px" value="` + field.pianteID + `">Elimina</button>
                                    </form>   
                                 </div>`;
                            $(".oggi").append(card);
                        } else {
                            var card = `<div class="card" style="width: 20rem; margin-bottom:80px">
                            <img src="avatars/` + field.specie + `.jpg" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h3 class="card-title">` + field.nickname + `</h3>
                                    <hr class='hrCard'>
                                    <h5 class="card-title"> Specie: <br>` + field.specie + `</h5>
                                    <p "class="card-text"> <b> Da annaffiare: <br>` + final_date + `</b></p>                           
                                    <form action='lemiepiante.php' method="POST">
                                        <button class="btn btn-primary" disabled>Annaffiata</button>  
                                        <button name="delete" type="submit" class="btn btn-danger" style=" border-radius: 25px" value="` + field.pianteID + `">Elimina</button>
                                    </form>   
                                 </div>`;
                            $(".nonscaduto").append(card);

                        }
                    });
                });
            });
        </script>

        <script>
            /*LOADING*/
            function loaderSpinner() {
                $(window).load(function() {
                    var loader = $('.loader');
                    var wHeight = $(window).height();
                    var wWidth = $(window).width();
                    var i = 0;

                    loader.css({
                        top: wHeight / 2 - 2.5,
                        left: wWidth / 2 - 200
                    })

                    do {
                        loader.animate({
                            width: i
                        }, 10)
                        i += 3;
                    } while (i <= 400)
                    if (i === 402) {
                        loader.animate({
                            left: 0,
                            width: '100%'
                        })
                        loader.animate({
                            top: '0',
                            height: '100vh'
                        })
                    }

                    setTimeout(function() {
                        $('.content').fadeIn("slow");
                        (loader).fadeOut("fast");
                    }, 2500);
                });

            }

            loaderSpinner();
        </script>
        <footer>
            <div class="text-center p-3 bottom" style="background-color:#303926; color: white;">
                © 2021 Proudly made in Italy:
                <a class="text-light" href="index.php">Magda</a>
            </div>
        </footer>
    </div>

</body>

</html>