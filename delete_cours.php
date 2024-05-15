<?php require_once("partials/header.php"); ?>
<div class="container-fluid" style="background-color: black; height: 300px;">
    <div class="row">
        <div class="col-md d-flex justify-content-center align-items-center ">
            <div class="detail-box text-center">
                <div class="col-md-12 text-center">
                    <h2>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                            <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" fill="#8e9215"></path>
                        </svg><span style="color: #8e9215;">apc</span><span style="color:white;">pedagogie</span>
                    </h2>
                </div>
                <p style="color: white;">Vous souhaitez acquérir de nouvelles compétences?<br> Soyez le bienvenue</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md d-flex justify-content-center align-items-center">
            <button class="btn btn-primary blue-bg" style="width: 45%; margin-right: 1%;"> Programmation</button>
            <button class="btn btn-success green-bg" style="width: 45%; margin-left: 1%;">Orinateurs et périphériques</button> 
        </div>
    </div>
    
    <div class="row" style="margin-top: 10px; margin-bottom: 20px;">
        <div class="col-md d-flex justify-content-center align-items-center">
            <button class="btn btn-danger red-bg" style="width: 45%; margin-right: 1%;">Microsoft Office</button>
            <button class="btn btn-primary blue-bg" style="width: 45%; margin-left: 1%; background-color: #17a2b8;">Microsoft Specialist</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-info mr-2" style="color:white;"><i class="fa fa-book"></i> Cours</button>
            <button type="button" class="btn btn-success mr-2"><i class="fa fa-bars"></i> Exercices</button>
            <button type="button" class="btn btn-danger mr-2"><i class="fa fa-user"></i> QCM</button>
            <button type="button" class="btn btn-primary mr-2"><i class="fa fa-address-book"></i> Tutoriels</button>
            <button type="button" class="btn btn-secondary mr-2"><i class="fa fa-video"></i> Video</button>
        </div>
    </div>                
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 d-flex flex-column justify-content-center">
      <div class="card-fluid">
        <div class="card-body">
          <h1 data-aos="fade-up" class="mb-4 display-4 fw-bold text-center text-primary">Liste des Cours</h1>
          <div data-aos="fade-up" data-aos-delay="600">
            <?php
            require_once('connexion/connexion.php');

            // Vérifier si l'identifiant du cours est passé en paramètre GET
            if (isset($_GET['id'])) {
              $id = $_GET['id'];

              // Préparez votre requête SQL pour récupérer les détails du cours
              $sql = "SELECT * FROM Cours WHERE Id_Cours = :id";
              $stmt = $pdo->prepare($sql);
              $stmt->bindParam(':id', $id);
              $stmt->execute();

              // Vérifiez s'il y a un résultat
              if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // Affichez les détails du cours dans un formulaire pour la confirmation de la suppression
                ?>
                <h2>Voulez-vous vraiment supprimer le cours suivant ?</h2>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Titre du cours</th>
                      <th>Description du cours</th>
                      <th>Niveau du cours</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $row['Titre_Cours']; ?></td>
                      <td><?php echo $row['Description_Cours']; ?></td>
                      <td><?php echo $row['Niveau_Cours']; ?></td>
                    </tr>
                  </tbody>
                </table>
                <form action="delete_confirm_cours.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $row['Id_Cours']; ?>">
                  <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
                  <a href="cours.php" class="btn btn-secondary">Annuler</a>
                </form>
            <?php
              } else {
                echo "Aucun cours trouvé avec cet identifiant.";
              }
            } else {
              echo "Identifiant de cours non spécifié.";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer Section -->
<?php require_once("partials/footer.php"); ?>
