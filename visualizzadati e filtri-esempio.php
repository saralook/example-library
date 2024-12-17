<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "archivio";

$connessione = mysqli_connect($servername, $username, $password, $database);

if (!$connessione) {
  die("Connessione al database: " . mysqli_connect_error());
}

  /*Selezionare dei campi con dei filtri con WHERE e con LIKE */
  $visualizzadati = "SELECT ID , NOME, COGNOME, EMAIL, TELEFONO FROM clienti WHERE NOME LIKE 'A%'";


/* con la funzione mysqli_query(con 2 argomenti, il primo e la variabbile connessione e il secondo argomento era la query) */
 if ($risultato = mysqli_query($connessione,$visualizzadati)) {
               /*my sqli_num_rows crea la tabella dove inserire i dati con verifica dei risultati */                                               
           if (mysqli_num_rows($risultato)>0){

               echo "<table style='border:1px'>" . "<tr>". "<th>ID</th>" . "<th>Nome</th>" . "<th>Cognome</th>" . "<th>Email</th>" . "<th>Telefono</th>" . "<tr>";
               /* ysqli_fetch_array recupera i dati della tabella e inserite all'interno di risultato dove i dati vengono inseriti in delle celle */
        while($row = mysqli_fetch_array($risultato)){
                echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['NOME'] . "</td>";
                    echo "<td>" . $row['COGNOME'] . "</td>";
                    echo "<td>" . $row['EMAIL'] . "</td>";
                    echo "<td>" . $row['TELEFONO'] . "</td>";
                echo "</tr>"; 
            }
               echo "</table>"; 
               // Inserisci tutti risultati mysqli_free_result($risultato)
                mysqli_free_result($risultato);

           }
            else { 
               echo "Mi spiace non ci sono righe.";
            };  
  }
  else {
  echo "Non posso eseguire la query $visualizzadati" . mysqli_error($link);
};

/* Funzione che permette di terminare la connessione del database */
mysqli_close($connessione);





?>