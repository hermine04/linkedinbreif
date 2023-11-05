<?php
session_start(); // Démarrez la session pour enregistrer l'heure du dernier vote de l'utilisateur

include "connecte.php"; // Vérifiez si l'utilisateur a déjà voté au cours des dernières 24 heures

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vote'])) {
    $id = $_POST['id']; // Supposons que vous ayez un moyen de stocker l'ID de l'utilisateur en session
    $userIp = $_SERVER['REMOTE_ADDR']; // Récupérer l'adresse IP de l'utilisateur

    // Vérifiez si l'utilisateur a déjà voté au cours des dernières 24 heures
    $mysqli = new mysqli("localhost", "spcom1_koudou", "}3b3j2UnPn7]", "spcom1_koudoudb");

    if ($mysqli->connect_error) {
        die("Échec de la connexion à la base de données : " . $mysqli->connect_error);
    }

    // Vérifiez si l'adresse IP de l'utilisateur existe déjà dans la table 'vote'
    $checkIpQuery = "SELECT COUNT(*) AS ip_count FROM vote WHERE ip = ? AND DATE_SUB(NOW(), INTERVAL 1 MINUTE) <= vote_date";

    if ($stmt = $mysqli->prepare($checkIpQuery)) {
        $stmt->bind_param("s", $userIp);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $ipCount = $row['ip_count'];

            if ($ipCount > 0) {
                header("Location: accueil.php?voted=0");
            } else {
                // Si l'utilisateur n'a pas déjà voté au cours des dernières 24 heures, mettez à jour le champ 'point' du candidat
                $updateVoteQuery = "UPDATE candidat SET points = points + 1 WHERE candidat_id = ?";

                if ($stmt = $mysqli->prepare($updateVoteQuery)) {
                    $stmt->bind_param("i", $id);

                    if ($stmt->execute()) {
                        // Enregistrez le vote de l'utilisateur dans la table 'votes'
                        $insertVoteQuery = "INSERT INTO vote (candidat_id, vote_date, ip) VALUES (?, NOW(), ?)";

                        if ($stmt = $mysqli->prepare($insertVoteQuery)) {
                            $stmt->bind_param("is", $id, $userIp);

                            if ($stmt->execute()) {
                             // Redirigez l'utilisateur vers accueil.php après un vote réussi
                                header("Location: accueil.php?voted=1");
                            } else {
                                echo "Erreur lors de l'enregistrement du vote : " . $stmt->error;
                            }
                        } else {
                            echo "Erreur de préparation de la requête d'insertion : " . $mysqli->error;
                        }
                    } else {
                        echo "Erreur lors de la mise à jour des points : " . $stmt->error;
                    }
                } else {
                    echo "Erreur de préparation de la requête de mise à jour : " . $mysqli->error;
                }
            }
        } else {
            echo "Erreur lors de la vérification de l'adresse IP précédente : " . $stmt->error;
        }
    } else {
        echo "Erreur de préparation de la requête de vérification de l'adresse IP précédente : " . $mysqli->error;
    }
    // Ne fermez pas la connexion ici
} // Fin de la vérification du vote

// Fermez la connexion à la base de données ici

?>
