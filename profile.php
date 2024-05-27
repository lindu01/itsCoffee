<?php
require(realpath(__DIR__) . '/inc/config.inc.php');
require(realpath(__DIR__) . '/inc/header.inc.php');
?>
    <h1>Profilo</h1>
    
<?php
$query = "SELECT * FROM user WHERE id='" . $_SESSION['user_id'] . "'";
$result = mysqli_query($connessione, $query);
$utente = mysqli_fetch_array($result);
?>
    <form method="post" action="actions/edit_profiile.php" class="form">
        <input value="<?php echo $utente['name']; ?>" name="name" type="text" placeholder="Name" class="form-control"/>
        <input value="<?php echo $utente['surname']; ?>" name="surname" placeholder="Surname" class="form-control"/>
        <input type="submit" class="btn btn-primary" value="Modifica"/>
    </form>
<?php
require(realpath(__DIR__) . '/inc/footer.inc.php');
?>