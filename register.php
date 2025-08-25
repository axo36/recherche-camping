<?php
// Connexion à la base de données
$conn = new mysqli("localhost", "root", "", "camping");

// Vérifie la connexion
if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

// Génère un code unique
$code = uniqid("JOU-", true);

// Insère le joueur dans la base
$stmt = $conn->prepare("INSERT INTO joueurs (code, points) VALUES (?, 0)");
$stmt->bind_param("s", $code);
$stmt->execute();

// Affiche le code au joueur
echo "<link rel='stylesheet' href='style.css'>";
echo "<h2>Bienvenue dans l'aventure !</h2>";
echo "<p>Ton code joueur est :</p>";
echo "<div style='font-size:1.5rem; font-weight:bold; color:#6b4c3b;'>$code</div>";
echo "<p><a href='game.php?code=$code'>Commencer à jouer</a></p>";
?>
