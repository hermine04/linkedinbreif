<?php
// Connexion à la base de données (remplacez les valeurs par celles de votre base de données)
include "connect.php";
// Sélectionner les candidats ayant le rôle 'producteur_contenu'
$sql = "SELECT * FROM candidat WHERE nomine = 'contributeur_linkedin'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      $nom_prenom = $row["nom_prenom"];
      $photo = $row["photo"];
      $point = $row["points"];
      $id = $row["candidat_id"];
  
      // Afficher les informations du candidat dans le format HTML souhaité
      echo '<div class="pastvote">';
      echo '<div class="part2">';
      echo '<div class="part1"><img src="' .$photo. '" alt="photo" class="imgcrcle"></div>';
      echo '</div>';
      echo '<div class="sectionvote">';
      echo '<div class="votename"><h6 class="votee">' . $nom_prenom . '</h6></div>';
      echo '<div id="numvote" class="numvote">'. $point .'</div>';
      echo '<form action="vote.php" method="POST">';
      echo '<input type="hidden" name="id" value="' . $id . '">';
      echo '<div class="secvote"><button type="submit" id="btnvote" class="btnvote" name="vote">VOTER ICI</button></div>';
      echo '</form>';
      echo '</div>';
      echo '</div>';
  }
} else {
 echo "Aucun candidat avec le rôle 'producteur_contenu' trouvé.";
}
// Fermer la connexion à la base de données
$conn->close()
?>
</div>

