<?php
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

/*creazione dellla tabella "clienti" */ 
$sqlarchivio = "CREATE TABLE Archivio(ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT UNIQUE,
                                      NOME VARCHAR(30) NOT NULL,
                                      COGNOME VARCHAR(30) NOT NULL,
                                      EMAIL VARCHAR(60) NOT NULL UNIQUE,
                                      TELEFONO VARCHAR(30) NOT NULL UNIQUE
                                      )";


/*gestione degli errori*/
if(mysqli_query($connessione, $sqlarchivio)){
    echo "Tabella creata con successo";
} else {
    echo "Non posso creare la tabella $sqlarchivio. " . mysql_error($connessione);
}


//funzione che permette di terminare la connessione al database
mysqli_close($connessione);


?>