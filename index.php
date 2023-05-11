<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/icons/logo_insat.ico">
    <title>Home Page</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/dynamic_navbar.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/home.js" defer></script>


</head>

<body>


    <header>
        <!--<img id="landing" src="img/landing.png" alt="Landing">-->
        <?php
            //include('session_start.php');
            include('dynamic_navbar.php');
        ?>

        <br><br><br><br><br><br><br>
        <div id="landing-txt">
            <h1>INSAT</h1>
                <br>
                <h4>Ecole d'ingénieurs publique de<br>référence et de renommée internationale
                </h4>
        </div>
        <br><br><br>
        <div id="sign-up2">
            <a href="./SignUp.php">S'inscrire</a>

        </div>
        <br><br>
        <div id="explore">
            <a href="#">
                Explorer INSAT <span style="font-weight: bold;font-size: 1.5em;position: relative; top: 10px;" class="material-symbols-outlined">
                    expand_more
                </span>
            </a>
    </header>
    <section>
        <div id='a_propos_ctn' class="ctn-2">
            <div class="row">
                <div class="row col-lg-8 col-sm-4">
                    <div class="col-lg-6 col-md-3 col-sm-3">
                        <h4 class="p-head">A propos ce Site</h4>
                        <p class="p-sub">
                            Ce site a été réalisé dans le but d'aider les étudiants du MPI tout au long de leur première
                            année à l'INSAT.</p>

                    </div>
                    <div class="col-lg-6 col-md-3 col-sm-3">
                        <h4 class="p-head">C'est quoi la filière MPI ?</h4>
                        <p class="p-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto unde
                            consectetur
                        </p>

                    </div>
                    <div class="col-lg-6 col-md-3 col-sm-3">
                        <h4 class="p-head">MPI, et après ?</h4>
                        <p class="p-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto unde
                            consectetur
                        </p>

                    </div>
                    <div class="col-lg-6 col-md-3 col-sm-3">
                        <h4 class="p-head">La vie associative à l'INSAT</h4>
                        <p class="p-sub">La vie associative à l'INSAT est foisonnante, et son dynamisme anime une vie étudiante riche et variée tout au long de l’année universitaire.
                        </p>

                    </div>

                </div>
                <div class="row col-lg-4 col-sm-2" style="background-color: #141E27;">
                    <div class="row text-center ">
                        <div class="col-lg-12 col-md-4 col-12">
                            <h2 class="num-info">25+</h2>
                            <h4>Promotions</h4>
                        </div>

                        <div class="col-lg-12 col-md-4">
                            <h2 class="num-info">30+</h2>
                            <h4>Clubs Universitaires</h4>
                        </div>

                        <div class="col-lg-12 col-md-4">
                            <h2 class="num-info">10+</h2>
                            <h4>Filières</h4>
                        </div>
                    </div>
                </div>


            </div>
            <br><br><br>
            <div id="gal-insat">
                <h2>Gallerie INSAT</h2>
                <br>
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/img1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/img2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/landing.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <br><br><br>
            <div class="row">
                <div class="col-lg-12" style="text-align: center;">
                    <h2>Explorer l'INSAT</h2>
                </div>
                <ul id="sections_ctn">
                    <li class="col-lg-3 col-md-6 col-sm-12 sections" style="text-align: center;">
                        <a href="calculator.php">
                            <img src="assets/img/calculator.jpg" alt="Calculator" style="width:50%">
                            <br>
                            <span>
                                Calculer votre moyenne <br> Moyenne | Score
                            </span>
                        </a>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12 sections" style="text-align: center;">
                        <a href="">
                            <img src="assets/img/forum.jpg" alt="Forum" style="width:85%">
                            <br>
                            <span>
                                Le forum <br> Q&A
                            </span>
                        </a>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12 sections" style="text-align: center;">
                        <a href="">
                            <img src="assets/img/ressources.jpg" alt="Resources" style="width:60%;padding:10px;">
                            <br>
                            <span>
                                Les ressources
                            </span>
                        </a>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12 sections" style="text-align: center;">
                        <a href="">
                            <img src="assets/img/paths.jpg" alt="Calculator" style="width:60%">
                            <br>
                            <span>
                                Presentation des Filieres
                            </span>
                        </a>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12 sections" style="text-align: center;">
                        <a href="">
                            <img src="assets/img/vie_asso.jpg" alt="Calculator" style="width:75%">
                            <br>
                            <span>
                                La vie associative <br>dans l'INSAT
                            </span>
                        </a>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12 sections" style="text-align: center;">
                        <a href="">
                            <img src="assets/img/convention.jpg" alt="Calculator" style="width:55%;">
                            <br>
                            <span>
                                Nos conventions
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


    </section>


    <footer>
        <div id="footer">
            <a href="#"><span class="material-symbols-outlined icon">
                    expand_less
                </span></a>

            <br>
            <h5>
                Institut Nationale des Sciences Appliquées et Technologiques
            </h5>
            <br>
            <div class="row ctn-f">
                <div class="col-lg-4 col-sm-4 ctn-3">
                    <p>
                        <span style="font-weight: bold;">Adresse:</span> <br>
                        Centre Urbain Nord <br> BP 676-1080
                    </p>

                </div>
                <div class="col-lg-4 col-sm-4  ctn-3">
                    <p>
                        <span style="font-weight: bold;">Tél:</span> <br> 71 703 829 - 71 703 929 <br><br> <span style="font-weight: bold;">Fax:</span> <br>71 704 329
                    </p>

                </div>
                <div class="col-lg-4 col-sm-4 ctn-3">

                    <p>
                        <span style="font-weight: bold;">Trouvez nous sur:</span>
                    </p>

                    <a href="http://www.insat.rnu.tn/"><i class="fa-solid fa-globe fa-sm" style="color: #ffffff;"></i>
                        Website <br></a>
                    <a href="https://www.facebook.com/insat.rnu.tn"><span class="fa-brands fa-square-facebook fa-sm" style="color: #000000;"></span> Facebook </a><br>
                    <a href="https://www.linkedin.com/school/national-institute-of-applied-science-and-technology/"><span class="fa-brands fa-linkedin fa-sm" style="color: #000000;"></span> LinkedIn </a><br>
                    <p><i class="fa-sharp fa-solid fa-envelope fa-sm" style="color: #ffffff;"></i> contact@insat.ucar.tn
                    </p>




                </div>
            </div>

        </div>
    </footer>

</body>






</html>