<?php
$nom = strip_tags($_POST['nom']);
$prenom = strip_tags($_POST['prenom']);
$age = strip_tags($_POST['age']);
$sexe = strip_tags($_POST['sexe']);

echo "<h1>Bonjour $prenom $nom</h1>";
echo "<p>Âge : $age ans</p>";
echo "<p>Sexe : $sexe</p>";
?>
