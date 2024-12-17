<?php
//la tabella è stata creata
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

//variabili del modulo
$inserimentonome= $_POST['nome'];
$inserimentocognome= $_POST['cognome'];
$inserimentomail= $_POST['email'];
$inserimentotelefono= $_POST['telefono'];

$inserimentoutentionline = "INSERT INTO clienti (NOME, COGNOME, EMAIL, TELEFONO) VALUES ( '$inserimentonome',
                                                                                     '$inserimentocognome',
                                                                                     '$inserimentomail',
                                                                                     '$inserimentotelefono'
                                                                                     )";



//gestione dell'errore
if(mysqli_query($connessione, $inserimentoutentionline)){
    echo "Informazione inserita con successo";
} else {
    echo "ERROR: miseria $inserimentoutentionline. " . mysql_error($connessione);
}                                                                                    


//funzione che permette di terminare la connessione al database
mysqli_close($connessione);


?>