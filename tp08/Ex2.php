<?php
$motDePasse = '';
if (isset($_POST['length'])) {
  $longueur = (int)$_POST['length'];
  $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%';
  for ($i = 0; $i < $longueur; $i++) {
    $motDePasse .= $chars[random_int(0, strlen($chars) - 1)];
  }
}
?>
<form method="POST">
  <label>Longueur :</label>
  <input type="number" name="length" min="4" required>
  <button type="submit">Générer</button>
</form>
<?php if ($motDePasse !== '') echo "<p>Mot de passe généré : $motDePasse</p>"; ?>
