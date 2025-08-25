<?php
$code = $_POST['code'];
$conn = new mysqli("localhost", "root", "", "camping");
$result = $conn->query("SELECT * FROM joueurs WHERE code='$code'");
if ($result->num_rows > 0) {
  header("Location: game.php?code=$code");
} else {
  echo "<h2>Code invalide</h2><p><a href='index.html'>Réessayer</a></p>";
}
?>
