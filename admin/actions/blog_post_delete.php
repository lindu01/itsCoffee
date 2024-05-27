<?php
require_once(realpath(__DIR__) . '/../inc/config.inc.php');

$id = addslashes($_GET['id']);

$query = "DELETE FROM news WHERE id='" . $id . "'";
$result = mysqli_query($connessione, $query);

if ($result) {
    $_SESSION['messaggi'][] = ['type' => 'success', 'message' => 'Post eliminato con successo'];
} else {
    $_SESSION['messaggi'][] = ['type' => 'danger', 'message' => 'Errore.. post non eliminato'];
}
header("location: ../blog_post.php");