<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Us</title>
    <link rel="icon" href="assets/icons/logo_insat.ico" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/contact_us.css" rel="stylesheet">
    <link rel="stylesheet" href="css/static_navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    
    
    <style>
        input[type="file"] {
            display: none;
        }

        label[for="Upload_button"] {
            display: inline-block;
            color: #fff;
            background-color: #ad9261;
            text-align: center;
            padding: 15px 40px;
            font-size: 18px;
            letter-spacing: 1.5px;
            cursor: pointer;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.35);
            border-radius: 3px;
            margin-bottom: 15px;
        }

        label:active {
            transform: scale(0.9);
        }
    </style>
</head>

<body style="background-color:#EEEBDD">
    <?php
        session_start();
        //echo $_SESSION["id"];
        include('static_navbar.php');
        include('securityAction.php');
    ?>
    <div class="container">
        <form method="post" action="">
            <div class="row">
                <div class="col-md-7" style="background-color: white;">
                    <h4>YOUR FEEDBACK </h4>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="titre" placeholder="Donner un titre">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Commentaire</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="contenu" placeholder="Taper votre commentaire ici" rows="3" style="height: 80px;"></textarea>
                    </div>
                    <div>
                        <input type="file" id="Upload_button">
                        <label for="Upload_button">Joindre un fichier</label>
                    </div>
                    <button class="btn btn-primary" id="sub" name="submit">Submit</button>
                </div>
                <div class="col-md-5 ">
                    <h4>Contacter-Nous</h4>
                    <hr>
                    <div class="mt-4">
                        <div class="d-flex">
                            <i class="bi bi-geo-alt-fill"></i>
                            <p>Adresse: Centre Urbain Nord BP 676-1080 Tunis Cedex</p>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <i class="bi bi-telephone-fill"></i>
                            <p>Contact : 216 71 70 39 29 <br>Fax: 216 71 70 43 29</p>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <i class="bi bi-browser-chrome"></i>
                            <p>Site Web: www.insat.rnu.tn</p>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="popup" id="popup">
                    <img src="assets/img/popup.png">
                    <h2>Merci</h2>
                    <p> Votre commentaire est envoyé avec succées </p>
                    <button type="button" id="ok">OK</button>
                </div>
            </div>
        </form>
    </div>
    <script src="js/contact_us.js"></script>
    <?php
        include('ContactUsAction.php');
    ?>
</body>

</html>