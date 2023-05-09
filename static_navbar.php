<script src="js/static_navbar.js" defer></script>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.html"><img id="logo_insat" src="assets/img/no-bg_logo.png" alt="logo insat"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars fa-xl" style="color: #ffffff;"></i>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a id="home" class="nav-link" href="#">Accueil</a>
                </li>
                <!--<li class="nav-item">
                    <a id="home" class="nav-link" href="home.html">Resources et Formation</a>
                </li>-->
                <!-- Example single danger button -->
                <li class="nav-item">
                    <div class="btn-group">
                        <button class="nav-link" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Resources et Formation<i class="fa-solid fa-caret-down fa-sm" style="color: #ffffff;"></i>
                        </button>
                        <ul class="dropdown-menu animate slideIn">
                            <li><a class="dropdown-item" href="#">Resources</a></li>
                            <li><a class="dropdown-item" href="#">Forum</a></li>
                            <li><a class="dropdown-item" href="#">Outils</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Activités</a>
                </li>
                <li id="a_propos" class="nav-item">
                    <a class="nav-link" href="#">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacter-Nous</a>
                </li>


            </ul>

            <ul class="acc log">
                <li id="logged-out-nav" >
                    <ul class="navbar-nav list-inline">
                        <li>
                            <span id="bar"></span>
                        </li>
                        <li>
                            <a id="sign-up" class="btn btn-primary" href="#" role="button">S'inscrire</a>

                        </li>
                        
                        <!--
                        <li>
                            <a id="sign-in" class="btn btn-primary" href="#" role="button">Se connecter</a>

                        </li>
                        -->
                    </ul>
                    
                </li>
                <li id="logged-in-nav">
                        <div id="account-dropdown" class="dropdown">
                            <button class="btn btn-primary dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div id="profile-mini">U</div>
                                <span>username</span>
                            </button>
                            <ul class="dropdown-menu animate slideIn">
                                <li><a class="dropdown-item" href="#"><span class="material-symbols-outlined">
                                            person

                                        </span><span>Mon Compte</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="material-symbols-outlined">
                                            mail
                                        </span><span>Messages</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="material-symbols-outlined">
                                            settings
                                        </span><span>Paramètres</span></a></li>
                                <li id='disconnect'><a class="dropdown-item" href="/index.php"><span class="material-symbols-outlined">
                                            logout
                                        </span><span>Se déconnecter</span></a></li>
                            </ul>
                        </div>
                    </li>
                </li>
            </ul>  




        </div>
    </div>

</nav>