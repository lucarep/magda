<?php

session_start();

header('Access-Control-Allow-Origin: *');

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "dbMagda";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connessione non riuscita: " . mysqli_connect_error());
}

/* RESTITUISCE INFO PIANTE */

    $query = "SELECT lemiepiante.specie, lemiepiante.nickname, lemiepiante.inizio, lemiepiante.intervallo
                FROM lemiepiante
                WHERE lemiepiante.utentiID = $_SESSION[utentiID]
                ORDER BY lemiepiante.nickname";
    $result = $conn->query($query);
    $data = array();

    while ($row = $result->fetch_assoc()) {
        array_push($data, $row);
    }
    $json = json_encode($data);
    echo ($json);

    $conn->close();

