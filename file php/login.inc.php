<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["email"];
    $pwd = $_POST["password"];

    require_once "dbh.inc.php";
    require_once "funzioni.inc.php";

    /* Controllo se tutti gli input sono stati riempiti*/ 

    if(emptyInputLogin($username, $pwd) !== false ){
        header("location: ../login.php?error=campivuoti");
        exit();
    }

    loginUser($conn, $username, $pwd);

}

else {
    header("location: ../login.php");
}