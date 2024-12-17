<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = htmlspecialchars($_POST['nome']);
    $cognome = htmlspecialchars($_POST['cognome']);
    $societa = isset($_POST['societa']) ? htmlspecialchars($_POST['societa']) : '';
    $paese = htmlspecialchars($_POST['paese']);
    $via = htmlspecialchars($_POST['via']);
    $citta = htmlspecialchars($_POST['citta']);
    $provincia = htmlspecialchars($_POST['provincia']);
    $cap = htmlspecialchars($_POST['cap']);
    $telefono = isset($_POST['telefono']) ? htmlspecialchars($_POST['telefono']) : '';
    $email = htmlspecialchars($_POST['email']);

    // Destinatario della mail
    $to = "esempio@gmail.com"; 
    $subject = "Nuovo messaggio dal modulo di contatto";

    
    $message = "
    Nuovo messaggio ricevuto dal modulo di contatto:

    Nome: $nome
    Cognome: $cognome
    Società: $societa
    Paese/Regione: $paese
    Via e numero: $via
    Città: $citta
    Provincia: $provincia
    C.A.P.: $cap
    Telefono: $telefono
    E-mail: $email
    ";

    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Invia la mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Messaggio inviato con successo!";
    } else {
        echo "Si è verificato un errore durante l'invio del messaggio.";
    }
}
?>