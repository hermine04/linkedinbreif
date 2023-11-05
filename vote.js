$(document).ready(function () {
  // Gérer le clic sur le bouton de vote
  $(".btnvote").on("click", function (event) {
      event.preventDefault();

      var candidatID = $(this).data("candidat-id");
      
      // Vérifier si l'utilisateur a déjà voté pour ce candidat (en utilisant des cookies ou une session)
      var hasVoted = checkIfUserHasVoted(candidatID);
      
      if (hasVoted) {
          alert("Vous ne pouvez pas voter pour le même candidat deux fois.");
      } else {
          // Effectuer la mise à jour du compteur côté serveur via une requête AJAX
          $.ajax({
              url: "vote.php", // L'URL de votre script PHP de gestion des votes
              method: "POST",
              data: { candidatID: candidatID },
              success: function (response) {
                  // Mettre à jour le compteur de votes
                  var numVoteElement = $(this).closest(".pastvote").find(".numvote");
                  var currentVotes = parseInt(numVoteElement.text());
                  numVoteElement.text(currentVotes + 1);
                  
                  // Marquer l'utilisateur comme ayant voté pour ce candidat (utilisation de cookies ou d'une session)
                  markUserAsVoted(candidatID);
              },
              error: function (error) {
                  alert("Une erreur s'est produite lors du vote.");
              }
          });
      }
  });
});

function checkIfUserHasVoted(candidatID) {
  // Vous pouvez implémenter la logique pour vérifier si l'utilisateur a déjà voté pour ce candidat (utilisation de cookies ou d'une session)
  // Retournez true si l'utilisateur a déjà voté, sinon false.
  return false;
}

function markUserAsVoted(candidatID) {
  // Vous pouvez implémenter la logique pour marquer l'utilisateur comme ayant voté pour ce candidat (utilisation de cookies ou d'une session)
}
