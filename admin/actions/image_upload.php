<?php
require_once(realpath(dirname(__FILE__)) . '/../inc/config.inc.php');

$esterno_id = addslashes($_POST['esterno_id']);
$riferimento_tabella = addslashes($_POST['riferimento_tabella']);
$nome = addslashes($_FILES['img']['name']);
$mime_type = addslashes($_FILES['img']['type']);
$peso = addslashes($_FILES['img']['size']);

if ($peso <= 0) {
    $_SESSION['messaggi'][] = ['type' => 'danger', 'message' => 'Errore.. non è possibile caricare un file vuoto'];
    header("Location: ../blog_post_edit.php?id=" . $esterno_id);
    exit();
}

$query = "INSERT INTO immagini (nome, mime_type, esterno_id, riferimento_tabella) 
        VALUES('$nome', '$mime_type', '$esterno_id', '$riferimento_tabella')";

if (mysqli_query($conn, $query)) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../../assets/img/" . $nome);
    header("Location: ../blog_post_edit.php?id=" . $esterno_id);
} else {
    $_SESSION['messaggi'][] = ['type' => 'danger', 'message' => 'Errore durante l\'inserimento nel database'];
    header("Location: ../blog_post_edit.php?id=" . $esterno_id);
}

exit();
?>

<?php
print_r($_POST);
print_r($_FILES);
?>
