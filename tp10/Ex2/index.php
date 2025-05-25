<?php
$conn = new mysqli('localhost', 'root', '', 'TP10');

if ($_POST) {
  $stmt = $conn->prepare("INSERT INTO exercice (titre, auteur, date_creation) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $_POST['titre'], $_POST['auteur'], $_POST['date']);
  $stmt->execute();
}

$result = $conn->query("SELECT * FROM exercice");
$exercices = $result->fetch_all(MYSQLI_ASSOC);
?>

<form method="POST">
  <input name="titre" placeholder="Titre" required>
  <input name="auteur" placeholder="Auteur" required>
  <input type="date" name="date" required>
  <button type="submit">Ajouter</button>
</form>

<table border="1">
  <tr><th>ID</th><th>Titre</th><th>Auteur</th><th>Date</th><th>Actions</th></tr>
  <?php foreach ($exercices as $ex): ?>
    <tr>
      <td><?= $ex['id'] ?></td>
      <td><?= $ex['titre'] ?></td>
      <td><?= $ex['auteur'] ?></td>
      <td><?= $ex['date_creation'] ?></td>
      <td>
        <a href="modifier.php?id=<?= $ex['id'] ?>">Modifier</a> |
        <a href="supprimer.php?id=<?= $ex['id'] ?>">Supprimer</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
