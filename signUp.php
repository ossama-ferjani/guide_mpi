<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="icon" href="assets/icons/logoinsat-cropped.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/static_navbar.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    


  </head>
  <body>
    <?php
    include('static_navbar.php');
    //include('SignUpp.php');
  ?>
  <br><br>
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
          <div class="form-container">
            <h2 id="title">S'inscrire</h2>
     
            
            <div class="tab-content mt-4">
              <div id="signUp">
                <form method="post">
                <input type="text" name="test1">
                  <div class="form-row align-items-center">
                    <div class="col-auto">
                    <label for="prenom" class="input-label">Prénom:</label>
                    <input type="text" name='surname' class="form-control" id="prenom" aria-describedby="prenomHelp" placeholder="Prénom de l'étuidant" required>
                    <span id="SNerror-message"></span>
                  </div>
                  <div class="col-auto">
                    <label for="nom" class="input-label">Nom:</label>
                    <input type="text" name='name' class="form-control" id="nom" aria-describedby="nomHelp" placeholder="Nom de l'étuidant" required>
                    <span id="NAMEerror-message"></span>
                  </div>
                </div><br>
               
                  <div class="form-group">
                    <label for="tel" class="input-label">Numéro d'inscription:</label>
                    <input type="tel" name='NumInscri' class="form-control" id="inscri" aria-describedby="telHelp" placeholder="Numéro d'inscription" required>
                    <span id="inscrierror-message"></span>
                  </div>
                  <div class="form-group">
                    <label for="tel" class="input-label">Numéro de téléphone:</label>
                    <input type="tel" name='phone' class="form-control" id="tel" aria-describedby="telHelp" placeholder="Numéro d'inscription">
                    <span id="telerror-message"></span>
                  </div>
                  <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label for="filiere">Filière:</label>
                        <select class="form-control form-control-sm" id="filiere" name="filiere">
                            <option selected disabled>Choisir...</option>
                            <option value="MPI">MPI</option>
                            <option value="RT">RT</option>
                            <option value="GL">GL</option>
                            <option value="IIA">IIA</option>
                            <option value="IMI">IMI</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label for="niveau">Niveau:</label>
                        <select class="form-control form-control-sm" id="niveau" name="niveau">
                            <option value="choisir..." disabled selected>Choisir...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>


                  <div class="form-group">
                    <br><label for="email" class="input-label">Email universitaire:</label>
                    <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="✉  Email universitare" required>
                    <span id="mailerror-message"></span>
                  </div>
                  <div class="form-group">
                    <label for="password" class="input-label">Mot de Passe:</label>
                    
                    <input type="password" name='password' class="form-control" id="password" placeholder="&#xf084; Mot de passe (minimum 8 caractéres)" required>
                    <span id="passerror-message"></span>
                  </div>
                  
                  <div class="form-group">
                    <label for="passwordConfirm">Confirmer votre mot de passe:</label>
                    <input type="password" name='password' class="form-control" id="passwordConfirm" placeholder="&#xf084; Confirmer votre mot de passe" required>
                    <span id="passconferror-message"></span></div>
                  <div style="text-align: center;">
                  <button type="submit" id="submit" class="custom-button">Inscription</button><br><br>
                  <small id="emailHelp2" class="form-text text-muted">Vouz avez déjà un compte ? <a href="SignIn.php">  Connectez vous</a></small>
                </form>

              </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script2.js"></script>

    <?php
      include('SignUpp.php');
    ?>
  </body>
</html>