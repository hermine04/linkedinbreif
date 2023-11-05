<?php
// Établissez la connexion à votre base de données MySQL
$servername = "localhost"; // Adresse du serveur MySQL (généralement "localhost")
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "linkdb"; // Nom de la base de données

// Créez une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez si la connexion a réussi
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Récupérez les données du formulaire
$nom = $_POST['nomc'];
$ville = $_POST['commune'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mtp'];


$date_inscription = date('Y-m-d H:i:s');
// Préparez la requête SQL pour insérer les données dans la table de la base de données
$sql = "INSERT INTO users (nomc, commune, email, mtp, date_inscription) VALUES ('$nom', '$ville', '$email', '$mot_de_passe', '$date_inscription')";

// Exécutez la requête SQL
if ($conn->query($sql) === TRUE) {
    // Redirigez l'utilisateur vers la page de connexion après une inscription réussie
    header("Location:passe.php");
    exit; // Assurez-vous de quitter le script pour éviter toute exécution ultérieure

} else {
    echo "Erreur lors de l'inscription : " . $conn->error; // Affichez une erreur en cas d'échec
}

// Fermez la connexion à la base de données
$conn->close();
?>
