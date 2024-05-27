<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin profile | It's Coffee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./assets/css/custom.css" rel="stylesheet">

</head>

<body>

<?php
session_start();
?>

<div class="custom-cursor"><svg width="5vh" height="auto" viewBox="0 0 139 148" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31.4088 18.0661L97.7953 133.057C101.76 139.925 96.5782 148.182 88.7279 147.055C62.7612 143.329 17.0447 132.898 5.50055 105C-6.84687 75.1612 5.97885 38.4997 15.2525 18.4156C18.432 11.5296 27.6166 11.4976 31.4088 18.0661Z" fill="black"/>
<path d="M40.4922 14.1717L108.678 128.105C112.751 134.91 122.485 134.398 125.319 126.991C134.692 102.49 147.813 57.4713 129.052 33.816C108.986 8.51478 70.7145 1.89042 48.6555 0.225046C41.0924 -0.345935 36.5973 7.6636 40.4922 14.1717Z" fill="black"/>
</svg>
</div>

<main id="main-profile">
    
    <div class="container">
        <div class="login-form">

        <a class="navbar-brand" href="index.php">
            <svg width="130" height="143" viewBox="0 0 150 143" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M124.898 26.4567C128.074 26.4567 130.692 26.4217 133.275 26.4567C143.538 26.6312 149.542 32.6004 149.612 42.8633C149.682 61.3993 149.682 79.9353 149.612 98.5062C149.612 109.432 143.608 115.262 132.682 115.332C130.273 115.332 127.865 115.332 124.758 115.332C126.329 127.724 118.3 131.564 108.875 134.775C76.4805 145.736 44.3654 145.073 12.4248 133.065C3.59316 129.749 0.835449 125.595 0.835449 116.03C0.835449 85.9394 0.870357 55.849 0.905265 25.7585C0.905265 16.7523 4.15168 12.2841 12.5644 9.31694C45.5523 -2.34224 78.575 -2.44695 111.737 8.6188C120.115 11.4114 125.282 16.3334 124.932 26.4916L124.898 26.4567ZM13.6117 19.3006C32.3571 29.0049 94.2486 29.0049 113.762 19.2308C80.1109 8.23482 47.1231 7.781 13.6117 19.3006ZM125.037 99.4836C134.358 100.217 137.499 97.3892 137.534 88.767C137.534 76.0257 137.569 63.2843 137.534 50.5081C137.534 42.1651 133.799 39.0933 125.037 40.2103V99.4487V99.4836Z" fill="#230C02"/>
            </svg>
        </a>

            <h1>Welcome!</h1>

            <?php
            if ($_SESSION['messaggi']) {
                foreach ($_SESSION['messaggi'] as $msg) {
                    echo '<div class="alert alert-' . $msg['type'] . '">' . $msg['message'] . '</div>';
                }
                unset($_SESSION['messaggi']);
            }
            ?>

            <form method="post" action="actions/login.php">
                <input name="username" type="text" placeholder="Username" class="form-control"/>
                <input name="password" type="password" placeholder="Password" class="form-control"/>
                <input type="submit" class="button" value="Accedi"/>
            </form>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>
</html>