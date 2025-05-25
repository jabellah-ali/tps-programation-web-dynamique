<?php
$err = $_GET['err'] ?? '';
if ($err == 1) echo "<p>Veuillez saisir un login et un mot de passe</p>";
if ($err == 2) echo "<p>Erreur de login/mot de passe</p>";
if ($err == 3) echo "<p>Vous avez été déconnecté du service</p>";
?>
<form method="POST" action="validation.php">
  <input type="text" name="login" placeholder="Login">
  <input type="password" name="pass" placeholder="Mot de passe">
  <button type="submit">Se connecter</button>
</form>
