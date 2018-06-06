<h2>Liste des questions</h2>
<?php
  include 'inc/connexion.inc.php';  
?>
    <?php /* fichier cnam/nfa083/2017-cf1/inc/question-liste.inc.php 20180604-PBO */

/* RECUP question LISTE ===================================================== */ 
    $requete22= $con->query ('SELECT question_pseudo, question_texte FROM question');

  while($donnees22 = $requete22->fetch()) { ?>
    <p>
        <?php echo $donnees22["question_pseudo"].' | '
                   .$donnees22["question_texte"]; ?>
    </p>
    <?php                     // Retour à la ligne à chaque enregistrement
  } ?>
