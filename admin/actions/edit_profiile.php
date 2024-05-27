<?php
require_once(realpath(__DIR__) . '/../inc/config.inc.php');
session_start();

$name = addslashes($_POST['name']);
$surname = addslashes($_POST['surname']);

$query = "UPDATE user SET name='" . $name . "', surname='" . $surname . "' 
WHERE id='".$_SESSION['user_id']."'";
$result = mysqli_query($connessione, $query);

if ($result) {
    $_SESSION['messaggi'][] = ['type' => 'success', 'message' => 'Utente modificato con successo'];
} else {
    $_SESSION['messaggi'][] = ['type' => 'danger', 'message' => 'Utente non modificato'];
}
header("location: ../profile.php");