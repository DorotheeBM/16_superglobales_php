<!-- // Étape 1: GET  -->

<?php
// Vérifie si le paramètre "first_name" est présent dans l'URL, sinon met Anonyme.
$first_name = $_GET['first_name'] ? $_GET['first_name'] : 'anonyme';

// Affiche le message
echo 'Bonjour ' . htmlspecialchars($first_name) . '!';

// en mettant http://localhost/exercice%20php/exercice.php?first_name=Ada dans le navigateur : 
// on lit : Bonjour Ada!
?>
