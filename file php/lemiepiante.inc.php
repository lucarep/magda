<?php


if (isset($_POST["submit"])) {
    session_start();
    $id = $_SESSION["utentiID"];

    echo "<h1>$id</h1>";
    $nickname = $_POST["nickname"];
    $specie = $_POST["specie"];
    $data= date("Y/m/d");

    require_once "dbh.inc.php";
    require_once "funzioni.inc.php";

    addPlant($conn, $id, $specie, $nickname, $data);
}

else {
    header("location: ../lemiepiante.php");
}


