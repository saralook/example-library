<?php
$servername = "localhost";
$username = "";
$password = "";
$database = "";
//crea la connessione $servername, $username, $password, $database (se c'è gia o è stato creato)
$connessione = mysqli_connect($servername, $username, $password, $database );


//inserimento dati in una tabella, (se è stata creata)

$sqlinserimento = "INSERT INTO clienti (ID, NOME, COGNOME, EMAIL, TELEFONO) VALUES ( 'Nome',
                                                                                     'Cognome',
                                                                                     'mail@gmail.com',
                                                                                     '+39 420482984'
                                                                                     )";

//gestione dell'errore
if(mysqli_query($connessione, $sqlinserimento)){
    echo "Informazione inserita con successo";
} else {
    echo "ERROR $sqlinserimento. " . mysql_error($connessione);
}                                                                                    

//funzione che permette di terminare la connessione al database
mysqli_close($connessione);


?>