<?php
require(realpath(__DIR__) . '/inc/config.inc.php');
require(realpath(__DIR__) . '/inc/header.inc.php');

echo $blog_category_id = $_POST['blog_category_id'];
?>

<h1 class="title">Gestione post del blog</h1>



<a href="blog_post_edit.php" class="create-button"><svg xmlns="http://www.w3.org/2000/svg" width="auto" height="22" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
</svg></a>
<br/>

<?php

$query = "SELECT * FROM news ";
$result = mysqli_query($connessione, $query);

if (mysqli_num_rows($result)) {
    ?>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Approvati</th>
            <th></th>
        </tr>
        <?php
        while ($post = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $post['title']; ?></td>
                <td><?php echo $post['description']; ?></td>
                <td class="approve"><?php echo $post['approve'] ? '<span style="color: green; font-size: 30px">&#x25cf;</span>' : '<span style="color: red; font-size: 30px">&#x25cf;</span>'; ?></td>
                <td>
                    <a href="blog_post_edit.php?id=<?php echo $post['id']; ?>">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="actions/blog_post_delete.php?id=<?php echo $post['id']; ?>">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <?php
}
?>



<?php
require(realpath(__DIR__) . '/inc/footer.inc.php');
?>
