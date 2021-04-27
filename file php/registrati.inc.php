<?php

if(isset($_POST["submit"])){
    $nome= $_POST["nome"];
    $cognome= $_POST["cognome"];
    $email= $_POST["email"];
    $password= $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'funzioni.inc.php';

    if(emptyInputSignup($nome, $cognome, $email, $password) !== false ){
        header("location: ../registrati.php?error=emptyinput");
        exit();
    }
/*
    if(invalidEmail($email) !== false ){
        header("location: ../registrati.php?error=emailnonvalida");
        exit();
    }
*/
    if(emailExists($conn, $email) !==false){
        header("location: ../registrati.php?error=emailgièesistente");
        exit();
    }

    createUser($conn, $nome, $cognome, $email, $password);


}
 else {
     header("location: ../registrati.php");
 }