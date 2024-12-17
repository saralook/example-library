<?php
$servername = "localhost";
$username = "";
$password = "";
$database = "";

$connessione = mysqli_connect();

if (!$connessione){
    die("Connessione al database:" . mysqli_connect_error());
}

// Create database serve per creare database
$sql = "CREATE DATABASE Archivio"; 

/*Gestione degli errori */
if (mysqli_query($connessione, $sql)) {
  echo "Database connesso e creato archivio";
} else {
  echo "C'è un errore di connessione: " . mysqli_error($connessione);
}

$sqlarchivio = "CREATE TABLE archivio(ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT UNIQUE,
                                       NOME VARCHAR(30) NOT NULL,
                                       COGNOME VARCHAR(30) NOT NULL,
                                       EMAIL VARCHAR(60) NOT NULL UNIQUE,
                                       TELEFONO  VARCHAR(30) NOT NULL UNIQUE
                                      )";
?>