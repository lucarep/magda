<?php


if (isset($_POST["submit"])) {
    session_start();
    $id = $_SESSION["utentiID"];
    $nickname = $_POST["nickname"];
    $specie = $_POST["specie"];
    $data = date("Y/m/d");

    require_once "dbh.inc.php";
    require_once "funzioni.inc.php";

    addPlant($conn, $id, $specie, $nickname, $data);
} else {
    header("location: ../lemiepiante.php");
}

$nickname2 = $_POST['nickname'];
$query = 'SELECT lemiepiante.specie, lemiepiante.nickname, lemiepiante.inizio, lemiepiante.intervallo
                FROM lemiepiante
                WHERE lemiepiante.utentiID = $_SESSION[utentiID]" AND
                lemiepiante.nickname LIKE "' . $nickname2 . '%"';
$result2 = $conn->query($query);
$data = array();

while ($row = $result2->fetch_assoc()) {
    array_push($data, $row);
}
$json = json_encode($data);
echo ($json);
