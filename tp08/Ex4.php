<?php
session_start();
$authentifie = false;
if (isset($_POST['user'], $_POST['pass'])) {
  if ($_POST['user'] === 'admin' && $_POST['pass'] === '1234') {
    $_SESSION['user'] = $_POST['user'];
  } else {
    echo "<p>Identifiants incorrects</p>";
  }
}

if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: ' . $_SERVER['PHP_SELF']);
  exit;
}

if (isset($_SESSION['user'])) {
  echo "<h2>Bienvenue " . $_SESSION['user'] . "</h2>";
  echo "<a href='?logout=1'>Déconnexion</a>";
} else {
?>
<form method="POST">
  <input type="text" name="user" placeholder="Identifiant"><br>
  <input type="password" name="pass" placeholder="Mot de passe"><br>
  <button type="submit">Se connecter</button>
</form>
<?php } ?>
