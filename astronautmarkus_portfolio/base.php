<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    
    $title = $title ?? "Home - ReyesAndFriends.cl";
    ?>

    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="assets/css/bulma/css/bulma.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/astronaut.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="stylesheet" href="/assets/css/home_styles.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>

<body>

    <div class="background"></div>

    <nav class="navbar is-spaced has-shadow" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <!-- Logo -->
        <a class="navbar-item has-text-white" href="/index.php">
            <i class="fas fa-globe-americas"></i> <strong>reyesandfriends.cl</strong>
        </a>

        <!-- Mobile Burger Menu -->
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasic" class="navbar-menu">
        <div class="navbar-start">
            <!-- Navigation Links -->
            <a class="navbar-item has-text-light" href="/about.php">
                <i class="fas fa-user-astronaut"></i> About Me
            </a>

            <a class="navbar-item has-text-light" href="/projects.php">
                <i class="fas fa-laptop-code"></i> View My Projects
            </a>

            <a class="navbar-item has-text-light" href="/contact.php">
                <i class="fas fa-envelope"></i> Contact Me
            </a>
        </div>

        <div class="navbar-end">
            <!-- Social Media Icons -->
            <div class="navbar-item">
                <a class="icon is-medium has-text-light" href="https://github.com/astronautmarkus" target="_blank" title="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a class="icon is-medium has-text-light" href="https://www.instagram.com/sky._marc/" target="_blank" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="icon is-medium has-text-light" href="https://linkedin.com/in/markusreyes" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
</nav>


    
    <?php echo $content ?? 'Content goes here'; ?>


    <footer class="footer  has-text-light">
    <div class="content has-text-centered">
        <!-- Copyright and Site Info -->
        <p class="mb-3">
            <i class="fas fa-copyright"></i> <?php echo date("Y"); ?> 
            <a class="has-text-info" href="/"><strong>ReyesAndFriends</strong></a> 
            by <strong class="has-text-primary">Marcos Reyes</strong>. All rights reserved.
        </p>

        <!-- Powered By Badges -->
        <p class="is-flex is-justify-content-center is-align-items-center mb-3">
            Powered by:
            <a href="https://www.php.net/" target="_blank" class="mx-2">
                <img src="https://img.shields.io/badge/PHP-%23555287.svg?style=for-the-badge&logo=php&logoColor=white" alt="PHP Badge">
            </a>
            <a href="https://bulma.io/" target="_blank" class="mx-2">
                <img src="https://img.shields.io/badge/Bulma-%2300D1B2.svg?style=for-the-badge&logo=bulma&logoColor=white" alt="Bulma Badge">
            </a>
            <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" class="mx-2">
                <img src="https://img.shields.io/badge/JavaScript-%23F7DF1E.svg?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript Badge">
            </a>
        </p>

        <!-- Social Media Links -->
        <p class="mb-3">
            Follow me on:
        </p>
        <div class="is-flex is-justify-content-center is-align-items-center">
            <a href="https://github.com/astronautmarkus" target="_blank" class="icon mx-2 has-text-light" title="GitHub">
                <i class="fab fa-github fa-2x"></i>
            </a>
            <a href="https://www.instagram.com/sky._marc/" target="_blank" class="icon mx-2 has-text-light" title="Instagram">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="https://linkedin.com/in/markusreyes" target="_blank" class="icon mx-2 has-text-light" title="LinkedIn">
                <i class="fab fa-linkedin fa-2x"></i>
            </a>
        </div>

        <!-- Back to Top Button -->
        <div class="mt-4">
            <a href="#" class="button is-small is-purple is-primary is-light">
                <i class="fas fa-arrow-up"></i> Back to Top
            </a>
        </div>
    </div>
</footer>


    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
