<?php
session_start();
if (!$_SESSION['loggato']){
    $_SESSION['messaggi'][]=['type'=>'danger', 'message'=> 'Hai tentato di fregarmi ma ti ho beccato'];
    header("location: index.php");
    die;
}

