<?php

$targetDir = "caricamenti/";
$maxFileSize = 10 * 1024 * 1024; // 10 MB
$allowedExtensions = ['doc', 'docx', 'pdf', 'rtf'];

// Verifica se il form è stato inviato
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['cvFile'])) {
    
    $fileName = $_FILES['cvFile']['name'];
    $fileTmpName = $_FILES['cvFile']['tmp_name'];
    $fileSize = $_FILES['cvFile']['size'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    
    if ($fileSize > $maxFileSize) {
        echo "Errore: Il file è troppo grande. La dimensione massima consentita è di 10 MB.";
        exit;
    }

    
    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "Errore: Estensione non valida. Sono ammessi solo i file con estensione .doc, .docx, .pdf, .rtf.";
        exit;
    }

    // Crea un nome unico per il file
    $newFileName = uniqid() . '.' . $fileExtension;

    
    $targetFile = $targetDir . $newFileName;

   
    if (file_exists($targetFile)) {
        echo "Errore: Un file con lo stesso nome esiste già.";
        exit;
    }

    // Prova a caricare il file
    if (move_uploaded_file($fileTmpName, $targetFile)) {
        echo "Il file " . htmlspecialchars($fileName) . " è stato caricato correttamente.";
    } else {
        echo "Errore: Si è verificato un problema durante il caricamento del file.";
    }
} else {
    echo "Errore: Nessun file caricato.";
}
?>