<?php

if(isset($_POST["submit"])){
    $nome= $_POST["nome"];
    $cognome= $_POST["cognome"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $passwordrpt = $_POST["passwordrpt"];

    require_once 'dbh.inc.php';
    require_once 'funzioni.inc.php';

    /* Controllo se tutti gli input sono stati riempiti*/ 

    if(emptyInputSignup($nome, $cognome, $email, $password) !== false ){
        header("location: ../registrati.php?error=campivuoti");
        exit();
    }

    /* Controllo validità email*/ 

    if(invalidEmail($email) !== false ){
        header("location: ../registrati.php?error=emailnonvalida");
        exit();
    }

    /* Controllo se le password matchano*/ 
    
    if (strcmp($password,$passwordrpt) !== 0) {
        header("location: ../registrati.php?error=passswordnotmatch");
        exit();
    }

    /* Controllo se la mail risulta già registrata email*/ 

    if(emailExists($conn, $email) !==false){
        header("location: ../registrati.php?error=emailgièesistente");
        exit();
    }

    /* Inserisco i dati forniti nel database */

    createUser($conn, $nome, $cognome, $email, $password);


}
 else {
     header("location: ../registrati.php");
 }