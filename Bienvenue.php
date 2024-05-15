<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>apcpedagogie</title>
  <link rel="icon" href="https://apcpedagogie.com/wp-content/uploads/2023/08/apc_.png" type="image/gif" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/Bienvennue.css">
</head>
<body>
<div class="container-fluid mt-5" style="padding:10%;">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-body text-center">
          <h1 class="display-4 mb-4 text-dark">Bienvenue sur <span class="font-weight-bold"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="40" height="40">
          <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" fill="#8e9215"></path>
           </svg><span style="color: #8e9215;">apc</span><span style="color:black;">pedagogie</span></span></h1>
          <p class="lead text-secondary">Nous sommes ravis de vous accueillir sur notre site dédié à l'éducation.</p>
          <p class="text-muted">Que vous soyez un étudiant, un parent ou un utilisateur intéressé, nous avons des ressources pour vous aider.</p>
          <p class="text-muted">Explorez nos fonctionnalités et découvrez comment nous pouvons vous accompagner dans votre parcours éducatif.</p>
          <div class="mt-5">
            <div class="row">
              <div class="col-md-4">
                <div class="card" style="box-shadow: 0 0 10px 0 #a2a24d;">
                  <img src="images/icon/study.png" alt="study" class="mx-auto d-block" style="width: 100px; height: 100px;">
                  <div class="card-body text-center">
                    <button class="btn btn-info btn-lg" role="button" id="etudiantBtn">Étudiants</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="box-shadow: 0 0 10px 0 #a2a24d;">
                  <img src="images/icon/Parents.png" alt="Parents" class="mx-auto d-block" style="width: 100px; height: 100px;">
                  <div class="card-body text-center">
                    <button class="btn btn-info btn-lg" role="button" id="ParentsBtn">Parents</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="box-shadow: 0 0 10px 0 #a2a24d;">
                  <img src="images/icon/professeur.png" alt="professeur" class="mx-auto d-block" style="width: 100px; height: 100px;">
                  <div class="card-body text-center">
                  <a href="index.php" class="btn btn-info btn-lg" role="button" id="UtilisateursBtn">Instructeur</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="etudiantModal" tabindex="-1" aria-labelledby="etudiantModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="etudiantModalLabel">Espace Étudiant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="fermerBtnEtudiant">
          <span aria-hidden="true">&times;</span>
        </button>     
      </div>
      <div class="modal-body bg-light">
      <p class="lead mb-4">Vous êtes étudiant. Cliquez sur l'icône pour télécharger votre photo de profil :</p>
        <div class="text-center">
          <form method="POST" enctype="multipart/form-data" action="upload.php">
            <label for="fileInput" class="mb-3">
              <i class="fas fa-user-circle fa-5x"></i>
              <input type="file" name="file" id="fileInput" class="d-none">
            </label>
            <div class="form-group">
              <input type="text" name="name_etudiant" id="nameInput" class="form-control" placeholder="Entrez votre nom étudiant">
            </div>
            <button type="submit" class="btn btn-info btn-lg btn-block">Sauvegarder</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ParentsModal" tabindex="-1" aria-labelledby="ParentsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="ParentsModalLabel">Espace Parents</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="fermerBtnEtudiant">
          <span aria-hidden="true">&times;</span>
        </button> 
        </div>
      <div class="modal-body bg-light p-4">
        <p class="lead mb-4">Bienvenue dans l'espace Parents. Vous pouvez découvrir l'emploi du temps et les notes de votre étudiant ici.</p>
        <div class="row">
          <div class="col-md-6">
            <a href="Horaires.php" class="btn btn-info btn-lg btn-block mb-2">Horaires</a>
          </div>
          <div class="col-md-6">
            <a href="Notes.php" class="btn btn-info btn-lg btn-block mb-2">Notes</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
document.getElementById('etudiantBtn').addEventListener('click', function() {
  $('#etudiantModal').modal('show');
});

document.getElementById('ParentsBtn').addEventListener('click', function() {
  $('#ParentsModal').modal('show');
});

document.getElementById('fermerBtnEtudiant').addEventListener('click', function() {
  $('#etudiantModal').modal('hide');
});

document.getElementById('fermerBtnParents').addEventListener('click', function() {
  $('#ParentsModal').modal('hide');
});
</script>

</body>
</html>
