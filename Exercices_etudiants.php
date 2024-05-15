<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>apcpedagogie</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="https://apcpedagogie.com/wp-content/uploads/2023/08/apc_.png" type="image/gif" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="css/Exercices_etudiants.css" rel="stylesheet">

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

  <div class="container mt-5">
  <h1 data-aos="fade-up" class="mb-4 display-4 fw-bold text-center text-primary">
    <i class="fas fa-pencil-alt"></i>
    Exercices apcpedagogie
  </h1>
    <div class="card">
    <div class="card-body">
      <div class="mt-5">
      <h2>Algorithme</h2>
      <p>Exercice : Écrire un algorithme pour calculer la somme des nombres de 1 à N.</p>
      <button class="btn btn-primary" onclick="toggleSolution('algo')">Afficher la Solution</button>
      <div class="alert alert-success mt-3" id="algoSolution" style="display: none;">
        Solution :
        <pre>
          <code>
            ALGORITHME SommeN
              VARIABLES
                N, i, somme : ENTIER
              DEBUT
                somme ← 0
                LIRE N
                POUR i DE 1 A N FAIRE
                  somme ← somme + i
                FINPOUR
                AFFICHER somme
              FIN
          </code>
        </pre>
      </div>
    </div>
    <!-- Section Mathématiques -->
    <div class="mt-5">
      <h2>Mathématiques</h2>
      <p>Exercice : Calculer l'intégrale de x^2 de 0 à 1.</p>
      <button class="btn btn-primary" onclick="toggleSolution('math')">Afficher la Solution</button>
      <div class="alert alert-success mt-3" id="mathSolution" style="display: none;">
        Solution : L'intégrale de x^2 de 0 à 1 est 1/3.
      </div>
    </div>
    
    <!-- Section Word -->
    <div class="mt-5">
      <h2>Word</h2>
      <p>Exercice : Créer un tableau dans Microsoft Word.</p>
      <button class="btn btn-primary" onclick="toggleSolution('word')">Afficher la Solution</button>
      <div class="alert alert-success mt-3" id="wordSolution" style="display: none;">
        Solution : Ouvrez Word, allez dans l'onglet Insertion, sélectionnez Tableau, puis choisissez le nombre de lignes et de colonnes.
      </div>
    </div>
    
    <!-- Section Excel -->
    <div class="mt-5">
      <h2>Excel</h2>
      <p>Exercice : Créer une formule de somme dans Excel.</p>
      <button class="btn btn-primary" onclick="toggleSolution('excel')">Afficher la Solution</button>
      <div class="alert alert-success mt-3" id="excelSolution" style="display: none;">
        Solution : Dans une cellule, tapez =SOMME(A1:A10) pour additionner les valeurs de la plage A1 à A10.
      </div>
    </div>
    
    <!-- Section Python -->
    <div class="mt-5">
      <h2>Python</h2>
      <p>Exercice : Écrire une fonction pour calculer le factoriel d'un nombre en Python.</p>
      <button class="btn btn-primary" onclick="toggleSolution('python')">Afficher la Solution</button>
      <div class="alert alert-success mt-3" id="pythonSolution" style="display: none;">
        Solution :
        <pre>
          <code>
            def factoriel(n):
                if n == 0:
                    return 1
                else:
                    return n * factoriel(n-1)
          </code>
        </pre>
      </div>
    </div>
    
    <!-- Section Pascal -->
    <div class="mt-5">
      <h2>Pascal</h2>
      <p>Exercice : Écrire un programme pour calculer la somme des nombres de 1 à N en Pascal.</p>
      <button class="btn btn-primary" onclick="toggleSolution('pascal')">Afficher la Solution</button>
      <div class="alert alert-success mt-3" id="pascalSolution" style="display: none;">
        Solution :
        <pre>
          <code>
            program SommeN;
            var
              N, i, somme: integer;
            begin
              somme := 0;
              readln(N);
              for i := 1 to N do
                somme := somme + i;
              writeln(somme);
            end.
          </code>
        </pre>
      </div>
    </div>
    
    <!-- Section PHP -->
    <div class="mt-5">
      <h2>HTML/CSS</h2>
      <p>Exercice : Créer une page web simple avec un titre, un paragraphe et un lien.</p>
      <button class="btn btn-primary" onclick="toggleSolution('HTML/CSS')">Afficher la Solution</button>
      <div class="alert alert-success mt-3" id="HTML/CSSSolution" style="display: none;">
        Solution :
        <pre>
          <code>
            <!DOCTYPE html>
            <html lang="fr">
            <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Ma Page Web</title>
              <style>
                body {
                  font-family: Arial, sans-serif;
                }
                h1 {
                  color: white;
                }
                p {
                  font-size: 18px;
                }
              </style>
            </head>
            <body>
              <h1>Mon Titre</h1>
              <p>Ceci est un paragraphe.</p>
              <a href="https://www.example.com">Lien vers Example</a>
            </body>
            </html>
          </code>
        </pre>
      </div>
    </div>
    <!-- Section CSS -->
<div class="mt-5">
  <h2>CSS</h2>
  <p>Exercice : Créer une mise en page en utilisant Flexbox.</p>
  <button class="btn btn-primary" onclick="toggleSolution('css')">Afficher la Solution</button>
  <div class="alert alert-success mt-3" id="cssSolution" style="display: none;">
    Solution : Utilisez les propriétés CSS flexbox pour créer une mise en page flexible et réactive.
  </div>
</div>

<!-- Section JavaScript -->
<div class="mt-5">
  <h2>JavaScript</h2>
  <p>Exercice : Écrire une fonction pour valider un formulaire.</p>
  <button class="btn btn-primary" onclick="toggleSolution('javascript')">Afficher la Solution</button>
  <div class="alert alert-success mt-3" id="javascriptSolution" style="display: none;">
    Solution : Utilisez JavaScript pour créer une fonction de validation de formulaire qui vérifie les entrées utilisateur et affiche des messages d'erreur si nécessaire.
  </div>
</div>

<!-- Section SQL -->
<div class="mt-5">
  <h2>SQL</h2>
  <p>Exercice : Écrire une requête SQL pour sélectionner des données d'une table.</p>
  <button class="btn btn-primary" onclick="toggleSolution('sql')">Afficher la Solution</button>
  <div class="alert alert-success mt-3" id="sqlSolution" style="display: none;">
    Solution : Écrivez une requête SQL qui sélectionne des données spécifiques d'une table dans une base de données.
  </div>
</div>

<!-- Section React -->
<div class="mt-5">
  <h2>React</h2>
  <p>Exercice : Créer un composant React simple.</p>
  <button class="btn btn-primary" onclick="toggleSolution('react')">Afficher la Solution</button>
  <div class="alert alert-success mt-3" id="reactSolution" style="display: none;">
    Solution : Utilisez React pour créer un composant simple, par exemple, un composant de bouton ou de formulaire.
  </div>
</div>

<!-- Section Java -->
<div class="mt-5">
  <h2>Java</h2>
  <p>Exercice : Écrire une classe Java pour représenter un objet de votre choix (par exemple, un animal, un véhicule).</p>
  <button class="btn btn-primary" onclick="toggleSolution('java')">Afficher la Solution</button>
  <div class="alert alert-success mt-3" id="javaSolution" style="display: none;">
    Solution : Créez une classe Java avec des propriétés et des méthodes pour représenter l'objet choisi.
  </div>
</div>

<!-- Section Réseau -->
<div class="mt-5">
  <h2>Réseau</h2>
  <p>Exercice : Expliquer le fonctionnement du protocole HTTP.</p>
  <button class="btn btn-primary" onclick="toggleSolution('reseau')">Afficher la Solution</button>
  <div class="alert alert-success mt-3" id="reseauSolution" style="display: none;">
    Solution : Fournissez une explication détaillée du protocole HTTP, y compris ses méthodes, ses codes de statut, et son fonctionnement général.
  </div>
</div>

<!-- Section Machine Learning -->
<div class="mt-5">
  <h2>Machine Learning</h2>
  <p>Exercice : Implémenter une régression linéaire en Python à l'aide de bibliothèques telles que NumPy et scikit-learn.</p>
  <button class="btn btn-primary" onclick="toggleSolution('ml')">Afficher la Solution</button>
  <div class="alert alert-success mt-3" id="mlSolution" style="display: none;">
    Solution : Fournissez un exemple de code Python qui utilise NumPy et scikit-learn pour effectuer une régression linéaire sur un ensemble de données.
  </div>
</div>

<!-- Section Sécurité informatique -->
<div class="mt-5">
  <h2>Sécurité informatique</h2>
  <p>Exercice : Expliquer l'importance des mots de passe forts et des techniques de hachage.</p>
  <button class="btn btn-primary" onclick="toggleSolution('securite')">Afficher la Solution</button>
  <div class="alert alert-success mt-3" id="securiteSolution" style="display: none;">
    Solution : Fournissez une explication sur la manière dont les mots de passe forts et les techniques de hachage aident à sécuriser les données sensibles en ligne.
  </div>
</div>
  </div>
  </div>
</div>
  <script>
    function toggleSolution(section) {
      var solutionDiv = document.getElementById(section + 'Solution');
      if (solutionDiv.style.display === 'none') {
        solutionDiv.style.display = 'block';
      } else {
        solutionDiv.style.display = 'none';
      }
    }
  </script>













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
