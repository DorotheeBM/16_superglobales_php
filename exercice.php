<!-- // Étape 1: GET  -->

<!-- <?php
// Vérifie si le paramètre "first_name" est présent dans l'URL, sinon met Anonyme.
$first_name = $_GET['first_name'] ? $_GET['first_name'] : 'anonyme';

// Affiche le message
echo 'Bonjour ' . htmlspecialchars($first_name) . '!';

// en mettant http://localhost/exercice%20php/exercice.php?first_name=Ada dans le navigateur : 
// on lit : Bonjour Ada!
?> -->

<!-- // Étape 2: POST
// Code de l'énoncé qui ajoute un input -->
<form action="exercice.php" method="post">
 <p>Votre nom : <input type="text" name="first_name" /></p>
 <p><input type="submit" value="OK"></p>
</form>

<!-- // Ajout de la variable POST pour stocker la valeur de l'input  -->
<?php
// si le champ n'est pas vide, check l'URL 
if (!empty($_GET['first_name'])) {
    $first_name = $_GET['first_name'];
    // Si le nom est saisi dans le champ, affiche sa valeur
} elseif (!empty($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
    //sinon si le champs est vide au click affiche anonyme
} else {
    $first_name = 'anonyme';
}
// Affiche le message
echo 'Bonjour ' . htmlspecialchars($first_name) . '!';
?>

 
