<?php
// Connexion à la base de données
$conn = new mysqli("localhost", "root", "", "camping");

// Génère un identifiant unique
$code = uniqid("joueur_");

// Enregistre le joueur
$conn->query("INSERT INTO joueurs (code, points) VALUES ('$code', 0)");

// Affiche le code à l'écran
echo "<!DOCTYPE html>
<html lang='fr'>
<head>
  <meta charset='UTF-8'>
  <title>Inscription réussie</title>
  <link rel='stylesheet' href='style.css'>
</head>
<body>
  <h1>🎉 Inscription réussie !</h1>
  <form>
    <label>Ton code joueur :</label>
    <input type='text' value='$code' readonly style='width:100%;padding:1rem;font-size:1.2rem;'>
  </form>
  <p style='text-align:center;margin-top:2rem;'>Note bien ton code ! Tu en auras besoin pour te connecter.</p>
  <p style='text-align:center;'><a href='index.html'>Retour à l'accueil</a></p>
</body>
</html>";
?>
