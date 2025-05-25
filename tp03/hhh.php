<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = ""; // mot de passe de MySQL (laisse vide s’il n’y en a pas)
$dbname = "ecole";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion: " . $conn->connect_error);
}

// Exécuter la requête
$sql = "SELECT * FROM talib";
$result = $conn->query($sql);

// Afficher les résultats
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>CNE</th><th>Nom</th><th>Prénom</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["cne"]. "</td><td>" . $row["nom"]. "</td><td>" . $row["prenom"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucun résultat";
}

$conn->close();
?>
