<!DOCTYPE html>
<html>

<head>
    <title>YouTube Video Carousel</title>
    <link rel="icon" href="assets/icons/logo_insat.ico" type="image/png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/static_navbar.css">
    <link rel="stylesheet" href="css/pres_filiere.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/pres_filiere.js"></script>

</head>

<body>
    <div id="big_ctn">
    <?php
        session_start();
        include('static_navbar.php')
      ?>
      <br>
        <h1>Présentation des filières</h1><br>
        <div class="carousel-container">
            <div id="videoCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <iframe width="900" height="450" src="https://www.youtube.com/embed/NVcN43Y65ZI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="carousel-label">RT</div>
                    </div>
                    <div class="carousel-item">
                        <iframe width="900" height="450" src="https://www.youtube.com/embed/3Qve1RuKHJI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="carousel-label">GL</div>
                    </div>
                    <div class="carousel-item">
                        <iframe width="900" height="450" src="https://www.youtube.com/embed/cqQOsiE-ung" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="carousel-label">IIA</div>
                    </div>
                    <div class="carousel-item">
                        <iframe width="900" height="450" src="https://www.youtube.com/embed/tzY0EjLL-zA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="carousel-label">IMI</div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#videoCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</body>

</html>