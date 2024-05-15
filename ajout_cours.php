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
                    <h1 data-aos="fade-up" class="mb-4 display-4 fw-bold text-center text-primary">Liste des Cours
                    </h1>
                    <div data-aos="fade-up" data-aos-delay="600">
                    <?php
                    require_once('connexion/connexion.php');

                    // Initialiser les variables pour stocker les données du formulaire
                    $titre = $description = $niveau = "";

                    // Vérifie si le formulaire a été soumis
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Récupérer les données du formulaire
                        $titre = $_POST['titre'];
                        $description = $_POST['description'];
                        $niveau = $_POST['niveau'];

                        // Préparer la requête SQL pour insérer un nouveau cours dans la base de données
                        $sql = "INSERT INTO Cours (Titre_Cours, Description_Cours, Niveau_Cours) 
                        VALUES (:titre, :description, :niveau)";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(':titre', $titre);
                        $stmt->bindParam(':description', $description);
                        $stmt->bindParam(':niveau', $niveau);

                        // Exécuter la requête
                        if ($stmt->execute()) {
                            // Rediriger vers une page de confirmation ou vers la liste des cours
                            header("Location: cours.php");
                            exit();
                        } else {
                            echo "Erreur lors de l'ajout du cours.";
                        }
                    }
                    ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Niveau</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" id="titre" name="titre" required></td>
                                    <td><textarea id="description" name="description" required></textarea></td>
                                    <td><input type="text" id="niveau" name="niveau" required></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a href="cours.php" class="btn btn-secondary">Annuler</a>
                    </form>
                    </div>
                    </div>
</section><!-- End Hero -->
<?php require_once("partials/footer.php"); ?>
