<?php
require(realpath(__DIR__) . '/inc/config.inc.php');
require(realpath(__DIR__) . '/inc/header.inc.php');
?>
    <h1>Profilo</h1>
    
    <div class="custom-cursor"><svg width="5vh" height="auto" viewBox="0 0 139 148" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31.4088 18.0661L97.7953 133.057C101.76 139.925 96.5782 148.182 88.7279 147.055C62.7612 143.329 17.0447 132.898 5.50055 105C-6.84687 75.1612 5.97885 38.4997 15.2525 18.4156C18.432 11.5296 27.6166 11.4976 31.4088 18.0661Z" fill="black"/>
<path d="M40.4922 14.1717L108.678 128.105C112.751 134.91 122.485 134.398 125.319 126.991C134.692 102.49 147.813 57.4713 129.052 33.816C108.986 8.51478 70.7145 1.89042 48.6555 0.225046C41.0924 -0.345935 36.5973 7.6636 40.4922 14.1717Z" fill="black"/>
</svg>
</div>


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