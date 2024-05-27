<!DOCTYPE html>
<html>
<head>
    <title>it's Coffee | Coffee Art</title>

    <?php include('heading.php');?>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/coffeeart.css" rel="stylesheet">

  </head>


  <body>

  <?php 
  $page= 'art';
  include('inc/menu.inc.php');
  ?>

<div class="custom-cursor"><svg width="5vh" height="auto" viewBox="0 0 139 148" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31.4088 18.0661L97.7953 133.057C101.76 139.925 96.5782 148.182 88.7279 147.055C62.7612 143.329 17.0447 132.898 5.50055 105C-6.84687 75.1612 5.97885 38.4997 15.2525 18.4156C18.432 11.5296 27.6166 11.4976 31.4088 18.0661Z" fill="black"/>
<path d="M40.4922 14.1717L108.678 128.105C112.751 134.91 122.485 134.398 125.319 126.991C134.692 102.49 147.813 57.4713 129.052 33.816C108.986 8.51478 70.7145 1.89042 48.6555 0.225046C41.0924 -0.345935 36.5973 7.6636 40.4922 14.1717Z" fill="black"/>
</svg>
</div>
 
  <!------------HERO SECTION--------------->
  <section id="coffeeart" class="coffeeart">
  <div class="container" data-aos="fade-up">

  <div class="titles">
      <h1>Coffee art</h1>
      <h6>here you'll find some inspo</h6>
  </div>  

</section>
<!-- HERO END -->
      
<main>

  <!-- PORTFOLIO START -->
  <section class="media-grid">
    <div class="container flex">
        <div class="row">

        <div class="col-lg-3">
                <img class="media-item" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2d50052e6d21fef457e79689709c70223538a8adedb9279c72ddd3926ae326e0?apiKey=ad1e21cc902b4aa98b64c1c71271dc1f&" alt="Media title"/>
                <h3 class="media-title">Media title</h3>
            </div>

            <div class="col-lg-3">
                <img class="media-item" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2d50052e6d21fef457e79689709c70223538a8adedb9279c72ddd3926ae326e0?apiKey=ad1e21cc902b4aa98b64c1c71271dc1f&" alt="Media title" />
                <h3 class="media-title">Media title</h3>
            </div>

            <div class="col-lg-3">
                <img class="media-item" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2d50052e6d21fef457e79689709c70223538a8adedb9279c72ddd3926ae326e0?apiKey=ad1e21cc902b4aa98b64c1c71271dc1f&" alt="Media title" />
                <h3 class="media-title">Media title</h3>
            </div>

            <div class="col-lg-3">
                <img class="media-item" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2d50052e6d21fef457e79689709c70223538a8adedb9279c72ddd3926ae326e0?apiKey=ad1e21cc902b4aa98b64c1c71271dc1f&" alt="Media title"/>
                <h3 class="media-title">Media title</h3>
            </div>  

    </div>

 </section>

       
    <!-- PORTFOLIO END -->

</main>
<!-- End #main -->

  <?php include('footer.php'); ?>

  <?php include('scripts.php'); ?>

  </body>
</html>