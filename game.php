<?php
$code = $_GET['code'];
$animaux = ["lapin", "renard", "oiseau"];
echo "<link rel='stylesheet' href='style.css'>";
echo "<h2>Bienvenue, $code !</h2>";
echo "<div class='checklist'>";
foreach ($animaux as $animal) {
  echo "<label class='check-item'>
          <input type='checkbox'>
          <img src='images/$animal.jpg' alt='$animal' width='80' style='margin-right:10px;'> $animal
        </label>";
}
echo "</div>";
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="code" value="<?php echo $code; ?>">
  <label>📸 Envoie une photo avec l’animal :</label>
  <input type="file" name="photo" required>
  <button type="submit">Envoyer</button>
</form>
