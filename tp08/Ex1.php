<?php
$resultat = '';
if (isset($_POST['a'], $_POST['b'], $_POST['operation'])) {
  $a = $_POST['a'];
  $b = $_POST['b'];
  $op = $_POST['operation'];
  if ($op == '/' && $b == 0) {
    $resultat = "Erreur : Division par zéro";
  } else {
    switch ($op) {
      case '+': $resultat = $a + $b; break;
      case '-': $resultat = $a - $b; break;
      case '*': $resultat = $a * $b; break;
      case '/': $resultat = $a / $b; break;
    }
  }
}
?>
<form method="POST">
  <input type="number" name="a" required>
  <select name="operation">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="number" name="b" required>
  <button type="submit">Calculer</button>
</form>
<?php if ($resultat !== '') echo "<p>Résultat : $resultat</p>"; ?>
