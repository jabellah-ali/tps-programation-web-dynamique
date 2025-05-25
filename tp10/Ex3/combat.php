<?php
$conn = new mysqli('localhost', 'root', '', 'Tpex3');

if (isset($_POST['creer'])) {
  $nom = $_POST['nom'];
  $stmt = $conn->prepare("INSERT INTO guerriers (nom) VALUES (?)");
  $stmt->bind_param("s", $nom);
  $stmt->execute();
}

if (isset($_POST['attaquant'], $_POST['cible'])) {
  $cible = $_POST['cible'];
  $conn->query("UPDATE guerriers SET degats = degats + 5 WHERE nom = '$cible'");
  $conn->query("DELETE FROM guerriers WHERE degats >= 100");
}

$result = $conn->query("SELECT * FROM guerriers");
$guerriers = $result->fetch_all(MYSQLI_ASSOC);
?>

<h2>Créer un guerrier</h2>
<form method="POST">
  <input name="nom" required>
  <button type="submit" name="creer">Créer</button>
</form>

<h2>Frapper</h2>
<form method="POST">
  <select name="attaquant">
    <?php foreach ($guerriers as $g) echo "<option>$g[nom]</option>"; ?>
  </select>
  frappe
  <select name="cible">
    <?php foreach ($guerriers as $g) echo "<option>$g[nom]</option>"; ?>
  </select>
  <button type="submit">Frapper</button>
</form>

<h2>Liste des guerriers</h2>
<ul>
  <?php foreach ($guerriers as $g): ?>
    <li><?= $g['nom'] ?> : <?= $g['degats'] ?> dégâts</li>
  <?php endforeach; ?>
</ul>
