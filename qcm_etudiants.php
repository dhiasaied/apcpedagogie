<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>apcpedagogie</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="https://apcpedagogie.com/wp-content/uploads/2023/08/apc_.png" type="image/gif" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="css/qcm_etudiants.css" rel="stylesheet">
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
<div class="container-fluid mt-5">
  <h1 data-aos="fade-up" class="mb-4 display-4 fw-bold text-center text-primary">
    <i class="far fa-list-alt"></i> QCM de apcpedagogie
</h1>
<form id="quizForm">
    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <label for="question1" class="form-label">1. Quel langage de programmation est utilisé pour développer des applications Android ?</label>
          <div>
            <input type="radio" id="question1A" name="question1" value="A">
            <label for="question1A">Java</label><br>
            <input type="radio" id="question1B" name="question1" value="B">
            <label for="question1B">C#</label><br>
            <input type="radio" id="question1C" name="question1" value="C">
            <label for="question1C">Python</label><br>
            <input type="radio" id="question1D" name="question1" value="D">
            <label for="question1D">HTML</label>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <label for="question2" class="form-label">2. Quel composant informatique stocke temporairement les données et les instructions pendant l'exécution d'un programme ?</label>
          <div>
            <input type="radio" id="question2A" name="question2" value="A">
            <label for="question2A">CPU</label><br>
            <input type="radio" id="question2B" name="question2" value="B">
            <label for="question2B">RAM</label><br>
            <input type="radio" id="question2C" name="question2" value="C">
            <label for="question2C">ROM</label><br>
            <input type="radio" id="question2D" name="question2" value="D">
            <label for="question2D">GPU</label>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <label for="question3" class="form-label">3. Quel langage est utilisé pour créer des feuilles de style pour la mise en page des sites web ?</label>
          <div>
            <input type="radio" id="question3A" name="question3" value="A">
            <label for="question3A">HTML</label><br>
            <input type="radio" id="question3B" name="question3" value="B">
            <label for="question3B">JavaScript</label><br>
            <input type="radio" id="question3C" name="question3" value="C">
            <label for="question3C">CSS</label><br>
            <input type="radio" id="question3D" name="question3" value="D">
            <label for="question3D">Python</label>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <label for="question4" class="form-label">4. Quelle est la méthode principale pour définir le style CSS directement dans une page HTML ?</label>
          <div>
            <input type="radio" id="question4A" name="question4" value="A">
            <label for="question4A">Balises &lt;style&gt;</label><br>
            <input type="radio" id="question4B" name="question4" value="B">
            <label for="question4B">Balises &lt;script&gt;</label><br>
            <input type="radio" id="question4C" name="question4" value="C">
            <label for="question4C">Attribut "style"</label><br>
            <input type="radio" id="question4D" name="question4" value="D">
            <label for="question4D">Balises &lt;link&gt;</label>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <label for="question5" class="form-label">5. Quel est le principal avantage de l'utilisation de git pour le développement de logiciels ?</label>
          <div>
            <input type="radio" id="question5A" name="question5" value="A">
            <label for="question5A">Gestion de version</label><br>
            <input type="radio" id="question5B" name="question5" value="B">
            <label for="question5B">Déploiement automatique</label><br>
            <input type="radio" id="question5C" name="question5" value="C">
            <label for="question5C">Tests automatisés</label><br>
            <input type="radio" id="question5D" name="question5" value="D">
            <label for="question5D">Analyse statique du code</label>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <label for="question6" class="form-label">6. Quel langage est utilisé pour programmer des fonctionnalités côté serveur dans les applications web ?</label>
          <div>
            <input type="radio" id="question6A" name="question6" value="A">
            <label for="question6A">JavaScript</label><br>
            <input type="radio" id="question6B" name="question6" value="B">
            <label for="question6B">HTML</label><br>
            <input type="radio" id="question6C" name="question6" value="C">
            <label for="question6C">Python</label><br>
            <input type="radio" id="question6D" name="question6" value="D">
            <label for="question6D">PHP</label>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <label for="question7" class="form-label">7. Quel est le langage de balisage utilisé pour structurer le contenu des pages web ?</label>
          <div>
            <input type="radio" id="question7A" name="question7" value="A">
            <label for="question7A">Java</label><br>
            <input type="radio" id="question7B" name="question7" value="B">
            <label for="question7B">Python</label><br>
            <input type="radio" id="question7C" name="question7" value="C">
            <label for="question7C">HTML</label><br>
            <input type="radio" id="question7D" name="question7" value="D">
            <label for="question7D">CSS</label>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <label for="question8" class="form-label">8. Quel est le protocole de transfert de données utilisé pour envoyer des pages web sur Internet ?</label>
          <div>
            <input type="radio" id="question8A" name="question8" value="A">
            <label for="question8A">FTP</label><br>
            <input type="radio" id="question8B" name="question8" value="B">
            <label for="question8B">HTTP</label><br>
            <input type="radio" id="question8C" name="question8" value="C">
            <label for="question8C">SMTP</label><br>
            <input type="radio" id="question8D" name="question8" value="D">
            <label for="question8D">SSH</label>
          </div>
        </div>
      </div>
    </div>    
    <div class="text-center mt-3">
      <button type="button" class="btn btn-info ">
        <i class="fas fa-code"></i> Soumettre
      </button>
          </div>
  </form>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
<script>
  function checkAnswers() {
    const correctAnswers = ['A', 'B', 'C', 'A', 'A', 'D', 'C', 'B'];

    let allQuestionsAnswered = true;

    for (let i = 1; i <= 8; i++) {
      const selectedAnswer = document.querySelector(`input[name="question${i}"]:checked`);

      const parentDiv = selectedAnswer ? selectedAnswer.parentNode : null;

      const selectedValue = selectedAnswer ? selectedAnswer.value : null;

      const correctAnswer = correctAnswers[i - 1];

      if (!selectedValue) {
        allQuestionsAnswered = false;
        break;
      }

      if (selectedValue === correctAnswer) {
        parentDiv.innerHTML = '<i class="fas fa-check-circle mr-3 text-success"></i> Réponse correcte';
      } else {
        parentDiv.innerHTML = '<i class="fas fa-check-circle mr-3 text-danger"></i> Réponse incorrecte';
      }
    }

    if (!allQuestionsAnswered) {
      alert('Veuillez répondre à toutes les questions.');
    }
  }

  document.querySelector('.btn').addEventListener('click', checkAnswers);
</script>

</body>
</html>
