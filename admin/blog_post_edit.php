<?php
require(realpath(__DIR__) . '/inc/config.inc.php');
require(realpath(__DIR__) . '/inc/header.inc.php');

$id = $_GET['id'] ?: 0;

        $query = "SELECT * FROM `news` WHERE id=".$id; /*PRENDE dal database le news approvate (1)*/
        $result = mysqli_query($connessione, $query); /*mostra le news*/
        if (mysqli_num_rows($result)) {  /*Mostra le news mentre carica gli elementi dal database usando la variabile $news*/
        $news = mysqli_fetch_array($result);
    }
?>

<section class="blog-news"></section>

<div class="custom-cursor"><svg width="5vh" height="auto" viewBox="0 0 139 148" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M31.4088 18.0661L97.7953 133.057C101.76 139.925 96.5782 148.182 88.7279 147.055C62.7612 143.329 17.0447 132.898 5.50055 105C-6.84687 75.1612 5.97885 38.4997 15.2525 18.4156C18.432 11.5296 27.6166 11.4976 31.4088 18.0661Z" fill="black"/>
        <path d="M40.4922 14.1717L108.678 128.105C112.751 134.91 122.485 134.398 125.319 126.991C134.692 102.49 147.813 57.4713 129.052 33.816C108.986 8.51478 70.7145 1.89042 48.6555 0.225046C41.0924 -0.345935 36.5973 7.6636 40.4922 14.1717Z" fill="black"/>
        </svg>
        </div>

    <div class="container">

    <h1><?php echo $id > 0 ? 'Modifica' : 'Aggiungi'; ?> news sul blog</h1>
        <form method="post" action="actions/blog_post_edit.php" class="form">
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input id="title" name="title" value="<?php echo $news['title']; ?>" type="text" placeholder="Titolo del post"
                    class="form-control"/>
            </div>

            <div class="mb-3">
                <label for="approve" class="form-label">Approvata</label>
                <input type="number" class="form-control" id="approve" name="approve"
                    value="<?php echo $news['approve']; ?>"/>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Centenuto</label>
                <textarea class="form-control" id="description"
                        name="description"><?php echo $news['description']; ?></textarea>
            </div>

            <input type="hidden" name="id" value="<?php echo $news['id']; ?>"/>
            <input type="submit" class="button" value="Pubblica"/>
        </form>

    <?php 
           
        
            ?>

    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function() {
    const cursor = document.querySelector(".custom-cursor");

    document.addEventListener("mousemove", (e) => {
        const x = e.clientX; // Coordinate x del mouse
        const y = e.clientY; // Coordinate y del mouse
        cursor.style.left = `${x}px`; // Imposta la posizione orizzontale del cursore
        cursor.style.top = `${y}px`; // Imposta la posizione verticale del cursore
        });
    });
</script>


<?php
require(realpath(__DIR__) . '/inc/footer.inc.php');
?>
