
        // Gérez l'affichage du message popup
        function showMessagePopup(message) {
            document.getElementById("messageText").textContent = message;
            document.getElementById("messagePopup").style.display = "block";
        }

        // Gérez la fermeture du message popup
        function closeMessagePopup() {
            document.getElementById("messagePopup").style.display = "none";
        }

        // Écoutez le clic sur le bouton de vote
        document.getElementById("btnvote").addEventListener("click", function() {
            // Effectuez une requête AJAX pour voter
            // Vous devez mettre en place une requête AJAX ici et, en fonction de la réponse, appeler showMessagePopup().

            // Exemple de code AJAX (à personnaliser en fonction de votre logique) :
             $.ajax({
              url: 'vote.php',
              type: 'POST',
               data: { vote: true, id: 'candadat_id' },
                success: function(response) {
                  showMessagePopup(response);
               }
             });
        });

        // Écoutez le clic sur le bouton de fermeture du message popup
        document.getElementById("closePopupButton").addEventListener("click", function() {
            closeMessagePopup();
        });
   