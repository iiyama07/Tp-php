 <?php
    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);
    ob_start();
    date_default_timezone_set('Europe/Paris');
    ?>

 <h1>Exercices - Les variables</h1>
 <h2>Exercice 1 :</h2>
 <p>
     Créer les variables suivantes : $prenom , $date, $heure <br />
     Les remplir avec des valeurs pour que ce soit dynamique <br />
     Puis remplacer le code de l'exercice précédent avec ces variables.
     Faire avec 3 méthodes différentes <br />
 </p>

 <strong>Résultat : </br></strong>

 <?php
    $prenom = "Louis";
    $date = date("j/m/Y");
    $heure = date("G:i");

     echo ("<h2>".$prenom ."</br>". $date . "</br>" . $heure."</h2>");
    ?>



 <h2>Exercice 2 :</h2>
 <p>
     Reprendre l'exercice précédent <br>
     Mais cette fois-ci on va créer une variable pour l'heure et les minutes au lieu de juste $heure<br>
     Puis afficher la phrase avec qu'un seul echo grâce à la concaténation<br>
     Puis également avec la méthode de la syntaxe alternative
 </p>

 <strong>Résultat :</strong>

 <?php
    $prenom = "Louis";
    $date = date("j/m/Y");
    $heure = date("G");
    $minute = date("i");

    echo( "<h2> Bonjour" . $prenom . ", nous sommes le " . date("j/m/Y") ."</br> Il est actuellement ". $heure . ":" . $minute . "</h2>");
    ?>

 </h2>





 <?php $content = ob_get_clean(); ?>

 <?php require('../inc/template.php'); ?>