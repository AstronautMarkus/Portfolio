<?php
$title = "Contact me - ReyesAndFriends.cl"; 
ob_start(); 
?>

<section class="section">
    <div class="container">

        <div class="box has-shadow">

            <div class="box">
                <h1 class="title has-text-centered has-text-white is-2" id="contact-title">
                    <i class="fas fa-address-book"></i> Contact Me
                </h1>
            </div>
            

            <div class="columns is-vcentered">

                <div class="column is-full">
                    <p class="has-text-white" id="contact-intro">
                        If you'd like to get in touch with me, here are the best ways to reach me! You can find my contact information below. Feel free to connect via email, phone, or through any of my social media platforms.
                    </p>
                </div>
            </div>


            <div class="box has-shadow">
                <div class="columns is-multiline">

                    <div class="column is-one-third has-text-centered">
                        <p class="has-text-white">
                            <strong><i class="fas fa-envelope"></i> Email</strong><br>
                            <a href="mailto:marcosreyesmartinez2003@gmail.com" class="has-text-info">marcosreyesmartinez2003@gmail.com</a>
                        </p>
                    </div>


                    <div class="column is-one-third has-text-centered">
                        <p class="has-text-white">
                            <strong><i class="fas fa-phone-square-alt"></i> Phone</strong><br>
                            <a href="tel:+56950369308" class="has-text-info">+56 95036 9308</a>
                        </p>
                    </div>


                    <div class="column is-one-third has-text-centered">
                        <p class="has-text-white">
                            <strong><i class="fab fa-github"></i> GitHub</strong><br>
                            <a href="https://github.com/astronautmarkus" target="_blank" class="has-text-info">github.com/astronautmarkus</a>
                        </p>
                    </div>


                    <div class="column is-one-third has-text-centered">
                        <p class="has-text-white">
                            <strong><i class="fab fa-linkedin"></i> LinkedIn</strong><br>
                            <a href="https://linkedin.com/in/markusreyes" target="_blank" class="has-text-info">linkedin.com/in/markusreyes</a>
                        </p>
                    </div>


                    <div class="column is-one-third has-text-centered">
                        <p class="has-text-white">
                            <strong><i class="fab fa-instagram"></i> Instagram</strong><br>
                            <a href="https://instagram.com/sky._marc/" target="_blank" class="has-text-info">@sky._marc</a>
                        </p>
                    </div>

                    <div class="column is-one-third has-text-centered">
                        <p class="has-text-white">
                            <strong><i class="fas fa-globe-americas"></i> Location</strong><br>
                            Santiago de Chile
                        </p>
                    </div>
                </div>
            </div>


            <div class="box has-shadow">
                <div class="columns">
                    <div class="column has-text-centered">
                        <p class="has-text-white">
                            Interested in collaborating on a project? Feel free to <a href="mailto:marcosreyesmartinez2003@gmail.com" class="has-text-info">reach out to me</a> and let's connect!
                        </p>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column has-text-centered">
                    <div class="buttons is-centered">


                        <a href="/about.php" class="button is-purple">
                            <i class="fas fa-user-tie"></i> Go About Me
                        </a>

                        <a href="/index.php" class="button is-purple">
                            <i class="fas fa-home"></i> Go back home
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
