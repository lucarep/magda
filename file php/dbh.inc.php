<?php

 $serverName = "localhost";
 $dBUsername = "root";
 $dBPassword = "";
 $dBName = "dbMagda";

 $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName );

 if (!$conn){
  die("Connessione non riuscita: " . mysqli_connect_error());

 }