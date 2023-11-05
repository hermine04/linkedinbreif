<?php
// Connexion à la base de données (remplacez les valeurs par celles de votre base de données)
include "connect.php";

// Vérifiez si l'ID du candidat est passé en tant que paramètre
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Sélectionnez l'image du candidat en fonction de son ID
    $sql = "SELECT photo, mime_type FROM candidat WHERE candidat_id = $id";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imageData = $row['photo'];
        $mimeType = $row['mime_type'];

        echo 'Type MIME : ' . $mimeType . '<br>';
        echo 'Longueur des données binaires : ' . strlen($imageData) . ' octets';
        // Spécifiez le type de contenu en tant qu'image
        header("Content-Type: $mimeType");

        // Affichez les données binaires de l'image
        echo $imageData;
    } else {
        // Gérer le cas où l'ID du candidat n'a pas été trouvé
        echo 'Image non trouvée';
    }
    
    // Fermez la connexion à la base de données
    $conn->close();
}
?>
