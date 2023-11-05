<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bodconect">
     <form action="inscriptions.php" method="POST">
    <main class="cover">
        <div class="movcnts">
    <div class="titconect"><h2 class="titeconnect">Inscription</h2></div>
   <div class="conect">
      <input class="input" type="text" id="nom" name="nomc" placeholder="Votre nom complet..."><br>
      <input class="input" type="text" id="ville" name="commune" placeholder="Votre votre commune..."><br>
      <input class="input" type="email" id="email" name="email" placeholder="Votre email..."><br>
      <input class="input" type="password" id="mtp" name="mtp" placeholder="Votre mot de passe..."><br>
      <input class="inputs" type="submit" value="S'inscrire"><br>
      <a style="color: white; text-decoration:none;text-align: center;" href="passe.php">retour</a>
   </div>
</div>
</main>
</form>
</body>
</html>