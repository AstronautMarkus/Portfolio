<?php
$title = "Contact Me - ReyesAndFriends.cl"; 
ob_start(); 
?>

<section class="section">
    <div class="container">
        <div class="box has-shadow">

            <!-- Título -->
            <div class="box">
                <h1 class="title has-text-centered has-text-white is-2" id="contact-title" data-aos="zoom-in">
                    <i class="fas fa-address-book"></i> Get in Touch
                </h1>
                <p class="subtitle has-text-centered has-text-white is-4" data-aos="fade-up">
                    Let's connect! Here’s how you can reach me.
                </p>
            </div>

            <!-- Información de Contacto -->
            <div class="box has-shadow">
                <div class="columns is-multiline">

                    <div class="column is-one-third has-text-centered" data-aos="fade-up" data-aos-duration="550">
                        <p class="has-text-white">
                            <strong><i class="fas fa-envelope"></i> Email</strong><br>
                            <a href="mailto:marcosreyesmartinez2003@gmail.com" class="has-text-info">marcosreyesmartinez2003@gmail.com</a>
                        </p>
                    </div>

                    <div class="column is-one-third has-text-centered" data-aos="fade-up" data-aos-duration="600">
                        <p class="has-text-white">
                            <strong><i class="fas fa-phone-square-alt"></i> Phone</strong><br>
                            <a href="tel:+56950369308" class="has-text-info">+56 95036 9308</a>
                        </p>
                    </div>

                    <div class="column is-one-third has-text-centered" data-aos="fade-up" data-aos-duration="650">
                        <p class="has-text-white">
                            <strong><i class="fab fa-github"></i> GitHub</strong><br>
                            <a href="https://github.com/astronautmarkus" target="_blank" class="has-text-info">github.com/astronautmarkus</a>
                        </p>
                    </div>

                    <div class="column is-one-third has-text-centered" data-aos="fade-up" data-aos-duration="700">
                        <p class="has-text-white">
                            <strong><i class="fab fa-linkedin"></i> LinkedIn</strong><br>
                            <a href="https://linkedin.com/in/markusreyes" target="_blank" class="has-text-info">linkedin.com/in/markusreyes</a>
                        </p>
                    </div>

                    <div class="column is-one-third has-text-centered" data-aos="fade-up" data-aos-duration="750">
                        <p class="has-text-white">
                            <strong><i class="fab fa-instagram"></i> Instagram</strong><br>
                            <a href="https://instagram.com/sky._marc/" target="_blank" class="has-text-info">@sky._marc</a>
                        </p>
                    </div>

                    <div class="column is-one-third has-text-centered" data-aos="fade-up" data-aos-duration="800">
                        <p class="has-text-white">
                            <strong><i class="fas fa-map-marker-alt"></i> Location</strong><br>
                            Santiago de Chile
                        </p>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="box has-shadow" data-aos="fade-up" data-aos-duration="850">
                <div class="columns">
                    <div class="column has-text-centered">
                        <p class="has-text-white mb-4">
                            Interested in working together? Feel free to reach out via email or connect with me on LinkedIn!
                        </p>
                        <div class="buttons is-centered">
                            <a href="mailto:marcosreyesmartinez2003@gmail.com" class="button is-medium is-purple">
                                <i class="fas fa-paper-plane"></i> Send Email
                            </a>
                            <a href="https://linkedin.com/in/markusreyes" target="_blank" class="button is-medium is-purple">
                                <i class="fab fa-linkedin"></i> Connect on LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navegación -->
            <div class="columns">
                <div class="column has-text-centered" data-aos="fade-up" data-aos-duration="900">
                    <div class="buttons is-centered">
                        <a href="/about.php" class="button is-medium is-light">
                            <i class="fas fa-user-tie"></i> About Me
                        </a>
                        <a href="/index.php" class="button is-medium is-light">
                            <i class="fas fa-home"></i> Back Home
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
