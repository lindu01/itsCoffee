<?php
require_once(realpath(__DIR__) . '/../inc/config.inc.php');
session_start();

$id = addslashes($_POST['id']);
$title = addslashes($_POST['title']);
$approve = addslashes($_POST['approve']);
$description = addslashes($_POST['description']);

if ($id > 0) {
    $query = "UPDATE news SET title='" . $title . "', description='" . $description . "', 
    approve='" . $approve . "' WHERE id=" . $id;
} else {
    $query = "INSERT INTO news (title, description, approve, user_id) 
VALUES ('" . $title . "', '" . $description . "', '" . $approve . "','".$_SESSION['user_id']."')";
}

$result = mysqli_query($connessione, $query);

if ($result) {
    $_SESSION['messaggi'][] = ['type' => 'success', 'message' => 'Post salvato con successo'];
} else {
    $_SESSION['messaggi'][] = ['type' => 'danger', 'message' => 'Errore.. post non salvato'];
}
header("location: ../blog_post.php");