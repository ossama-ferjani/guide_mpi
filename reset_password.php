<!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/static_navbar.css">
   
    
    
    <link rel="icon" href="assets/icons/logoinsat-cropped.ico">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </head>
  <body>
    <?php
      include('static_navbar.php');
    ?>
    <br><br><br>
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-4">
          <div class="form-container">
            <h2 id="title">Réinitialiser votre mot de passe</h2>
     
            
            <div class="tab-content mt-3">
              <div id="Reset">
                <form>
                  <div class="form-group">
                    <label for="email">Veuillez entrer votre email universitaire associé à votre compte:</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="✉  email">
                    <span id="error-message"></span>
                  </div>
                  <br>
                <div style="text-align: center;">
                  <button type="submit" id="submit" class="custom-button">Réinitialiser</button><br><br>
                  
                </form>
              </div>

    </div>
    <script src="js/script3.js"></script>
  </body>
</html>

