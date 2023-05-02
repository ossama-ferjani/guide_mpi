<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/calculator.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/static_navbar.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/calculator.js" defer></script>

</head>

<body>
    <?php
    include('static_navbar.php');
    ?>
    <br><br>
    <div id="big-ctn">
        <br>
        <h2>Calculatrice Moyenne|Score</h2>
        <br>
        <div class="row">
            <div class="col-lg-8">
                <ul class="row">
                    <li class="list-group-item col-lg-6">
                        <input class="form-check-input me-1" type="checkbox" value="" id="sem1">
                        <label class="form-check-label" for="firstCheckbox">Semestre 1</label>
                    </li>
                    <li class="list-group-item col-lg-6">
                        <input class="form-check-input me-1" type="checkbox" value="" id="sem2">
                        <label class="form-check-label" for="secondCheckbox">Semestre 2</label>
                    </li>
                </ul>
                <div class="row notes">
                    <div class="row col-lg-6" id="notes-sem1" style="margin-left: 20px;">
                        <ul class="row titre">
                            <li class="col-lg-3">

                            </li>
                            <li class="col-lg-3">
                                DS
                            </li>
                            <li class="col-lg-3">
                                TP
                            </li>
                            <li class="col-lg-3">
                                Examen
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Analyse
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Algèbre
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Optique
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Mécanique
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Electrostatique
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Circuits
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Algorithmique
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Programmation
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Anglais
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Français
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Droit
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>


                    </div>
                    <div class="row col-lg-5" id="notes-sem2" style="margin-left: 20px;">
                        <ul class="row titre">
                            <li class="col-lg-3">

                            </li>
                            <li class="col-lg-3">
                                DS
                            </li>
                            <li class="col-lg-3">
                                TP
                            </li>
                            <li class="col-lg-3">
                                Examen
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Analyse
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Algèbre
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Electromagnétisme
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Thermodynamique
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Algorithmique
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Programmation
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Système Logiques
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Electronique
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Anglais
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Français
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>
                        <ul class="row analyse">
                            <li class="col-lg-3">
                                Economie
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="ds note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="tp note"><br><br>
                            </li>
                            <li class="col-lg-3">
                                <input type="text" class="examen note"><br><br>
                            </li>
                        </ul>


                    </div>


                </div>
                <br>
                <div id="calculer">
                    <button>
                        <i class="fa-solid fa-calculator" style="color: #ffffff;"></i>
                        <span>Calculer</span>
                    </button>
                </div>
                <br><br>

            </div>
            <div class="col-lg-4">
                <div id="moy">
                    <h5>Votre moyenne est :</h5>
                    <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off">
                        <label class="btn" for="vbtn-radio1">Semestre 1</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                        <label class="btn" for="vbtn-radio2">Semestre 2</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                        <label class="btn" for="vbtn-radio3">Semestre 3</label>
                    </div>
                </div>
                <br>
                <div id="score">
                    <h5>Votre score est :</h5>
                    <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio4" autocomplete="off">
                        <label class="btn" for="vbtn-radio4">GL</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio5" autocomplete="off">
                        <label class="btn" for="vbtn-radio5">IIA</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio6" autocomplete="off">
                        <label class="btn" for="vbtn-radio6">IMI</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio5" autocomplete="off">
                        <label class="btn" for="vbtn-radio5">RT</label>
                    </div>
                </div>
                <br><br><br>
                <div id="clear">
                <button> C </button>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
</body>

</html>