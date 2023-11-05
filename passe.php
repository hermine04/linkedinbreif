<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bodconect">
    <main class="cover">
        <div class="movcnt">
    <div class="titconect"><h2 class="titeconnect">Connexion</h2></div>
   <div class="conect">
    <form action="authentication.php" method="POST">
      <input class="input" type="email" id="email" name="email" placeholder="Votre email..."><br>
      <input class="input" type="password" id="mtp" name="mtp" placeholder="Votre mot de passe..."><br>
      <input class="inputs" type="submit" value="Se connecter">
      <p class="ncount">Pas de compte <a class="lnksus" href="inscription.php"><span> s'inscrire</span></a></p>
      </form>
   </div>
</div>
</main>
</body>
</html>