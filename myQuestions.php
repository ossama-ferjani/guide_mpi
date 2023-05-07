<?php 
   
    //require('myQuestionsAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
    <?php include 'navbar.php'; ?>

    <br><br>
    <div class="container">

        <?php 

           // while($question = $getAllMyQuestions->fetch()){
                ?>
                <div class="card">
                    <h5 class="card-header">
                        <a href="article.php?id=<?= $question['id']; ?>">
                            <?= $question['titre']; ?>
                        </a>
                    </h5>
                    <div class="card-body">
                        <p class="card-text">
                            <?= $question['description']; ?>
                        </p>
                        <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-primary">Accéder à la question</a>
                        <a href="editquestion.php?id=<?= $question['id']; ?>" class="btn btn-warning">Modifier la question</a>
                        <a href="deleteQuestionAction.php?id=<?= $question['id']; ?>" class="btn btn-danger">Supprimer la question</a>
                    </div>
                </div>
                <br>
                <?php
           // }

        ?>

    </div>

</body>
</html>