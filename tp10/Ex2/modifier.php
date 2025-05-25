<?php
$conn = new mysqli('localhost', 'root', '', 'TP10');
$id = $_GET['id'];

if ($_POST) {
  $stmt = $conn->prepare("UPDATE exercice SET titre=?, auteur=?, date_creation=? WHERE id=?");
  $stmt->bind_param("sssi", $_POST['titre'], $_POST['auteur'], $_POST['date'], $id);
  $stmt->execute();
  header("Location: index.php");
}

$result = $conn->query("SELECT * FROM exercice WHERE id=$id");
$ex = $result->fetch_assoc();
?>

<form method="POST">
  <input name="titre" value="<?= $ex['titre'] ?>" required>
  <input name="auteur" value="<?= $ex['auteur'] ?>" required>
  <input type="date" name="date" value="<?= $ex['date_creation'] ?>" required>
  <button type="submit">Modifier</button>
</form>
