<!DOCTYPE html>
<html lang="da">
<head>
  <meta charset="UTF-8">
  <title>SAFE</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <h1>SAFE</h1>
    <nav>
      <a href="index.php">Forside</a>
      <a href="test.php">Kodegenerator & test af kodeord</a>
        <a href="dict.php">Ordbog</a>
    </nav>
  </header>

  <main>
        <h2>SAFE - Kodegenerator & test af kodeord</h2>
        <h3>Nedenfor kan du indtaste dit kodeord, og få vurderet sikkerheden.</h3>


    <section>
      <h2>Test dit kodeord</h2>
      <p>
        Indtast dit kodeord og få et svar på din sikkerheden af dit kodeord.
      </p>
      <form method="POST" class="form-box">
        <label for="password">Indtast dit kodeord:</label>
        <input type="password" id="password" name="password" required>
        <button type="button" class="btn" onclick="vurderKodeord()">Send</button>
        <div id="resultat" class="result-box"></div>
    </section>
  </main>

  <footer>
    <p>Alexander, Hael og Rasmus</p>
  </footer>

  <script>
    function vurderKodeord() {
      const password = document.getElementById("password").value;
      const resultat = document.getElementById("resultat");

      let score = 0;
      let msg = "";

      if (password.length >= 8) score++;
      if (password.length >= 12) score++;
      if (/[a-z]/.test(password)) score++;
      if (/[A-Z]/.test(password)) score++;
      if (/[0-9]/.test(password)) score++;
      if (/[^A-Za-z0-9]/.test(password)) score++;

      if (password.length < 8) {
        msg = "Svagt kodeord: Det bør være mindst 8 tegn langt.";
      } else if (score <= 3) {
        msg = "Svagt kodeord: Brug både store og små bogstaver, tal og specialtegn.";
      } else if (score <= 5) {
        msg = "Stærkt kodeord: Dit kodeord ser sikkert ud.";
      }
      resultat.textContent = msg;
    }
  </script>
</body>
</html>