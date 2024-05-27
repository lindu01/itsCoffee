<?php

$config = [];
$config['db']['host'] = 'localhost';
$config['db']['username'] = 'coffee_blog';
$config['db']['password'] = 'coffee';
$config['db']['name'] = 'coffee_blog';

$connessione = mysqli_connect($config['db']['host'], $config['db']['username'], $config['db']['password']);
mysqli_select_db($connessione, $config['db']['name']) or die(mysqli_error());