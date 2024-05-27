<?php
require_once(realpath(__DIR__) . '/../inc/config.inc.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query= "SELECT * FROM `user` WHERE username='".$username."' 
AND password='".hash("sha256", $password)."'";
$result = mysqli_query($connessione, $query);

session_start();
if (mysqli_num_rows($result)){
    $utente = mysqli_fetch_array($result);
    $_SESSION['loggato'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $utente['id'];
    $_SESSION['name'] = $utente['name'];
    $_SESSION['surname'] = $utente['surname'];
    $_SESSION['messaggi'][]=['type'=>'success', 'message'=> 'Buongiorno '.$username];
    header("location: ../dashboard.php");
} else {
    $_SESSION['messaggi'][]=['type'=>'danger', 'message'=> 'Login fallito. Riprova.'];
    header("location: ../index.php");
}

//print_r($_POST);