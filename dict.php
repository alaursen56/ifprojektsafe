<?php
$conn = new mysqli("localhost", "root", "", "db");

$search = $_GET['search'] ?? '';
$result = null;

if ($search !== '') {
    $idk = $conn->prepare("
        SELECT ord, betydning
        FROM ordbog
        WHERE ord LIKE ? OR betydning LIKE ?
    ");
    $like = "%$search%";
    $idk->bind_param("ss", $like, $like);
    $idk->execute();
    $result = $idk->get_result();
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
  <meta charset="UTF-8">
  <title>SAFE - Ordbog</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <h1>SAFE</h1>
      <nav>
        <a href="index.php">Forside</a>
        <a href="test.php">Test af kodeord</a>
        <a href="dict.php">Ordbog</a>
      </nav>
    </nav>
  </header>

  <main class="forside">
    <h2>SAFE - Ordbog</h2>
    <h3>Nedenfor kan du søge efter ord i søgefeltet, og få dens betydning.</h3>

    <form method="GET" class="form-box">
      <label for="search">Søg efter et ord:</label>
      <input type="text" id="search" name="search" value="<?php echo htmlspecialchars($search); ?>">
      <button type="submit" class="btn">Søg</button>
    </form>

    <div class="dictionary-list">
      <?php
      if ($search !== '') {
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<div class='card'>";
                  echo "<h3>" . htmlspecialchars($row['ord']) . "</h3>";
                  echo "<p>" . htmlspecialchars($row['betydning']) . "</p>";
                  echo "</div>";
              }
          } else {
              echo "<p>Ingen resultater fundet.</p>";
          }
      }
      ?>
    </div>
  </main>

  <footer>
    <p>Alexander, Hael og Rasmus</p>
  </footer>
</body>
</html>

<?php
$conn->close();
?>
