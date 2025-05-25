<?php
$score = null;
$questions = [
  'q1' => ['question' => "Capitale de la France ?", 'réponse' => 'Paris'],
  'q2' => ['question' => "2 + 2 = ?", 'réponse' => '4'],
  'q3' => ['question' => "Langage serveur ? (PHP/JS)", 'réponse' => 'PHP'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $score = 0;
  foreach ($questions as $cle => $val) {
    if (isset($_POST[$cle]) && strcasecmp(trim($_POST[$cle]), $val['réponse']) === 0) {
      $score++;
    }
  }
  echo "<p>Score : $score / " . count($questions) . "</p>";
}
?>

<form method="POST">
  <?php foreach ($questions as $cle => $val): ?>
    <label><?= $val['question'] ?></label><br>
    <input type="text" name="<?= $cle ?>"><br><br>
  <?php endforeach; ?>
  <button type="submit">Valider</button>
</form>
