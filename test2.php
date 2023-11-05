<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="linkedin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/f31faae043.js" crossorigin="anonymous"></script>
  <title>linkedin Page</title>
</head>
<body>


<!-- ma premiere page-->
<section>
<section id="page1">
        <div class="top">
        <header>
        <nav class="navi">
        <div class="en-tete">
            <div class="bout">
                <img src="./images/logo-linkedin.png" alt="logo-likedin" class="ii">            
            <ul class="liste">
                <li class="ud" style="margin-left:20px"><a href="#" style="color:black">A PROPOS</a></li>
                <li class="ud"><a href="Accueil2.php"style="color:black">AWARDS</a></li>
                <li class="ud"><a href="" style="color:black">CONTACT</a></li>
            </ul>
            <button style="text-decoration:none;" class="itami">Prendre son ticket d'entree</button>
            </div>
        </div>
        
        </nav>
     </header>
     <div class="txt">
            <h2 style="font-size: 70px;">LINKEDIN LOCAL ABIDJAN</h2>
            <br>
            <p style="margin-left: 200px; font-size: 25px;">09 Septembre 2023 / Palm Club Hôtel</p>
            
            <button style="margin-left: 150px; margin-right: 10px;" class="itami">Prendre son ticket d'entree</button>
            <button style="background-color: white; border-color: white; color: red; border-radius:25px; width:250px; height:40px">PASS D'ENTREE 10.000FCFA</button>
     </div>
        </div>
</section>
  


<!--ma deuxieme page pour les information-->
   <section id="deux">    
 <div class="container-fluid">
  <div class="row">
<div class="secondPage">
  <div class="secr1">
    <h1 class="titlesnd">POURQUOI PARTICIPER À <br><u> LINKEDIN</u> LOCAL ABIDJAN</h1>

      <ul class="ma-liste">
          <li>Pourquoi apprendre à trouver un emploi grâce à linkedin</li>
          <li>Pour rencontrer nos amis virtuels et tisser des liens.</li>
          <li>Pour comprendre le fonctionnement de linkedin.</li>
          <li>Pour s'inspirer du parcours des autres.</li>
        </ul>
   
    <p class="p" style="color: yellow;font-size:20px;padding-bottom:20px">
      LinkedIn local, un concept créé en Australie approuvé par 
      <br>
      LinkedIn et
      repris dans plusieurs pays et qui est à sa quatrième édition en Côte
      d' Ivoire.
      </p>
      <div class="informsec1" style="display:flex;">
              <div class="datep" style="font-size: 25px; display:flex;">
              <i class="fa-solid fa-calendar-days"></i>
              <h5 class="datepara">SAMEDI 09 <br> SEPTEMBRE 2023</h5>
              </div>

              <div class="datep" style="font-size: 25px; padding-left:50px; display:flex;">
              <i class="fa-solid fa-street-view"></i>
              <h5 class="datepara">PALM CLUB HÔTEL <br>ABIDJAN COCODY</h5>
                  </div>
      </div>
  </div>
  <div class="sect2">
    <img src="./images/groupe.png" alt="illustration" class="illustsect2" style="width:900px; height:770px;">
  </div>
</div>
</div>
</div>
</section>
       <div id="slide">
            <section id="sectionThree">
                <div class="top">
                  <img src="./images/logo-awards.png" />
                  <h1>JE FAIS LE CHOIX DE MON INFLUENCEUR LINKEDIN LOCAL FAVORI</h1>
                </div>
                <div class="bottom">

                  <div class="categorie">
                    <a id="sFour" href="#sectionFour">  
                      <div class="catCircle">
                      Jeunes Producteurs de Contenus
                      </div>
                    </a>
                    <img src="./images/plandetravail.png" />
                  </div>

                  <div class="categorie">
                    <a id="sFive" href="#sectionFive">  
                    <div class="catCircle">
                    Créateurs de contenus RH motivation Consultant
                    </div>
                    </a>
                    <img src="./images/plandetravail.png" />
                  </div>
                  <div class="categorie">
                    <a id="sSix" href="#sectionSix">  
                    <div class="catCircle">
                    Coachs & Experts
                    </div>
                    </a>
                    <img src="./images/plandetravail.png" />
                  </div>
                  <div class="categorie">
                    <a id="sSeven" href="#sectionSeven">  
                    <div class="catCircle">
                    Contributeurs LinkedIn
                    </div>
                    </a>
                    <img src="images/plandetravail.png" />
                  </div>
                </div>
              </section>
    
              <section id="sectionFour">
                <div class="top">
                  <img src="images/logo-awards.png" />
                  <h1>JEUNES PRODUCTEURS DE CONTENUS</h1>
                </div>
            
                <div class="prev"></div>
                <div class="next"></div> 
                
                <div class="bottom">
                <?php
try {

  include "data.php";

    // Connexion à la base de données (à adapter avec vos paramètres)
    // include "../../data/database.php";

    // Vérifier si le formulaire de vote a été soumis


    // Requête SQL pour récupérer tous les candidat
    $requete = $connexion->query("SELECT * FROM candidat WHERE nomine = 'producteur_contenu'");


    // Récupérer les résultats de la requête sous forme d'un tableau associatif
    $candidats = $requete->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les candidats dans une liste
    foreach ($candidats as $candidat) {
        ?>
                  <div class="candidate">
                    <div class="candPic">
                      <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                        <h2><?= $candidat['nom_prenom'] ?></h2>
                        <div class="count"><?= $candidat['point'] ?></div>
                        <form action="vote.php" method="POST">
                            <input type="hidden" name="id" value="<?= $candidat['id'] ?>">
                            <button type="submit" class="candBtn" name="vote">VOTER</button>
                        </form>
                    </div>
                  </div>

                  <?php
        // echo "<li>Nom : " . $candidat['nom_prenom'] . " - Points : " . $candidat['point'] . "</li>";
    }
} catch (PDOException $e) {
    // En cas d'erreur de connexion à la base de données, afficher un pop-up d'erreur
    echo "<script>-
        Swal.fire({
            title: 'Erreur!',
            text: 'Une erreur est survenue lors de la connexion à la base de données.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>";
}
?>
        </section>
    
        <section id="sectionFive">
                  <div class="top">
                      <img src="./images/logo-awards.png" />
                      <h1>CREATEURS DE CONTENUS RH / MOTIVATION / CONSULTANTS</h1>
                  </div>

                  <div class="prev"></div>
                  <div class="next"></div>

                  <div class="bottom">
                      <?php
                      try {
            // Connexion à la base de données (à adapter avec vos paramètres)
            // include "../data/database.php";
            include "connect.php"; // Assurez-vous d'inclure le fichier data.php qui contient la connexion à la base de données

            // Requête SQL pour récupérer tous les candidats
            $requete = $connexion->query("SELECT * FROM candidat WHERE nomine = 'contenu_rh'");

            // Récupérer les résultats de la requête sous forme d'un tableau associatif
            $candidats = $requete->fetchAll(PDO::FETCH_ASSOC);

            // Afficher les candidats dans une liste
            foreach ($candidats as $candidat) {
                ?>
                <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                        <h2><?= $candidat['nom_prenom'] ?></h2>
                        <div class="count"><?= $candidat['point'] ?></div>
                        <form action="vote.php" method="POST">
                            <input type="hidden" name="id" value="<?= $candidat['id'] ?>">
                            <button class="candBtn" name="vote">VOTEZ ICI</button>
                        </form>
                    </div>
                </div>
                <?php
            }
        } catch (PDOException $e) {
            // En cas d'erreur de connexion à la base de données, afficher un pop-up d'erreur
            echo "<script>
                Swal.fire({
                    title: 'Erreur!',
                    text: 'Une erreur est survenue lors de la connexion à la base de données.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            </script>";
        }
        ?>
    </div>
</section>

    
              <section id="sectionSix">
                <div class="top">
                  <img src="./images/logo-awards.png" />
                  <h1>COACHS / EXPERTS</h1>
                </div>
                
                <div class="prev"></div>
                <div class="next"></div>

                <div class="bottom">
                <?php
try {
    // Connexion à la base de données (à adapter avec vos paramètres)
    // include "../data/database.php";
    include "data.php"; // Assurez-vous d'inclure le fichier contenant la connexion à la base de données

    // Vérifier si le formulaire de vote a été soumis

    // Requête SQL pour récupérer tous les candidats
    $requete = $connexion->query("SELECT * FROM candidat WHERE nomine = 'contributeur_linkedin'");

    // Récupérer les résultats de la requête sous forme d'un tableau associatif
    $candidats = $requete->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les candidats dans une liste
    foreach ($candidats as $candidat) {
        ?>
        <div class="candidate">
            <div class="candPic">
                <div class="smcandPic"></div>
            </div>
            <div class="candiInfos">
                <h2><?= $candidat['nom_prenom'] ?></h2>
                <div class="count"><?= $candidat['point'] ?></div>
                <form action="vote.php" method="POST">
                    <input type="hidden" name="id" value="<?= $candidat['id'] ?>">
                    <button class="candBtn" name="vote">VOTEZ ICI</button>
                </form>
            </div>
        </div>
        <?php
        // echo "<li>Nom : " . $candidat['nom_prenom'] . " - Points : " . $candidat['point'] . "</li>";
    }
} catch (PDOException $e) {
    // En cas d'erreur de connexion à la base de données, afficher un pop-up d'erreur
    echo "<script>
        Swal.fire({
            title: 'Erreur!',
            text: 'Une erreur est survenue lors de la connexion à la base de données.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>";
}
?>
              </section>
              <section id="sectionSeven">
    <div class="top">
        <img src="./images/logo-awards.png" />
        <h1>CONTRIBUTEURS LINKEDIN</h1>
    </div>

    <div class="prev"></div>
    <div class="next"></div>

    <div class="bottom">
        <?php
        try {
            // Connexion à la base de données (à adapter avec vos paramètres)
            // include "../data/database.php";
            include "data.php"; // Assurez-vous d'inclure le fichier contenant la connexion à la base de données

            // Requête SQL pour récupérer tous les candidats
            $requete = $connexion->query("SELECT * FROM candidat WHERE nomine = 'coach_expert'");

            // Récupérer les résultats de la requête sous forme d'un tableau associatif
            $candidats = $requete->fetchAll(PDO::FETCH_ASSOC);

            // Afficher les candidats dans une liste
            foreach ($candidats as $candidat) {
                ?>
                <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                        <h2><?= $candidat['nom_prenom'] ?></h2>
                        <div class="count"><?= $candidat['point'] ?></div>
                        <form action="vote.php" method="POST">
<input type="hidden" name="id" value="<?= $candidat['id'] ?>">
                            <button class="candBtn" name="vote">VOTEZ ICI</button>
                        </form>
                    </div>
                </div>
                <?php
            }
        } catch (PDOException $e) {
            // En cas d'erreur de connexion à la base de données, afficher un pop-up d'erreur
            echo "<script>
                Swal.fire({
                    title: 'Erreur!',
                    text: 'Une erreur est survenue lors de la connexion à la base de données.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            </script>";
        }
        ?>
    </div>
</section>

              </section>
          </div>
          </section>
          <footer id="foot">
            <img src="./images/logo-blanc-footer.png" />
            <div>
              <div class="contact">
                <h2>Contact Us</h2>
                <div>
                  <i class="fa-solid fa-phone-volume"></i><span>+225 07 48 42 47 25</span>
                </div>
                <div>
                  <i class="fa-solid fa-envelope"></i><span>studiosadinkra@gmail.com</span>
                </div>
                <div class="social">
                  <a href="https://facebook.com"><i class="fa-brands fa-square-facebook"></i></a>
                  <a href="https://instagram.com"><i class="fa-brands fa-square-instagram"></i></a>
                  <a href="https://twitter.com"><i class="fa-brands fa-square-x-twitter"></i></a>
                  <a href="https://linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
                </div>
              </div>
              <div class="info">
                <h2>Information</h2>
                <div>
                  <ul>
                    <li>About Us</li>
                    <li>Services</li>
                    <li>Team</li>
                    <li>Projets</li>
                    <li>Coaching</li>
                  </ul>
                  <ul>
                    <li>Brandblog</li>
                    <li>Feedback</li>
                    <li>Supports</li>
                    <li>Terms & Condition</li>
                    <li>Privacy Policy</li>
                  </ul> 
                </div>
              </div>
              <div class="newsletter">
                <h2>Newsletter</h2>
                <form action="" method="POST">
                  <input type="text" name="name" placeholder="Votre Nom" />
                  <input type="text" name="email" placeholder="Votre Email" />
                  <button type="submit">Recevez nos actualités</button>
                </form>
              </div>
            </div>
            <div id="fBottom">
              <span>&copy; X3M Ideas Limited <span id="now"></span>. Politique De Confidentialité</span>
              <span>All Rights Reserved.</span>
            </div>
          </footer> 
    </div>

</body>
<script src="slide.js"></script>
</html>