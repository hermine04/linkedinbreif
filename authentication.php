<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>échec</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color:#e8001f;
            font-size:x-large;
            background-color: #f0f0f0; /* Ajoutez une couleur de fond si vous le souhaitez */
        }

        .error-message {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .retour {
            text-decoration: none;
            background-color: #2867b2;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size:large;
        }
    </style>
</head>
<body>
    <?php
    // Établissez la connexion à votre base de données MySQL
    $servername = "localhost";
$username = "spcom1_koudou";
$password = "}3b3j2UnPn7]";
$dbname = "spcom1_koudoudb"; // Nom de la base de données
    
    // Créez une connexion à la base de données
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Vérifiez si la connexion a réussi
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }
    
    // Récupérez les données du formulaire de connexion
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mtp'];
    
    // Préparez la requête SQL pour vérifier les informations de connexion
    $sql = "SELECT * FROM users WHERE email='$email' AND mtp='$mot_de_passe'";
    
    // Exécutez la requête SQL
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Les informations de connexion sont correctes, redirigez l'utilisateur vers la page d'accueil
        header ("Location: accueil.php");
        exit; // Assurez-vous de quitter le script pour éviter toute exécution ultérieure
    } else {
        // Les informations de connexion sont incorrectes, affichez un message d'erreur
        echo "L'utilisateur n'existe pas. ";
        echo '<a class="retour" href="passe.php">Retour à la page de connexion</a>';
    }
    
    // Fermez la connexion à la base de données
    $conn->close();
    ?>
</body>
</html>
