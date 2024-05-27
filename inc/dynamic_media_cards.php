<?php
// Includi il file di connessione al database
include 'connection.php';

// Esegui la query per ottenere i dati dalla tabella MEDIA
$sql = "SELECT * FROM media";
$result = $conn->query($sql);

// Verifica se ci sono risultati
if ($result->num_rows > 0) {
    // Itera sui risultati e stampa le card media dinamiche
    while ($row = $result->fetch_assoc()) {
        $mediaTitle = $row['title'];
        $mediaImage = "https://example.com/images/" . $row['external_id']; // Sostituisci con il percorso corretto dell'immagine
        $mediaSection = $row['section'];

        // Output della card media con i dati dinamici
        echo '<article class="media-item">';
        echo '<img src="' . $mediaImage . '" alt="' . $mediaTitle . '" class="media-image" />';
        echo '<h3 class="media-title">' . $mediaTitle . '</h3>';
        echo '<p class="media-section">Section: ' . $mediaSection . '</p>';
        echo '</article>';
    }
} else {
    echo "Nessun media trovato nel database.";
}

// Chiudi la connessione al database
$conn->close();
?>
