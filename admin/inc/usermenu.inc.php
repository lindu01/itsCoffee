<div class="dropdown">
    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong><?php echo $_SESSION['name']. ' '.$_SESSION['surname']; ?></strong>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="profile.php">Profilo</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="actions/logout.php">Sign out</a></li>
    </ul>
</div>
