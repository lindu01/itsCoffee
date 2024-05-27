<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand" href="index.php">
        <img src="assets\img\logo\logo.png">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenuto del menu che verrà nascosto o visualizzato -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
            <li><a href="index.php" class="nav-link" target="_self">Home</a></li>
                <li><a href="cupofideas.php" class="nav-link" target="_self">Cup of ideas</a></li>
                <li><a href="coffeeart.php" class="nav-link" target="_blank">Coffee art</a></li>
                <!-- qui se sono loggato vedo nel menù un bottone in più -->
                <?php 
                    session_start();
                    if ($_SESSION['loggato']) {
                        ?>
                        <li><a href="admin" class="create-button"><i class="bi bi-pencil-fill"></i>Crea post</a></li>
                        <?php 
                    }
                ?>
            </ul>
        </div>

        <?php 
            if ($_SESSION['loggato']) {
                ?>
                <span><a class="logout-button" href="action/logout.php">Logout</a></span>
                
                <?php 

            } else {
                ?> 
                <span><a class="button" href="admin/index.php"><i class="bi bi-person-circle"></i>Login</a></span>
                <?php 

            }
        ?>
        
    </div>

</nav>
