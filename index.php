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
    <section>
      <h2>Velkommen</h2>
      <p>
        Her kan man lære om passwords, sociale medier og sikring af sine personlige oplysninger.
      </p>
    </section>

    <section>
      <h2>Gode råd</h2>
      <div class="card">
        <h3>Stærke passwords</h3>
        <p>
          Brug lange passwords og undgå at bruge det samme password flere steder.
        </p>
      </div>

      <div class="card">
        <h3>Pas på "phishing"</h3>
        <p>
          Klik ikke på mistænkelige links i mails eller beskeder og vær altid opmærksom
        </p>
      </div>
      <div class="card">
        <h3>Alt der bliver lagt på nettet, forbliver på nettet.</h3>
        <p>
          Internettet glemmer aldrig, og derfor skal du være betænksom når du deler oplysninger på nettet.
        </p>
      </div>
    </section>
  </main>

  <footer>
    <p>Alexander, Hael og Rasmus</p>
    <div id="haengelaas" class="haengelaas">🔒</div>
  </footer>

  <script>
    const box = document.getElementById("haengelaas");
    let x = 0;

    setInterval(function () {
      x = x + 10;
      if (x > 200) {
        x = 0;
      }
      box.style.marginLeft = x + "px";
    }, 200);
  </script>

</body>
</html>