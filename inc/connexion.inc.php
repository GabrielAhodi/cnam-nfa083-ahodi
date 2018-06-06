<?php 
/* variables de connexion =================================================== */
    $serveur = 'localhost';
    $bddname = 'cnamcp09_nfa083_2017';
    $loginserveur = 'root';   
    $mdpserveur = ''; 

/* connexion ================================================================ */
try{
$con = new PDO('mysql:host='.$serveur.';dbname='.$bddname.';charset=utf8',$loginserveur, $mdpserveur);
}
// option pour capturer messages d'erreur
catch (exception $e){
    die('Erreur: ' .$e->getMessage());
}
?>
