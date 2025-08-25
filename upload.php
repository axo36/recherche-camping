<?php
$code = $_POST['code'];
$photo = $_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/$photo");

$conn = new mysqli("localhost", "root", "", "camping");
$conn->query("UPDATE joueurs SET points = points + 10 WHERE code='$code'");
echo "<link rel='stylesheet' href='style.css'>";
echo "<h2>Photo reçue ! +10 points 🎉</h2>";
echo "<p><a href='game.php?code=$code'>Retour au jeu</a></p>";
?>
