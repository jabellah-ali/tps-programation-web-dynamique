<?php
$erreur = '';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nom = $_POST['nom'] ?? '';
  $email = $_POST['email'] ?? '';
  $message = $_POST['message'] ?? '';
  if ($nom && $email && $message) {
    echo "<p><strong>Nom :</strong> " . htmlspecialchars($nom) . "</p>";
    echo "<p><strong>Email :</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Message :</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";
  } else {
    $erreur = "Tous les champs sont obligatoires.";
  }
}
?>
<form method="POST">
  <input type="text" name="nom" placeholder="Nom"><br>
  <input type="email" name="email" placeholder="Email"><br>
  <textarea name="message" placeholder="Votre message"></textarea><br>
  <button type="submit">Envoyer</button>
</form>
<?php if ($erreur) echo "<p style='color:red;'>$erreur</p>"; ?>
