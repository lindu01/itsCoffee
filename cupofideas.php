<!DOCTYPE html>
<html>
  <head>
  <title>it's Coffee | Blog</title>
    <?php include('heading.php'); ?>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/cupofideas.css" rel="stylesheet">
  </head>

  <body>
  <?php 
  $page= 'blog';
  include('inc/menu.inc.php'); 
  ?>
  
<div class="custom-cursor"><svg width="5vh" height="auto" viewBox="0 0 139 148" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31.4088 18.0661L97.7953 133.057C101.76 139.925 96.5782 148.182 88.7279 147.055C62.7612 143.329 17.0447 132.898 5.50055 105C-6.84687 75.1612 5.97885 38.4997 15.2525 18.4156C18.432 11.5296 27.6166 11.4976 31.4088 18.0661Z" fill="black"/>
<path d="M40.4922 14.1717L108.678 128.105C112.751 134.91 122.485 134.398 125.319 126.991C134.692 102.49 147.813 57.4713 129.052 33.816C108.986 8.51478 70.7145 1.89042 48.6555 0.225046C41.0924 -0.345935 36.5973 7.6636 40.4922 14.1717Z" fill="black"/>
</svg>
</div>
  <!------------HERO SECTION (here when you log in you have to see an edit option)--------------->

<section id="cupofideas" class="cupoofideas">
  <div class="titles">
            <h1>Blog</h1>
            <h2>your daily cup of ideas</h2> 
    </div>  
</section>


<section id="blog" class="blog">
  <div class="container flex" data-aos="fade-up" data-aos-delay="300">
    <div class="row">
      <div class="col-lg-4">
        <!-- Immagine di sfondo fissa -->
          <div class="front-img"></div>
      </div>

      <div class="col-lg-8">
        <!-- Contenitore per gli articoli con stile per il fixed position -->
        <div class="article-container">

        <?php
        $query = "SELECT * FROM `news` WHERE approve=1"; /*PRENDE dal database le news approvate (1)*/
        $result = mysqli_query($connessione, $query); /*mostra le news*/
        if (mysqli_num_rows($result)) {  /*Mostra le news mentre carica gli elementi dal database usando la variabile $news*/
          while ($news = mysqli_fetch_array($result)) {
        ?>
          <!-- Articolo 1 -->
          <div class="item mb-4">
            <article class="article">
              <div class="article-image"></div>
              <div class="username"><?php echo $news['user']; ?></div> <!--inserisco un echo per stampare ciò che mi serve dal database-->
              <h2 class="news-title"><?php echo $news['title']; ?></h2>
              <p class="article-description">
              <?php echo $news['description']; ?>
              </p>
              <div class="interaction-container">
                <div class="interaction-box">
                  <div class="comments-container">
                    <p class="comments-text"><i class="bi bi-chat"></i>Comment</p>
                  </div>
                </div>
                <i class="bi bi-star"></i>
              </div>
            </article>
          </div>
          <?php 
          }
        }
          ?>


        </div>
      </div>
    </div>
  </div>
</section>


</main><!-- End #main -->


  <br><br><br>

  <?php include('inc/footer.php'); ?>
  <?php include('scripts.php'); ?>

  </body>
</html>