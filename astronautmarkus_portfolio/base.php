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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="stylesheet" href="/assets/css/home_styles.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <style>
        html {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        body {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("assets/img/space_background.jpg");
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(5px);
            z-index: -1;
        }

        .navbar,
        .footer {
            background-color: #1a1a1a;
        }

        .navbar-item,
        .footer p {
            color: #ffffff;
        }

        .navbar-burger span {
            background-color: #ffffff !important;
        }

        .footer {
            margin-top: auto;
        }
    </style>
</head>

<body>

    <div class="background"></div>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/index.php">
                <i class="fas fa-globe-americas"></i> reyesandfriends.cl
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasic" class="navbar-menu">
            <div class="navbar-start">

                <a class="navbar-item" href="/about.php">
                    <i class="fas fa-user-astronaut"></i> About Me
                </a>

                <a class="navbar-item" href="/projects.php">
                    <i class="fas fa-laptop-code"></i> View My Projects
                </a>

                <a class="navbar-item" href="/contact.php">
                    <i class="fas fa-envelope"></i> Contact Me
                </a>
            </div>
        </div>
    </nav>

    
    <?php echo $content ?? 'Content goes here'; ?>


    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <i class="fas fa-copyright"></i>
                <?php echo date("Y"); ?>
                <a class="has-text-info" href="/"><strong>ReyesAndFriends</strong></a>
                made by <strong class="has-text-primary">Marcos Reyes</strong>. All rights reserved.
            </p>

            <p>Powered by:</p>
            <p class="is-flex is-justify-content-center is-align-items-center">
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

            <p>
                Follow me on:
                <a href="https://github.com/astronautmarkus" target="_blank" class="mx-1 has-text-info"><i class="fab fa-github"></i></a> |
                <a href="https://www.instagram.com/sky._marc/" target="_blank" class="mx-1 has-text-info"><i class="fab fa-instagram"></i></a>
            </p>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>

</body>

</html>
