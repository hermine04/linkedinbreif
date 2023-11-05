<?php
$servername = "localhost";
$username = "spcom1_koudou";
$password = "}3b3j2UnPn7]";
$dbname = "spcom1_koudoudb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "

INSERT INTO candidat (`candidat_id`, `user_ip`, `nom_prenom`, `photo`, `nomine`, `points`, `vote_time`) VALUES
(1, 0, 'DIVINE BLE', 'asset/photo_nomine/producteur_contenu/divine.jpg', 'producteur_contenu', 2, 0),
(2, 0, 'GODWIN SOOLA', 'asset/photo_nomine/producteur_contenu/godwin.JPG', 'producteur_contenu', 0, 0),
(3, 0, 'CAMILLE ETE', 'asset/photo_nomine/producteur_contenu/camille.JPG', 'producteur_contenu', 0, 0),
(4, 0, 'AUDREY BAMBA', 'asset/photo_nomine/producteur_contenu/audrey.jpg', 'producteur_contenu', 0, 0),
(5, 0, 'MARIE ELLA', 'asset/photo_nomine/contenu_rh/marie.jpg', 'contenu_rh', 0, 0),
(6, 0, ' AUDE ANNICETTE', 'asset/photo_nomine/contenu_rh/anicette.JPG', 'contenu_rh', 0, 0),
(7, 0, 'MANON ARIELLE', 'asset/photo_nomine/contenu_rh/arielle.jpg', 'contenu_rh', 0, 0),
(8, 0, 'RACHIDAT BROUAHIMA', 'asset/photo_nomine/contenu_rh/rachidat.jpg', 'contenu_rh', 0, 0),
(9, 0, 'BINNIE BINTOU', 'asset/photo_nomine/coach_expert/binnie.jpg', 'coach_expert', 0, 0),
(10, 0, 'VINCENT KADIO', 'asset/photo_nomine/coach_expert/kadio.jpg', 'coach_expert', 0, 0),
(11, 0, 'YANNICK BOKA', 'asset/photo_nomine/coach_expert/boka.jpg', 'coach_expert', 0, 0),
(12, 0, 'FREDERICK WILLIAMS', 'asset/photo_nomine/coach_expert/kingue.jpg', 'coach_expert', 0, 0),
(13, 0, 'GRACE ADJE', 'asset/photo_nomine/contributeur_linkedin/grace.JPG', 'contributeur_linkedin', 0, 0),
(14, 0, 'RAISSA KOUADIO', 'asset/photo_nomine/contributeur_linkedin/raissa.jpg', 'contributeur_linkedin', 0, 0),
(15, 0, 'YASMINE SIBAHI', 'asset/photo_nomine/contributeur_linkedin/yasmine.jpg', 'contributeur_linkedin', 0, 0),
(17, 0, 'JOSEPH NDRI', 'asset/photo_nomine/coach_expert/joseph.jpg', 'contributeur_linkedin', 0, 0),
";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
