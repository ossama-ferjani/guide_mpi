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
            <h2 id="title">MPI student guide</h2>
     
            
            <div class="tab-content mt-3">
              <div id="signIn">
                <form method="post" action="Login.php">
                  <div class="form-group">
                    <label for="email" class="input-label">Email universitaire:</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="&#xf0e0;  email@insat.ucar.tn" required>
                    
                    
                  </div>
                  <div class="form-group">
                    <label for="password" class="input-label">Mot de passe:</label>
                    <input type="password"  id="password" class="form-control" name="password" placeholder="&#xf084;  Mot de passe (minimum 8 caractéres)" required>
                    <a  id="emailHelp2" class="form-text text-muted" href="reset_password.php">Mot de passe oublié ? </a>
                    <span id="error-message"></span>

                  </div>
                  <br>
                  <div style="text-align: center;">
                  <button type="submit" id="submit" class="custom-button">Se connecter</button><br>
                  <small id="emailHelp2" class="form-text text-muted">Vouz n'avez pas de compte ? <a href="SignUp.php">  Inscrivez vous</a></small>
                </form>
              </div>

    </div>
    <script src="js/script1.js"></script>
  </body>
</html>