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

/* RESTITUISCE INFO PIANTE */

$query = "SELECT ho.id,ho.utente,ho.obiettivoID,ho.numeropiante,ho.hainnaffiato,ho.sbloccato,ho.dataobiettivo,o.goal,o.descrizione,o.nome,o.tipo
          FROM haobiettivi as ho, obiettivi as o
          WHERE ho.utente = $_SESSION[utentiID] 
          AND ho.obiettivoID = o.id;";
$result = $conn->query($query);
$data = array();

while ($row = $result->fetch_assoc()) {
    array_push($data, $row);
}
$json = json_encode($data);
echo ($json);
