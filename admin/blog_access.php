<?php
session_start();

// Controlla se l'utente è loggato
if (!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true) {
    // Se l'utente non è loggato, reindirizza alla pagina di login
    header("location: index.php");
    exit();
}

// Se l'utente è loggato, mostra il contenuto della pagina protetta qui
// Ad esempio, puoi mostrare la dashboard dell'utente o il contenuto specifico della pagina
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Utente</title>
    <?php include('heading.php'); ?>
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Altri stili e script necessari -->
</head>
<body>

<?php include('inc/menu.inc.php'); ?>

<section id="dashboard" class="dashboard">
    <div class="container">
        <h2>Benvenuto, <?php echo $_SESSION['name']; ?>!</h2>
        <!-- Contenuto della dashboard -->
    </div>
</section>

<?php include('inc/footer.php'); ?>
<?php include('scripts.php'); ?>

</body>
</html>
