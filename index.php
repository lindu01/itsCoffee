<!DOCTYPE html>
<html>
  <head>
    <title>it's Coffee | home</title>
    <?php include('heading.php'); ?>

    <link href="assets/css/style.css" rel="stylesheet">    
  </head>

<body>
  <?php 
  $page= 'home';
  include('inc/menu.inc.php'); 
  ?>

<div class="custom-cursor"><svg width="5vh" height="auto" viewBox="0 0 139 148" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31.4088 18.0661L97.7953 133.057C101.76 139.925 96.5782 148.182 88.7279 147.055C62.7612 143.329 17.0447 132.898 5.50055 105C-6.84687 75.1612 5.97885 38.4997 15.2525 18.4156C18.432 11.5296 27.6166 11.4976 31.4088 18.0661Z" fill="black"/>
<path d="M40.4922 14.1717L108.678 128.105C112.751 134.91 122.485 134.398 125.319 126.991C134.692 102.49 147.813 57.4713 129.052 33.816C108.986 8.51478 70.7145 1.89042 48.6555 0.225046C41.0924 -0.345935 36.5973 7.6636 40.4922 14.1717Z" fill="black"/>
</svg>
</div>

  <!------------HERO SECTION--------------->
  <section id="hero" class="hero"> 
    <div class="container flex align-items-center" data-aos="fade-up" data-aos-delay="300">
        <div class="row justify-content-center align-items-center"> <!-- Aggiunta classi per centrare la row -->
            <div class="col-lg-6">
                <h1>Where coffee lovers <br> meet each other.</h1>
                <p></p>
                <span><a class="button" href="#icon-boxes"><i class="bi bi-book"></i>Read more</a></span>
            </div>
            <div class="col-lg-6">
                <div class="logo-img"><img src="assets\img\logo\mug.png"></div>
            </div>
        </div>
    </div>
</section>


    

<!-- HERO END -->


<main id="main">
<!-- SECTION ICON BOXES | Describe what this site DOES-->
<section id="icon-boxes" class="icon-boxes">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <!-- 1 box -->
          <div class="col-md-6 col-lg-3 d-flex align-items-center align-items-stretch mb-5 mb-lg-0" 
            data-aos="fade-up">
            
            <div class="icon-box">
              <div class="icon"><i class="bi bi-book"></i></div>
              <h4 class="title">Blog</h4>             
              <p class="description">
              Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum  
              <p>
            </div>

          </div>
          <!-- 2 box -->
          <div class="col-md-6 col-lg-3 d-flex align-items-center align-items-stretch mb-5 mb-lg-0" 
            data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-compass"></i></div>
              <h4 class="title">Inspire</h4>             
              <p class="description">
              Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum  
              <p>
            </div>
          </div>
          <!-- 3 box -->
          <div class="col-md-6 col-lg-3 d-flex align-items-center align-items-stretch mb-5 mb-lg-0" 
            data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-chat"></i></div>
              <h4 class="title">Share</h4>             
              <p class="description">
              Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum  
              <p>
            </div>
          </div>
          <!-- 4 box -->
          <div class="col-md-6 col-lg-3 d-flex align-items-center align-items-stretch mb-5 mb-lg-0" 
            data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-people"></i></div>
              <h4 class="title">Community</h4>             
              <p class="description">
              Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum  
              <p>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- ICON BOXES  END -->


<!--------------- Link section -------------->

<section id="links" class="links">
    <div class="container flex align-items-center" data-aos="fade-up" data-aos-delay="300">
      <div class="row justify-content-center align-items-center"> <!-- Aggiunta classi per centrare la row -->
        
        <div class="col-lg-4">
                <img src="assets\img\logo\mug.png">
        </div>
        
          <div class="col-lg-8">
              <div>
                <a class="link-item" href="coffeeart.php">
                <div><h4>Art community</h4></div>
                  <span class="go-to">
                    <h3 style="display: inline;">Coffe Art</h3><i class="bi bi-arrow-right"></i>
                  </span>
                </a>
              </div>

              <div>
                <a class="link-item" href="cupofideas.php">
                <div><h4>Find inspiration</h4></div>
                  <span class="go-to">
                    <h3 style="display: inline;">Coffee Blog</h3><i class="bi bi-arrow-right"></i>
                  </span>
                </a>
              </div>


              <div>
                <a class="link-item" href="index.php">
                <div><h4>More about us</h4></div>
                  <span class="go-to">
                    <h3 style="display: inline;">it's Coffee</h3><i class="bi bi-arrow-right"></i>
                  </span>
                </a>
              </div>

            </div>

        </div>
    </div>
</section>


<!---------------TODAY NEWS ----------------------------->
<section id="news" class="news">

    <!-- Page Content -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
    
    <h2 class="my-4">Some recent articles</h2><h4>take a look</h4>
    
    <!-- Project One -->
    <div class="row">
    
      <div class="col-lg-6">
        <div class="img">
          <img src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MjB8fHxlbnwwfHx8fHw%3D" alt="">
        </div>
      </div>
      
      <div class="col-lg-6">
          <h3>Project One</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <span><a class="button" href="#shop"><i class="bi bi-book"></i>Read more</a></span>
      </div>

    </div>
    <!-- /.row -->

    <!-- Project One -->
    <div class="row">
    
      <div class="col-lg-6">
        <div class="img">
          <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Nnx8fGVufDB8fHx8fA%3D%3D" alt="">
        </div>
      </div>
      
      <div class="col-lg-6">
          <h3>Project One</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <span><a class="button" href="#shop"><i class="bi bi-book"></i>Read more</a></span>
      </div>

    </div>
    <!-- /.row -->

    <!-- Project One -->
    <div class="row">
    
      <div class="col-lg-6">
        <div class="img">
          <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8fA%3D%3D" alt="">
        </div>
      </div>
      
      <div class="col-lg-6">
          <h3>Project One</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <span><a class="button" href="#shop"><i class="bi bi-book"></i>Read more</a></span>
      </div>

    </div>
    <!-- /.row -->



</section><!-- End TODAY NEWS Section -->


<!-------- CONTACT START-------->
<section id="contact" class="contact">
  <div class="container">
    <div class="section-title">
      <h2>Contact us</h2>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <!-- Informazioni di contatto -->
      <div class="col-lg-5">
        <div class="info">
          <!-- Indirizzo -->
          <div class="address mb-3">
            <i class="bi bi-geo-alt"></i>
            <h4>Location</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
          <!-- Email -->
          <div class="email mb-3">
            <i class="bi bi-envelope"></i>
            <h4>Email</h4>
            <p>info@anyar.com</p>
          </div>
          <!-- Telefono -->
          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call</h4>
            <p>+1 354 035138473</p>
          </div>
        </div>
      </div>

      <!-- Modulo di contatto -->
      <div class="col-lg-7">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <!-- Campo Nome -->
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" placeholder="Your name">
            </div>
            <!-- Campo Email -->
            <div class="col-md-6 form-group">
              <input type="email" name="email" class="form-control" placeholder="Your email" required>
            </div>
          </div>
          <!-- Campo Oggetto -->
          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
          </div>
          <!-- Campo Messaggio -->
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Insert your message here" required></textarea>
          </div>
          <!-- Messaggi di ritorno -->
          <div class="text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. We will contact you as soon as possible</div>
          </div>
          <!-- Pulsante di invio -->
          <div class="text-center">
          <span><a class="button" href="#shop"><i class="bi bi-send"></i>send</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>




  </main><!-- End #main -->


  <br>

  <?php include('inc/footer.php'); ?>

  <?php include('scripts.php'); ?>

  </body>
</html>