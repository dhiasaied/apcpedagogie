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
                    <h1 data-aos="fade-up" class="mb-4 display-4 fw-bold text-center text-primary">Liste des QCM
                    </h1>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <?php
                        require_once('connexion/connexion.php');

                        function getQCM($pdo, $id)
                        {
                            $sql = "SELECT * FROM QCM WHERE Id_QCM = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->bindParam(':id', $id);
                            $stmt->execute();
                            return $stmt->fetch(PDO::FETCH_ASSOC);
                        }

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $qcm = getQCM($pdo, $id);

                            if ($qcm) {
                        ?>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id_QCM</th>
                                            <th>Id_Cours</th>
                                            <th>Titre_QCM</th>
                                            <th>Description_QCM</th>
                                            <th>Solution_QCM</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $qcm['Id_QCM']; ?></td>
                                            <td><?php echo $qcm['Id_Cours']; ?></td>
                                            <td><?php echo $qcm['Titre_QCM']; ?></td>
                                            <td><?php echo $qcm['Description_QCM']; ?></td>
                                            <td><?php echo $qcm['Solution_QCM']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Bouton de retour -->
                                <a href="qcm.php" class="btn btn-secondary">Retour</a>
                            <?php
                            } else {
                                echo "Aucun QCM trouvé avec cet identifiant.";
                            }
                        } else {
                            echo "Identifiant de QCM non spécifié.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero -->

<?php require_once("partials/footer.php"); ?>
