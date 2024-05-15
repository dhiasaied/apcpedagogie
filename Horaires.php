<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>apcpedagogie</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="https://apcpedagogie.com/wp-content/uploads/2023/08/apc_.png" type="image/gif" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="css/Parents.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://apcpedagogie.com/wp-content/uploads/2023/08/apc_.png" width="50" height="50" class="d-inline-block align-top" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="color: white;">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cours_loading.php" style="color: white;">COURS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Exercices_loading.php" style="color: white;">EXERCICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="QCM_loading.php" style="color: white;">QCM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Tutoriels_loading.php" style="color: white;">TUTORIELS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="videos_loading.php" style="color: white;">VIDÉOS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
              <i class="fas fa-cog"></i> Paramètres
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="deconnexion.php" style="color: black;"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Emploi du temps - 1ème année -->
  <div class="container-fluid mt-5">
  <h1 data-aos="fade-up" class="mb-4 display-4 fw-bold text-center text-primary">
    <i class="fas fa-clock"></i> Horaires des étudiants
</h1>
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
          <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Emploi du temps - Première année A      
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - Première année A</h1>
            <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
              <th scope="col">Heure</th>
              <th scope="col">Lundi</th>
              <th scope="col">Mardi</th>
              <th scope="col">Mercredi</th>
              <th scope="col">Jeudi</th>
              <th scope="col">Vendredi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">8:00 - 9:30</th>
              <td>Mathématiques</td>
              <td>Français</td>
              <td>Histoire</td>
              <td>Anglais</td>
              <td>Géographie</td>
            </tr>
            <tr>
              <th scope="row">9:30 - 11:00</th>
              <td>Français</td>
              <td>Mathématiques</td>
              <td>Anglais</td>
              <td>Géographie</td>
              <td>Histoire</td>
            </tr>
            <tr>
              <th scope="row">11:30 - 13:00</th>
              <td>EPS</td>
              <td>Physique</td>
              <td>Chimie</td>
              <td>SVT</td>
              <td>Arts Plastiques</td>
            </tr>
            <tr>
              <th scope="row">14:00 - 15:30</th>
              <td>SVT</td>
              <td>EPS</td>
              <td>Mathématiques</td>
              <td>Français</td>
              <td>Anglais</td>
            </tr>
          </tbody>
        </table>
      </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Emploi du temps - Première année B      
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - Première année B</h1>
            <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
            <th scope="col">Heures</th>
            <th scope="col">Lundi</th>
            <th scope="col">Mardi</th>
            <th scope="col">Mercredi</th>
            <th scope="col">Jeudi</th>
            <th scope="col">Vendredi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8h00 - 9h00</td>
            <td>Mathématiques</td>
            <td>Français</td>
            <td>Physique</td>
            <td>Anglais</td>
            <td>Chimie</td>
          </tr>
          <tr>
            <td>9h00 - 10h00</td>
            <td>Français</td>
            <td>Mathématiques</td>
            <td>Chimie</td>
            <td>Physique</td>
            <td>Anglais</td>
          </tr>
          <tr>
            <td>10h00 - 11h00</td>
            <td>Histoire</td>
            <td>Anglais</td>
            <td>Mathématiques</td>
            <td>Français</td>
            <td>Physique</td>
          </tr>
          <tr>
            <td>11h00 - 12h00</td>
            <td>Géographie</td>
            <td>Physique</td>
            <td>Français</td>
            <td>Mathématiques</td>
            <td>Chimie</td>
          </tr>
          <tr>
            <td>12h00 - 13h00</td>
            <td>EPS</td>
            <td>Arts plastiques</td>
            <td>SVT</td>
            <td>Philosophie</td>
            <td>Éducation civique</td>
          </tr>
        </tbody>
      </table>
    </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Emploi du temps - Première année C      
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - Première année C </h1>
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                <th scope="col">Heures</th>
                <th scope="col">Lundi</th>
                <th scope="col">Mardi</th>
                <th scope="col">Mercredi</th>
                <th scope="col">Jeudi</th>
                <th scope="col">Vendredi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>8h00 - 9h00</td>
                <td>Mathématiques</td>
                <td>Français</td>
                <td>Physique</td>
                <td>Anglais</td>
                <td>Chimie</td>
              </tr>
              <tr>
                <td>9h00 - 10h00</td>
                <td>Français</td>
                <td>Mathématiques</td>
                <td>Chimie</td>
                <td>Physique</td>
                <td>Anglais</td>
              </tr>
              <tr>
                <td>10h00 - 11h00</td>
                <td>Histoire</td>
                <td>Anglais</td>
                <td>Mathématiques</td>
                <td>Français</td>
                <td>Physique</td>
              </tr>
              <tr>
                <td>11h00 - 12h00</td>
                <td>Géographie</td>
                <td>Physique</td>
                <td>Français</td>
                <td>Mathématiques</td>
                <td>Chimie</td>
              </tr>
              <tr>
                <td>12h00 - 13h00</td>
                <td>EPS</td>
                <td>Arts plastiques</td>
                <td>SVT</td>
                <td>Philosophie</td>
                <td>Éducation civique</td>
              </tr>
              <tr>
                <td>13h00 - 14h00</td>
                <td>Pause déjeuner</td>
                <td>Pause déjeuner</td>
                <td>Pause déjeuner</td>
                <td>Pause déjeuner</td>
                <td>Pause déjeuner</td>
              </tr>
              <tr>
                <td>14h00 - 15h00</td>
                <td>Langue étrangère 2</td>
                <td>Sciences économiques et sociales</td>
                <td>Informatique</td>
                <td>Langue vivante 1</td>
                <td>Éducation physique et sportive</td>
              </tr>
              <tr>
                <td>15h00 - 16h00</td>
                <td>Sciences de l'ingénieur</td>
                <td>Philosophie</td>
                <td>SVT</td>
                <td>Mathématiques</td>
                <td>Arts plastiques</td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Emploi du temps - Première année D      
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - Première année D  </h1>
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                <th scope="col">Heures</th>
            <th scope="col">Lundi</th>
            <th scope="col">Mardi</th>
            <th scope="col">Mercredi</th>
            <th scope="col">Jeudi</th>
            <th scope="col">Vendredi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8h00 - 9h00</td>
            <td>Mathématiques</td>
            <td>Français</td>
            <td>Physique</td>
            <td>Anglais</td>
            <td>Chimie</td>
          </tr>
          <tr>
            <td>9h00 - 10h00</td>
            <td>Français</td>
            <td>Mathématiques</td>
            <td>Chimie</td>
            <td>Physique</td>
            <td>Anglais</td>
          </tr>
          <tr>
            <td>10h00 - 11h00</td>
            <td>Histoire</td>
            <td>Anglais</td>
            <td>Mathématiques</td>
            <td>Français</td>
            <td>Physique</td>
          </tr>
          <tr>
            <td>11h00 - 12h00</td>
            <td>Géographie</td>
            <td>Physique</td>
            <td>Français</td>
            <td>Mathématiques</td>
            <td>Chimie</td>
          </tr>
          <tr>
            <td>12h00 - 13h00</td>
            <td>EPS</td>
            <td>Arts plastiques</td>
            <td>SVT</td>
            <td>Philosophie</td>
            <td>Éducation civique</td>
          </tr>
          <tr>
            <td>13h00 - 14h00</td>
            <td>Pause déjeuner</td>
            <td>Pause déjeuner</td>
            <td>Pause déjeuner</td>
            <td>Pause déjeuner</td>
            <td>Pause déjeuner</td>
          </tr>
          <tr>
            <td>14h00 - 15h00</td>
            <td>Langue étrangère 2</td>
            <td>Sciences économiques et sociales</td>
            <td>Informatique</td>
            <td>Langue vivante 1</td>
            <td>Éducation physique et sportive</td>
          </tr>
          <tr>
            <td>15h00 - 16h00</td>
            <td>Sciences de l'ingénieur</td>
            <td>Philosophie</td>
            <td>SVT</td>
            <td>Mathématiques</td>
            <td>Arts plastiques</td>
          </tr>
          <tr>
            <td>16h00 - 17h00</td>
            <td>Chimie organique</td>
            <td>Littérature</td>
            <td>Économie</td>
            <td>Langue étrangère 1</td>
            <td>Théâtre</td>
          </tr>
        </tbody>
      </table>
    </div>
        </div>
      </div>
    </div>
  </div>





  <!-- Emploi du temps - 2ème année -->
  <div class="container-fluid mt-5">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
          <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
              Emploi du temps - 2ème année informatique
            </button>
          </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - 2ème année informatique</h1>
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Heure</th>
                  <th scope="col">Lundi</th>
                  <th scope="col">Mardi</th>
                  <th scope="col">Mercredi</th>
                  <th scope="col">Jeudi</th>
                  <th scope="col">Vendredi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">8h-10h</th>
                  <td>Algorithmique</td>
                  <td>Base de données</td>
                  <td>Programmation avancée</td>
                  <td></td>
                  <td>Mathématiques discrètes</td>
                </tr>
                <tr>
                  <th scope="row">10h-12h</th>
                  <td>Base de données</td>
                  <td>Programmation avancée</td>
                  <td>Algorithmique</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">14h-16h</th>
                  <td>Mathématiques discrètes</td>
                  <td>Algorithmique</td>
                  <td>Base de données</td>
                  <td>Programmation avancée</td>
                  <td>Projet informatique</td>
                </tr>
                <tr>
                  <th scope="row">16h-18h</th>
                  <td>Projet informatique</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
          <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
              Emploi du temps - 2ème année sciences
            </button>
          </h2>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - 2ème année sciences</h1>
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Heure</th>
                  <th scope="col">Lundi</th>
                  <th scope="col">Mardi</th>
                  <th scope="col">Mercredi</th>
                  <th scope="col">Jeudi</th>
                  <th scope="col">Vendredi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">8h-10h</th>
                  <td>Chimie organique</td>
                  <td>Physique quantique</td>
                  <td>Biologie cellulaire</td>
                  <td></td>
                  <td>Mathématiques avancées</td>
                </tr>
                <tr>
                  <th scope="row">10h-12h</th>
                  <td>Physique quantique</td>
                  <td>Biologie cellulaire</td>
                  <td>Chimie organique</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">14h-16h</th>
                  <td>Mathématiques avancées</td>
                  <td>Chimie organique</td>
                  <td>Physique quantique</td>
                  <td>Biologie cellulaire</td>
                  <td>Travaux pratiques</td>
                </tr>
                <tr>
                  <th scope="row">16h-18h</th>
                  <td>Travaux pratiques</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
          <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
              Emploi du temps - 2ème année Mathématiques
            </button>
          </h2>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - 2ème année Mathématiques</h1>
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Heure</th>
                  <th scope="col">Lundi</th>
                  <th scope="col">Mardi</th>
                  <th scope="col">Mercredi</th>
                  <th scope="col">Jeudi</th>
                  <th scope="col">Vendredi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">8h-10h</th>
                  <td>Algèbre linéaire</td>
                  <td>Probabilités et statistiques</td>
                  <td>Calcul différentiel</td>
                  <td></td>
                  <td>Topologie</td>
                </tr>
                <tr>
                  <th scope="row">10h-12h</th>
                  <td>Analyse complexe</td>
                  <td>Calcul intégral</td>
                  <td>Algèbre linéaire</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">14h-16h</th>
                  <td>Probabilités et statistiques</td>
                  <td>Algèbre linéaire</td>
                  <td>Analyse complexe</td>
                  <td>Calcul différentiel</td>
                  <td>Projet de recherche</td>
                </tr>
                <tr>
                  <th scope="row">16h-18h</th>
                  <td>Projet de recherche</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
          <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
              Emploi du temps - 2ème année technique
            </button>
          </h2>
        </div>
        <div id="collapseEight" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - 2ème année technique</h1>
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Heure</th>
                  <th scope="col">Lundi</th>
                  <th scope="col">Mardi</th>
                  <th scope="col">Mercredi</th>
                  <th scope="col">Jeudi</th>
                  <th scope="col">Vendredi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">8h-10h</th>
                  <td>Technologie des réseaux</td>
                  <td>Algorithmique appliquée</td>
                  <td>Langage de programmation</td>
                  <td></td>
                  <td>Systèmes embarqués</td>
                </tr>
                <tr>
                  <th scope="row">10h-12h</th>
                  <td>Langage de programmation</td>
                  <td>Systèmes embarqués</td>
                  <td>Technologie des réseaux</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">14h-16h</th>
                  <td>Conception des bases de données</td>
                  <td>Technologie des réseaux</td>
                  <td>Algorithmique appliquée</td>
                  <td>Langage de programmation</td>
                  <td>Projets de groupe</td>
                </tr>
                <tr>
                  <th scope="row">16h-18h</th>
                  <td>Projets de groupe</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



   <!-- Emploi du temps - 3ème année -->
   <div class="container-fluid mt-5">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
          <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
              Emploi du temps - 3ème année informatique
            </button>
          </h2>
        </div>
        <div id="collapseNine" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - 3ème année informatique</h1>
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Heure</th>
                  <th scope="col">Lundi</th>
                  <th scope="col">Mardi</th>
                  <th scope="col">Mercredi</th>
                  <th scope="col">Jeudi</th>
                  <th scope="col">Vendredi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">8h-10h</th>
                  <td>Programmation avancée</td>
                  <td>Algorithmique</td>
                  <td>Base de données</td>
                  <td></td>
                  <td>Mathématiques discrètes</td>
                </tr>
                <tr>
                  <th scope="row">10h-12h</th>
                  <td>Base de données</td>
                  <td>Programmation avancée</td>
                  <td>Algorithmique</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">14h-16h</th>
                  <td>Mathématiques discrètes</td>
                  <td>Algorithmique</td>
                  <td>Base de données</td>
                  <td>Programmation avancée</td>
                  <td>Projet informatique</td>
                </tr>
                <tr>
                  <th scope="row">16h-18h</th>
                  <td>Projet informatique</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
          <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
              Emploi du temps - 3ème année sciences
            </button>
          </h2>
        </div>
        <div id="collapseTen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - 3ème année sciences</h1>
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Heure</th>
                  <th scope="col">Lundi</th>
                  <th scope="col">Mardi</th>
                  <th scope="col">Mercredi</th>
                  <th scope="col">Jeudi</th>
                  <th scope="col">Vendredi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">8h-10h</th>
                  <td>Chimie organique</td>
                  <td>Physique quantique</td>
                  <td>Biologie cellulaire</td>
                  <td></td>
                  <td>Mathématiques avancées</td>
                </tr>
                <tr>
                  <th scope="row">10h-12h</th>
                  <td>Physique quantique</td>
                  <td>Biologie cellulaire</td>
                  <td>Chimie organique</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">14h-16h</th>
                  <td>Mathématiques avancées</td>
                  <td>Chimie organique</td>
                  <td>Physique quantique</td>
                  <td>Biologie cellulaire</td>
                  <td>Travaux pratiques</td>
                </tr>
                <tr>
                  <th scope="row">16h-18h</th>
                  <td>Travaux pratiques</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
          <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
              Emploi du temps - 3ème année Mathématiques
            </button>
          </h2>
        </div>
        <div id="collapseEleven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - 3ème année Mathématiques</h1>
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Heure</th>
                  <th scope="col">Lundi</th>
                  <th scope="col">Mardi</th>
                  <th scope="col">Mercredi</th>
                  <th scope="col">Jeudi</th>
                  <th scope="col">Vendredi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">8h-10h</th>
                  <td>Probabilités et statistiques</td>
                  <td>Algèbre linéaire</td>
                  <td>Analyse complexe</td>
                  <td>Calcul différentiel</td>
                  <td>Projet de recherche</td>
                </tr>
                <tr>
                  <th scope="row">10h-12h</th>
                  <td>Analyse complexe</td>
                  <td>Calcul intégral</td>
                  <td>Algèbre linéaire</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">14h-16h</th>
                  <td>Algèbre linéaire</td>
                  <td>Probabilités et statistiques</td>
                  <td>Calcul différentiel</td>
                  <td></td>
                  <td>Topologie</td>
                </tr>
                <tr>
                  <th scope="row">16h-18h</th>
                  <td>Projet de recherche</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
          <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
              Emploi du temps - 3ème année technique
            </button>
          </h2>
        </div>
        <div id="collapseTwelve" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Emploi du temps - 3ème année technique</h1>
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Heure</th>
                  <th scope="col">Lundi</th>
                  <th scope="col">Mardi</th>
                  <th scope="col">Mercredi</th>
                  <th scope="col">Jeudi</th>
                  <th scope="col">Vendredi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">8h-10h</th>
                  <td>Technologie des réseaux</td>
                  <td>Algorithmique appliquée</td>
                  <td>Langage de programmation</td>
                  <td></td>
                  <td>Systèmes embarqués</td>
                </tr>
                <tr>
                  <th scope="row">10h-12h</th>
                  <td>Conception des bases de données</td>
                  <td>Technologie des réseaux</td>
                  <td>Algorithmique appliquée</td>
                  <td>Langage de programmation</td>
                  <td>Projets de groupe</td>
                </tr>
                <tr>
                  <th scope="row">14h-16h</th>
                  <td>Langage de programmation</td>
                  <td>Systèmes embarqués</td>
                  <td>Technologie des réseaux</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">16h-18h</th>
                  <td>Projets de groupe</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>









<footer class="text-light py-4" style="background-color: black;margin-top:6%">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-12 text-center">
        <h1>apcpedagogie</h1>
        <p>votre guide de formation.</p>
      </div>
      <div class="col-md-12 text-center">
        <ul class="list-inline">
          <a href="https://www.facebook.com/"><img src="images/icon/facebook.png" alt="Facebook" style="width: 25px;height: 25px;"></a>
          <a href="https://www.gmail.com/"><img src="images/icon/gmail.png" alt="Email" style="width: 25px;height: 25px;"></a>
          <a href="https://www.Twitter.com/"><img src="images/icon/Twitter.png" alt="Twitter" style="width: 25px;height: 25px;"></a>
          <a href="https://www.youtube.com/"><img src="images/icon/youtube.png" alt="YouTube" style="width: 25px;height: 25px;"></a>
        </ul>
      </div>
    </div>
    <div class="row justify-content-center align-items-center">
      <div class="col-md-12 text-center">
        <p>Copyright © 2016 apcpedagogie</p>
      </div>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
