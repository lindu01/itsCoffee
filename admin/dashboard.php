    <?php require(realpath(__DIR__) . '/inc/header.inc.php'); ?>

    <h1>Dashboard</h1>


    <div class="statistiche-post">
    <?php
        require_once(realpath(__DIR__) . '/../inc/config.inc.php');
        session_start();

        // Aggiorna o inserisci un nuovo post come fai attualmente

        // Esegui una query per contare il numero totale di post
        $countQuery = "SELECT COUNT(*) as total_posts FROM news";
        $countResult = mysqli_query($connessione, $countQuery);
        $totalPosts = 0;

        if ($countResult) {
            $row = mysqli_fetch_assoc($countResult);
            $totalPosts = $row['total_posts'];
        } else {
            // Gestisci l'errore se la query di conteggio fallisce
            // Qui puoi aggiungere un messaggio di errore o una gestione alternativa
        }

        // Esegui una query per contare il numero totale di post approvati
        $countApprovedQuery = "SELECT COUNT(*) as total_approved_posts FROM news WHERE approve = 1";
        $countApprovedResult = mysqli_query($connessione, $countApprovedQuery);
        $totalApprovedPosts = 0;

        if ($countApprovedResult) {
            $row = mysqli_fetch_assoc($countApprovedResult);
            $totalApprovedPosts = $row['total_approved_posts'];
        } else {
            // Gestisci l'errore se la query di conteggio fallisce
            // Qui puoi aggiungere un messaggio di errore o una gestione alternativa
        }

        // Calcola il numero totale di post disapprovati
        $totalDisapprovedPosts = $totalPosts - $totalApprovedPosts;

        // Continua con il reindirizzamento
        header("location: ../blog_post.php");
    ?>

        <div class="total-post"> 
            <p>Numero totale di post</p> <h5><?php echo $totalPosts; ?></h5>
        </div>

        <div class="approved-post">
            <span><p>Il numero totale di post approvati</p> <h5><?php echo $totalApprovedPosts; ?></h5></span>
            <span><p>Il numero totale di post disapprovati</p><h5> <?php echo $totalDisapprovedPosts; ?></h5></span>
        </div>



    </div>
</div>

</div>



