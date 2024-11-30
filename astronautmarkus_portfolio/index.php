<?php
$title = "Home - ReyesAndFriends.cl";
ob_start();
?>

<section class="section">
    <div class="container">
        <div class="box has-shadow" data-aos="fade-up" data-aos-duration="600">

            <!-- Welcome Title -->
            <div class="box" data-aos="fade-down" data-aos-duration="800">
                <h1 class="title has-text-centered has-text-white is-1" id="welcome-title">
                    <i class="fas fa-rocket"></i> Welcome to <strong class="has-text-primary">ReyesAndFriends.cl</strong>!
                </h1>
                <p class="subtitle has-text-centered has-text-white is-4" data-aos="fade-up" data-aos-duration="1000">
                    Explore my journey in programming, creativity, and technology.
                </p>
            </div>

            <!-- Introduction Section -->
            <div class="columns is-vcentered">
                <div class="column is-two-thirds" data-aos="fade-right" data-aos-duration="800">
                    <p class="has-text-white" id="intro-text">
                        Hi, I'm <strong class="has-text-primary">Marcos Reyes</strong>, known online as <strong class="has-text-warning">"AstronautMarkus"</strong>. I'm a passionate full-stack developer exploring exciting projects and innovations. 
                        <br><br>
                        Here, you'll discover my portfolio, from academic projects to open-source contributions, as well as insights into my personal journey as a programmer. Whether you're here for inspiration, collaboration, or curiosity, I'm glad to have you.
                    </p>
                </div>

                <div class="column is-one-third" data-aos="fade-left" data-aos-duration="800">
                    <figure class="image is-square">
                        <img src="/assets/img/astronaut.png" alt="Astronaut image" id="profile-image">
                    </figure>
                    <p class="has-text-centered has-text-white mt-4">- Not actually me, but close enough! Welcome aboard.</p>
                </div>
            </div>

            <!-- Call-to-Action Section -->
            <div class="columns mt-5">
                <div class="column has-text-centered" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="has-text-white is-4 mb-4">
                        Ready to dive in? Here’s where you can start:
                    </p>
                    <div class="buttons is-centered">
                        <a href="/about.php" class="button is-purple is-medium">
                            <i class="fas fa-user-astronaut"></i> About Me
                        </a>
                        <a href="/projects.php" class="button is-purple is-medium">
                            <i class="fas fa-laptop-code"></i> Explore My Projects
                        </a>
                        <a href="/contact.php" class="button is-purple is-medium">
                            <i class="fas fa-envelope"></i> Get in Touch
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
