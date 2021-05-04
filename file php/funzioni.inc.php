<?php

/* FUNZIONI PER REGISTRAZIONE */

function emptyInputSignup($nome, $cognome, $email, $password)
{
  $result;
  if (empty($nome) || empty($cognome) || empty($email) || empty($password)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email)
{
  $result;
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = false;
  } else {
    $result = true;
  }
  return $result;
}

function emailExists($conn, $email)
{
  $sql = "SELECT * FROM utenti WHERE email=?;";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../registrati.php?error=emailgiàesistente");
    exit();
  }

  /* prevenzione da SQL Injection */

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $nome, $cognome, $email, $password)
{
  $sql = "INSERT INTO utenti(nome, cognome, email, utentepassword) VALUES (?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../registrati.php?error=errore");
    exit();
  }

  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $nome, $cognome, $email, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  header("location: ../registrati.php?error=nessunerrore");
  exit();
}

/* FUNZIONI PER LOGIN */

function emptyInputLogin($username, $pwd)
{
  $result;
  if (empty($username) || empty($pwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function loginUser($conn, $username, $pwd)
{
  $result = emailExists($conn, $username);
  if ($result === false) {
    header("location: ../login.php?error=nonregistrato");
    exit();
  }

  $pwdHashed = $result['utentepassword'];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if ($checkPwd === false) {
    header("location: ../login.php?error=passworderrata");
    exit();
  } elseif ($checkPwd === true) {
    session_start();
    $_SESSION["utentiID"] = $result["utentiID"];
    $_SESSION["nome"] = $result["nome"];
    header("location: ../lemiepiante.php");
    exit();
  }
}

/* funzioni le mie piante*/

function getFrequency($conn, $specie)
{
  $sql = "SELECT p.intervallo FROM piante as p  WHERE p.specie = ?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../lemiepiante.php?error=errorequery");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "s", $specie);
  }
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_array($result);
  $frequenza = $row[0];
  mysqli_stmt_close($stmt);
  return $frequenza;
}

function addPlant($conn, $id, $specie, $nickname, $data)
{

  $intervallo = getFrequency($conn, $specie);

  $sql = "INSERT INTO lemiepiante(utentiID, specie, nickname, inizio, intervallo) VALUES (?,?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../lemiepiante.php?error=errore");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "isssi", $id, $specie, $nickname, $data, $intervallo);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  header("location: ../lemiepiante.php?error=nessunerrore");
  exit();
}
