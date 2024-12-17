f<?php
//connessione al database
$servername = "localhost";
$username = "";
$password = "";
$database = "";
//crea la connessione $servername, $username, $password, $database (se c'è gia o è stato creato)
$connessione = mysqli_connect($servername, $username, $password, $database );

//verifica la connessione
if (!$connessione){
    die("Connessione al database:" . mysqli_connect_error());
}

$sqlarchivio = "CREATE TABLE merci(ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT UNIQUE,
                                       MERCE VARCHAR(120) NOT NULL,
                                       PREZZO DECIMAL(65,2) NOT NULL,
                                       IVA DECIMAL(12,2) NOT NULL,
                                       PREZZOIVATO DECIMAL(12,2) GENERATED ALWAYS AS (PREZZO * IVA)
                                      )";


if (mysqli_query($connessione, $visualizzadati)){
    echo "<p style='margin:10px;'>Tabella Creata con successo torna al modulo <a href='Calcolatoreiva.html'>qui</a></p>";
}else{
    echo "Error: Non posso creare la tabella $sqlarchivio. " . mysqli_error($connessione);
}
?>