<?php
$title = "Home - ReyesAndFriends.cl";
ob_start();
?>

<section class="section">
    <div class="container">

        <div class="box has-shadow">

            <div class="box">
                <h1 class="title has-text-centered has-text-white is-2" id="welcome-title">
                    <i class="fas fa-door-open"></i> Welcome to ReyesAndFriends.cl!
                </h1>
            </div>

            <div class="columns is-vcentered">

                <div class="column is-two-thirds">
                    <p class="has-text-white" id="intro-text">
                        Greetings, visitor! My name is <strong class="has-text-primary">Marcos Reyes</strong>, also known as <strong class="has-text-warning">AstronautMarkus</strong>. I am a passionate programmer, constantly exploring new technologies and creative projects. <br><br>
                        If you’re curious about what I do, feel free to check out my work or learn more about me below:
                    </p>
                </div>

                <div class="column is-one-third">
                    <figure class="image is-square">
                        <img src="/assets/img/astronaut.png" alt="Astronaut image" id="profile-image">
                    </figure>
                    <p class="has-text-centered has-text-white">- Let's assume this is a photo of me, but since there isn't one I put this pretty astronaut.</p>
                </div>
            </div>

            <div class="columns">
                <div class="column has-text-centered">
                    <div class="buttons is-centered">
                        <a href="/about.php" class="button is-purple">
                            <i class="fas fa-user-astronaut"></i> Learn More About Me
                        </a>

                        <a href="/projects.php" class="button is-purple">
                            <i class="fas fa-laptop-code"></i> See My Projects
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
$content = ob_get_clean();

include 'base.php';
?>