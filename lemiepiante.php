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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
    <style type="text/css">
        .bgimg {
            height: 300px;
            width: 100%;
            background-image: url("pictures/thomas-verbruggen-5A06OWU6Wuc-unsplash.jpg");
            background-size: cover;
            background-position: center;
        }

        .modal-dialog {
            background-color: #c9c0b9;
            border-color: #303926;
        }

        .modal-content {
            background-color: #FAF3E0;
        }

        .modal-header {
            border-color: #303926;
            background-color: #303926;
            color: white;
        }

        .modal-footer {
            border-color: #303926;
        }

        #formLMP {
            position: relative;
            margin: 25px 0 25px 0;
            text-align: center;
            letter-spacing: 10px;
        }

        #nicknameLMP {
            font-size: 0.875em;
            width: 470px;
            height: 50px;
            padding: 0px 15px 0px 15px;
            background: transparent;
            outline: none;
            color: #303926;
            border: solid 1px #303926;
        }

        #nicknameLMP:hover {
            background: #303926;
            color: #e2dedb;
        }

        #specieLMP {
            font-size: 0.875em;
            width: 470px;
            height: 50px;
            padding: 0px 15px 0px 15px;
            background: transparent;
            outline: none;
            color: #303926;
            border: solid 1px #303926;
        }

        #specieLMP:hover {
            background: #303926;
            color: #e2dedb;
        }

        #submitLMP {
            font-size: 0.875em;
            width: 470px;
            height: 50px;
            padding: 0px 15px 0px 15px;
            margin: -5px 0px 0px 0px;
            background: transparent;
            outline: none;
            cursor: pointer;
            color: #303926;
            border: solid 1px #303926;
        }

        #submitLMP:hover {
            background: #303926;
            color: #e2dedb;
        }
    </style>
    <div class="container-fluid bgimg">
        <?php
        echo "<h3 style='background: linear-gradient(to right, #134E5E 0%, #71B280 100%);-webkit-background-clip: text;
                -webkit-text-fill-color: transparent; font-size: clamp(1rem, 2vw + 3rem, 6rem); text-align:center; padding-top: 25px;'>
                Bentornata/o $_SESSION[nome] !</h3>";
        ?>

    </div>
    <div class="container-fluid">
        <div class="row" style="margin-top: 20px;">
            <div class="col-lg">
                <h4 style="color: #303926;">Hai attualmente: 0 piante </h4>
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
                                    <select class="form-control" id="specieLMP" required>
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
    </div>
    <hr>
    <div class="text-center p-3 fixed-bottom" style="background-color:#303926; color: white;">
        © 2021 Proudly made in Italy:
        <a class="text-light" href="index.html">Magda</a>
    </div>

</body>

</html>