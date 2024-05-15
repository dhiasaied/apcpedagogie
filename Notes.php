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
    <i class="fas fa-graduation-cap"></i> Notes des étudiants
        </h1>
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
          <button class="btn btn-link title" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Notes - Première année A
                    </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
                <h1>Notes - Première année A</h1>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Étudiant</th>
                            <th scope="col">Mathématiques</th>
                            <th scope="col">Français</th>
                            <th scope="col">Histoire</th>
                            <th scope="col">Anglais</th>
                            <th scope="col">Géographie</th>
                            <th scope="col">EPS</th>
                            <th scope="col">Physique</th>
                            <th scope="col">Chimie</th>
                            <th scope="col">SVT</th>
                            <th scope="col">Arts Plastiques</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                            <td>Michael Johnson</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                            <td>Alice Brown</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                            <td>Robert Williams</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>17/20</td>
                            <td style="background-color: #eb6a61;">5/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                            <td>David Wilson</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                            <td>Sarah Taylor</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">4/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                            <td>Matthew Martinez</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">8/20</td>
                            <td>15/20</td>
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
            Notes du temps - Première année B      
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Notes du temps - Première année B</h1>
            <table class="table table-bordered">
            <thead class="thead-dark">
                        <tr>
                            <th scope="col">Étudiant</th>
                            <th scope="col">Algorithmique</th>
                            <th scope="col">Base de données</th>
                            <th scope="col">Programmation avancée</th>
                            <th scope="col">Mathématiques discrètes</th>
                            <th scope="col">Projet informatique</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Charlotte Laurent</td>
                            <td style="background-color: #eb6a61;">5/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                        </tr>
                        <tr>
                            <td>Julien Moreau</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                            <td>Camille Bernard</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                        </tr>
                        <tr>
                            <td>Nicolas Mercier</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td style="background-color: #eb6a61;">6/20</td>
                        </tr>
                        <tr>
                            <td>Émilie Girard</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td style="background-color: #eb6a61;">4/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                            <td>Thomas Rousseau</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td style="background-color: #eb6a61;">0/20</td>
                        </tr>
                        <tr>
                            <td>Jeanne Dubois</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                            <td>Sophie Martin</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                            <td>Pierre Lefebvre</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                            <td>Marie Dupont</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
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
            Notes du temps - Première année C      
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Notes du temps - Première année C </h1>
            <table class="table table-bordered">
            <thead class="thead-dark">
                        <tr>
                            <th scope="col">Étudiant</th>
                            <th scope="col">Mathématiques</th>
                            <th scope="col">Français</th>
                            <th scope="col">Histoire</th>
                            <th scope="col">Anglais</th>
                            <th scope="col">Géographie</th>
                            <th scope="col">EPS</th>
                            <th scope="col">Physique</th>
                            <th scope="col">Chimie</th>
                            <th scope="col">SVT</th>
                            <th scope="col">Arts Plastiques</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alice Martin</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Lucas Dubois</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Élodie Garcia</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Antoine Leroy</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                        <td>Manon Thomas</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Hugo Moreau</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Léa Petit</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Maxime Laurent</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                        <td>Clara Rousseau</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Théo Lefevre</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
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
            Notes du temps - Première année D      
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Notes du temps - Première année D  </h1>
            <table class="table table-bordered">
            <thead class="thead-dark">
                        <tr>
                            <th scope="col">Étudiant</th>
                            <th scope="col">Mathématiques</th>
                            <th scope="col">Français</th>
                            <th scope="col">Économie</th>
                            <th scope="col">Anglais</th>
                            <th scope="col">Géographie</th>
                            <th scope="col"> Théâtre</th>
                            <th scope="col">Physique</th>
                            <th scope="col">Chimie</th>
                            <th scope="col">Informatique</th>
                            <th scope="col">Langue vivante 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Victoria Mitchell</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Christopher Lewis</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Samantha Harris</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Joshua Walker</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                        <td>Charlotte Robinson</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Jacob Young</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Justin Hill</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Anthony Gonzalez</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                        <td>Hannah Wright</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Lily Davis</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
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
              Notes du temps - 2ème année informatique
            </button>
          </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Notes du temps - 2ème année informatique</h1>
            <table class="table table-bordered">
            <thead class="thead-dark">
                        <tr>
                            <th scope="col">Étudiant</th>
                            <th scope="col">Mathématiques</th>
                            <th scope="col">Français</th>
                            <th scope="col">Histoire</th>
                            <th scope="col">Anglais</th>
                            <th scope="col">Géographie</th>
                            <th scope="col">EPS</th>
                            <th scope="col">Physique</th>
                            <th scope="col">Chimie</th>
                            <th scope="col">SVT</th>
                            <th scope="col">Arts Plastiques</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Sophia Murphy</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Jack Morris</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Julian Patterson</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Luna Bell</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                        <td>Carter Flores</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Nathan Howard</td>
                            <td>17/20</td>
                            <td style="background-color: #eb6a61;">5/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Violet Cook</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                            <td>Sarah Taylor</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">4/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                        <td>Logan Price</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Isaac Ward</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">8/20</td>
                            <td>15/20</td>
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
          Notes du temps - 2ème année sciences
            </button>
          </h2>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Notes du temps - 2ème année sciences</h1>
            <table class="table table-bordered">
            <thead class="thead-dark">
                        <tr>
                            <th scope="col">Étudiant</th>
                            <th scope="col">Mathématiques</th>
                            <th scope="col">Français</th>
                            <th scope="col">Économie</th>
                            <th scope="col">Anglais</th>
                            <th scope="col">Géographie</th>
                            <th scope="col"> Théâtre</th>
                            <th scope="col">Physique</th>
                            <th scope="col">Chimie</th>
                            <th scope="col">Chimie organique</th>
                            <th scope="col">Langue vivante 1</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Aria Rivera</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Blake Griffin</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Audrey Fisher</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Caleb Hayes</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                        <td>Peyton Ramirez</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Gabriel Torres</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Nora Nguyen</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Elijah Bennett</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                        <td>Aria Rivera</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Leah Perry</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
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
          Notes du temps - 2ème année Mathématiques
            </button>
          </h2>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Notes du temps - 2ème année Mathématiques</h1>
            <table class="table table-bordered">
            <thead class="thead-dark">
                        <tr>
                            <th scope="col">Étudiant</th>
                            <th scope="col">Mathématiques</th>
                            <th scope="col">Français</th>
                            <th scope="col">Économie</th>
                            <th scope="col">Anglais</th>
                            <th scope="col">Géographie</th>
                            <th scope="col"> Théâtre</th>
                            <th scope="col">Physique</th>
                            <th scope="col">Chimie</th>
                            <th scope="col">Chimie organique</th>
                            <th scope="col">Langue vivante 1</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Wyatt Henderson</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Grace Kim</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>David Richardson</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Eva Cox</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                    <td>James Stewart</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Chloe Gray</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Penelope Ross</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                        <td>Harper Powell</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>16/20</td>
                            <td>15/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Nicholas Sanders</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                            <td>19/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
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
              Notes du temps - 2ème année technique
            </button>
          </h2>
        </div>
        <div id="collapseEight" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            <h1>Notes du temps - 2ème année technique</h1>
            <table class="table table-bordered">
            <thead class="thead-dark">
                        <tr>
                            <th scope="col">Étudiant</th>
                            <th scope="col">Algorithmique</th>
                            <th scope="col">Base de données</th>
                            <th scope="col">Programmation</th>
                            <th scope="col">technique</th>
                            <th scope="col">Projet technique</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Evelyn Cooper</td>
                            <td style="background-color: #eb6a61;">5/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                        </tr>
                        <tr>
                        <td>Dylan Ward</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Riley Peterson</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                        </tr>
                        <tr>
                        <td>Jason Flores</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td style="background-color: #eb6a61;">6/20</td>
                        </tr>
                        <tr>
                        <td>Mila Bennett</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td style="background-color: #eb6a61;">4/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Luke Simmons</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td style="background-color: #eb6a61;">0/20</td>
                        </tr>
                        <tr>
                        <td>Ellie Hughes</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Christian Diaz</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                        </tr>
                        <tr>
                        <td>Lillian Price</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Jordan Long</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
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
                            <th scope="col">Étudiant</th>
                            <th scope="col">Algorithmique</th>
                            <th scope="col">Base de données</th>
                            <th scope="col">Programmation avancée</th>
                            <th scope="col">Mathématiques discrètes</th>
                            <th scope="col">Projet informatique</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Sadie Bennett</td>
                            <td>20/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                        </tr>
                        <tr>
                        <td>Brandon Myers</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Aurora Kelly</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                        </tr>
                        <tr>
                        <td>Isaiah Foster</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td style="background-color: #eb6a61;">6/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Violet Bailey</td>
                        <td style="background-color: #eb6a61;">4/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Sean Coleman</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td style="background-color: #eb6a61;">0/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                        </tr>
                        <tr>
                        <td>Isabelle Martinez</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                            <td>Sophie Martin</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                        </tr>
                        <tr>
                        <td>Eric Bailey</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Jeremy Price</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
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
                            <th scope="col">Étudiant</th>
                            <th scope="col">Algorithmique</th>
                            <th scope="col">Base de données</th>
                            <th scope="col">Excel</th>
                            <th scope="col">Mathématiques</th>
                            <th scope="col">sciences</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Lucy Watson</td>
                            <td>10/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                        </tr>
                        <tr>
                        <td>Cameron James</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Anna Butler</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                        </tr>
                        <tr>
                        <td>Patrick Brooks</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td style="background-color: #eb6a61;">6/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Clara Hughes</td>
                            <td style="background-color: #eb6a61;">4/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Maxwell Ward</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td style="background-color: #eb6a61;">0/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                        </tr>
                        <tr>
                        <td>Declan Foster</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Emily Barnes</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                        </tr>
                        <tr>
                        <td>Scarlett Simmons</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Adam Bryant</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                            <td>14/20</td>
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
                            <th scope="col">Étudiant</th>
                            <th scope="col">Algorithmique</th>
                            <th scope="col">Base de données</th>
                            <th scope="col">Programmation</th>
                            <th scope="col">Mathématiques</th>
                            <th scope="col">Informatique</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Marcus Ford</td>
                            <td style="background-color: #eb6a61;">3/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                        </tr>
                        <tr>
                        <td>Steven Patterson</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Ava Richardson</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                        </tr>
                        <tr>
                        <td>Bradley Mitchell</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td style="background-color: #eb6a61;">6/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                        <td>Grace Lee</td>
                            <td style="background-color: #eb6a61;">4/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Kevin Perry</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>10/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                        </tr>
                        <tr>
                        <td>Elena Foster</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Adrian Cox</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                        </tr>
                        <tr>
                        <td>Lily Scott</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Simon Adams</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                            <td>14/20</td>
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
                            <th scope="col">Étudiant</th>
                            <th scope="col">Algorithmique</th>
                            <th scope="col">Base de données</th>
                            <th scope="col">Systeme Embarque</th>
                            <th scope="col">Electrique</th>
                            <th scope="col">Projet technique</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Philip Reed</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                            <td>13/20</td>
                        </tr>
                        <tr>
                        <td>Louis Bennett</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                            <td>18/20</td>
                            <td>14/20</td>
                        </tr>
                        <tr>
                        <td>Theodore Bailey</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td style="background-color: #eb6a61;">7/20</td>
                        </tr>
                        <tr>
                        <td>Eva Morgan</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td style="background-color: #eb6a61;">6/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                        </tr>
                        <tr>
                            <td>Émilie Girard</td>
                            <td style="background-color: #eb6a61;">4/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Mila Hughes</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>10/20</td>
                            <td>16/20</td>
                            <td>18/20</td>
                        </tr>
                        <tr>
                        <td>Peter Foster</td>
                            <td>14/20</td>
                            <td>18/20</td>
                            <td>17/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Vincent Howard</td>
                            <td>16/20</td>
                            <td>18/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Lydia Price</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
                            <td>17/20</td>
                        </tr>
                        <tr>
                        <td>Natalie Parker</td>
                            <td>17/20</td>
                            <td>15/20</td>
                            <td>16/20</td>
                            <td>17/20</td>
                            <td>14/20</td>
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
