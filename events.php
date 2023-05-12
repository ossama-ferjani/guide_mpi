<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evénements INSAT</title>

    <link rel="icon" href="assets/icons/logo_insat.ico" type="image/png">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/static_navbar.css">
    <link href="css/events.css" rel="stylesheet">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/events.js" defer></script>
  </head>
  <body>
    <?php
      session_start();
      
    ?>
    <div class="container">
      <?php
        include('static_navbar.php')
      ?>
      <h1 class="text-center mt-5 mb-4">Evénements INSAT</h1>
      <div class="row" id="events-container">
        <!-- Events will be added dynamically using JavaScript -->
      </div>
      <button id="vp">Voir Plus +</button>
      <br><br><br>
    </div>
    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    
  </body>
</html>
