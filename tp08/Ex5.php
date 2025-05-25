<?php
$fichier = 'livre.txt';

if (isset($_POST['nom'], $_POST['message'])) {
  $nom = strip_tags($_POST['nom']);
  $msg = strip_tags($_POST['message']);
  $date = date('Y-m-d H:i');
  file_put_contents($fichier, "$date | $nom : $msg\n", FILE_APPEND);
}

echo "<h3>Laisser un message</h3>";
?>
<form method="POST">
  <input type="text" name="nom" placeholder="Votre nom" required><br>
  <textarea name="message" placeholder="Votre message" required></textarea><br>
  <button type="submit">Envoyer</button>
</form>

<h3>Messages :</h3>
<pre>
<?php if (file_exists($fichier)) echo htmlspecialchars(file_get_contents($fichier)); ?>
</pre>
