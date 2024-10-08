<?php
$title = "My projects - ReyesAndFriends.cl";
ob_start();
?>


<section class="section">
    <div class="container">
        
        <div class="box has-shadow animate__animated animate__fadeIn">
            <div class="box">
                <h1 class="title has-text-centered has-text-white is-2 animate__animated animate__fadeInDown">
                <i class="fas fa-robot"></i> Featured Project: AbbyBot
                </h1>
            </div>

            <div class="columns is-vcentered">
                
                <div class="column is-two-thirds animate__animated animate__fadeInLeft">
                    <p class="has-text-white">
                        <strong>AbbyBot</strong> is a system composed of a multipurpose tool for <strong>Discord</strong>, which seeks to manage servers and entertainment functions, a control system for <strong>Dashboard</strong> administrators, and an <strong>API</strong> for its operation. This project combines a unique story about a girl named Abigail 'Abby' Monroe, who lost her family during a machine uprising. <strong>AbbyBot</strong> can interact with users, configure its servers and entertain, enjoy <strong>AbbyBot</strong> and all its autonomous operations.
                        <br><br>
                        <a href="https://abbybotproject.com" target="_blank" class="button is-purple">
                            <i class="fas fa-globe-americas"></i></i> View AbbyBot website
                        </a>
                        <a href="https://github.com/AbbyBot" target="_blank" class="button is-purple">
                            <i class="fab fa-github"></i> View AbbyBot Project on GitHub
                        </a>
                    </p>
                </div>


                <div class="column is-one-third animate__animated animate__fadeInRight">
                    <figure class="image is-square">
                        <img src="assets/img/abbybot.png" alt="AbbyBot logo" id="abbybot-image">
                    </figure>
                    <p class="has-text-centered has-text-white animate__animated animate__fadeInRight">- Abigail "Abby" Monroe, AbbyBot's character icon.</p>
                </div>
            </div>
        </div>


        <div class="box has-shadow animate__animated animate__fadeInUp">
            <div class="box">
                <h2 class="title has-text-centered has-text-white is-2 animate__animated animate__fadeInDown"><i class="fas fa-project-diagram"></i> Other Projects</h2>
            </div>

            <div class="columns is-multiline">
                
                <div class="column is-one-third animate__animated animate__fadeInLeft">
                    <div class="box has-shadow">

                        <figure class="image is-16by9">
                            <img src="assets/img/projects/mofustore.png" alt="Mofu Store project thumbnail">
                        </figure>

                        <h3 class="title has-text-white">Mofu Store</h3>
                        <p class="has-text-white">Store created in Django, themed with <strong>"fumofumo"</strong> stuffed animals from the Touhou Project saga.</p>
                        <a href="https://github.com/anzar2/MOFUStore" target="_blank" class="button is-purple animate__animated animate__pulse animate__infinite">
                            <i class="fab fa-github"></i> View on GitHub
                        </a>
                    </div>
                </div>


                <div class="column is-one-third animate__animated animate__fadeInUp">
                    <div class="box has-shadow">

                        <figure class="image is-16by9">
                            <img src="assets/img/projects/construmic.jpg" alt="CONSTRU_MIC project thumbnail">
                        </figure>
                        
                        <h3 class="title has-text-white">CONSTRU_MIC</h3>
                        <p class="has-text-white">
                            Web system focused on sales of household items. It has different modules, user accounts, product list, and an administration module.
                        </p>
                        <a href="https://github.com/MarcosKingsDuoc/CONSTRU_MIC" target="_blank" class="button is-purple animate__animated animate__pulse animate__infinite">
                            <i class="fab fa-github"></i> View on GitHub
                        </a>
                    </div>
                    
                </div>
                

                
                <div class="column is-one-third animate__animated animate__fadeInRight">
                    <div class="box has-shadow">

                        <figure class="image is-16by9">
                            <img src="assets/img/projects/camellosfood.png" alt="CamellosFood project thumbnail">
                        </figure>

                        <h3 class="title has-text-white">CamellosFood-Repartidor</h3>
                        <p class="has-text-white">Camellos Food was a system for mobile applications dedicated to the sale of food, my job was to design the system for delivery people. You can see the repository here.</p>
                        <a href="https://github.com/AstronautMarkus/CamellosFood-Repartidor-3.0" target="_blank" class="button is-purple animate__animated animate__pulse animate__infinite">
                            <i class="fab fa-github"></i> View on GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="box has-shadow animate__animated animate__fadeInUp">
            <div class="box">
                <h2 class="title has-text-centered has-text-white is-2 animate__animated animate__fadeInDown"><i class="fab fa-github"></i> Check Out More Projects on My GitHub</h2>
            </div>

            <div class="columns is-vcentered">
                <div class="column has-text-centered">

                    <figure class="image is-128x128 is-inline-block">
                        <img class="is-rounded" src="https://github.com/astronautmarkus.png" alt="GitHub Profile Picture">
                    </figure>
            

                    <p class="has-text-white">
                        <strong>@astronautmarkus</strong><br>
                        You can explore more of my open-source projects and contributions by visiting my GitHub profile.
                    </p>
            
                    <br>
            

                    <a href="https://github.com/astronautmarkus" target="_blank" class="button is-purple animate__animated animate__pulse animate__infinite">
                        <i class="fab fa-github"></i> Visit My GitHub Profile
                    </a>
                </div>
            </div>

            <div class="columns">
                <div class="column has-text-centered">
                    <div class="buttons is-centered animate__animated animate__fadeInUp">

                        <a href="/index.php" class="button is-purple animate__animated animate__pulse animate__infinite">
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
