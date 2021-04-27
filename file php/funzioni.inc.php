<?php
 
 /* FUNZIONI PER REGISTRAZIONE */

 function emptyInputSignup($nome, $cognome, $email, $password){
   $result;
   if( empty($nome) || empty($cognome) || empty($email) || empty($password)) {
     $result=true;
   }

   else{
       $result=false;
   }
   return $result;
 }

 function invalidEmail($email){
    $result;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $result=false;
    }
 
    else{
        $result=true;
    }
    return $result;
  }

  function emailExists($conn, $email){
   $sql = "SELECT * FROM utenti WHERE email=?;";
   $stmt = mysqli_stmt_init($conn);

   if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../registrati.php?error=emailgiàesistente");
    exit();
   }

   /* prevenzione da SQL Injection */

   mysqli_stmt_bind_param($stmt, "s", $email );
    mysqli_stmt_execute($stmt);
  
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
      return $row;
    }
    else{
        $result=false;
        return $result;
    }

    mysqli_stmt_close($stmt);
  }

  function createUser($conn, $nome, $cognome, $email, $password){
    $sql = "INSERT INTO utenti(nome, cognome, email, utentepassword) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
 
    if (!mysqli_stmt_prepare($stmt, $sql)) {
     header("location: ../registrati.php?error=errore");
     exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
 
    mysqli_stmt_bind_param($stmt, "ssss", $nome, $cognome, $email, $hashedPwd );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt); 
    
    header("location: ../registrati.php?error=nessunerrore");
    exit();
  }

  /* FUNZIONI PER LOGIN */