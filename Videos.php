<?php
    session_start();
    if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
        header("location:login.php");
        exit();
    }
?>
<?php require_once("partials/header.php");?>
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
                    <h1 data-aos="fade-up" class="mb-4 display-4 fw-bold text-center text-primary">Liste des Vidéos</h1>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <?php
                        require_once('connexion/connexion.php');
                        $limit = 2;
                        $search = "";
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        if (isset($_GET['search']) && !empty($_GET['search'])) {
                            $search = $_GET['search'];
                        }
                        if (!empty($search)) {
                            $sql = "SELECT COUNT(*) AS total FROM Videos WHERE 
                                    Titre_Video LIKE :search OR 
                                    Description_Video LIKE :search";
                            $stmt = $pdo->prepare($sql);
                            $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
                            $stmt->execute();
                        } else {
                            $sql = "SELECT COUNT(*) AS total FROM Videos";
                            $stmt = $pdo->query($sql);
                        }

                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        $total_pages = ceil($result['total'] / $limit);
                        $offset = ($page - 1) * $limit;
                        if (!empty($search)) {
                            $sql = "SELECT * FROM Videos WHERE 
                                    Titre_Video LIKE :search OR 
                                    Description_Video LIKE :search
                                    LIMIT :limit OFFSET :offset";
                        } else {
                            $sql = "SELECT * FROM Videos LIMIT :limit OFFSET :offset";
                        }

                        $stmt = $pdo->prepare($sql);
                        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
                        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
                        if (!empty($search)) {
                            $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
                        }
                        $stmt->execute();
                        ?>
                        <div class="row mb-3">
                                <div class="col-12 col-md-6 mb-2">
                                    <button id="addVideosBtn" class="btn btn-primary">
                                        <i class="bi bi-plus"></i>
                                        Ajouter un Videos  
                                    </button>
                                </div>
                                <div class="col-12 col-md-6">
                                    <form class="d-flex" action="" method="GET">
                                        <input class="form-control me-2" name="search" type="search" placeholder="Recherche..." aria-label="Search" value="<?php if (isset($search)) { echo htmlentities($search); } ?>">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id_Video</th>
                                    <th>Id_Cours</th>
                                    <th>Titre_Video</th>
                                    <th>Description_Video</th>
                                    <th>URL_Video</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Récupération des résultats
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<tr>";
                                    echo "<td>".$row["Id_Video"]."</td>"; // Displaying Id_Video
                                    echo "<td>".$row["Id_Cours"]."</td>"; // Displaying Id_Cours
                                    echo "<td>".$row["Titre_Video"]."</td>";
                                    echo "<td>".$row["Description_Video"]."</td>";
                                    echo "<td>".$row["URL_Video"]."</td>";
                                    echo "<td>";
                                    echo "<a href='edit_video.php?id=".$row['Id_Video']."' class='btn btn-outline-primary btn-sm me-1'><i class='bi bi-pencil'></i></a>";
                                    echo "<a href='delete_video.php?id=".$row['Id_Video']."' class='btn btn-outline-danger btn-sm me-1'><i class='bi bi-trash'></i></a>";
                                    echo "<a href='afficher_video.php?id=".$row['Id_Video']."' class='btn btn-outline-success btn-sm me-1'><i class='bi bi-eye'></i></a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Pagination -->
<div class="d-flex justify-content-center"> 
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php if ($page > 1): ?>
                <li class="page-item"><a class="page-link" href="?search=<?php echo $search; ?>&page=<?php echo ($page - 1); ?>">&laquo; Précédent</a></li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?php if ($page == $i) echo 'active'; ?>"><a class="page-link" href="?search=<?php echo $search; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
            <?php if ($page < $total_pages): ?>
                <li class="page-item"><a class="page-link" href="?search=<?php echo $search; ?>&page=<?php echo ($page + 1); ?>">Suivant &raquo;</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="addVideosModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title">Bienvenue à apcpedagogie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <i class="fas fa-video fa-5x text-info"></i>
                        <h4>Découvrez notre nouveau Vidéos</h4>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $titre = $description = $url = "";

                        // Check if the form has been submitted
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Retrieve form data
                            $titre = $_POST['titre'];
                            $description = $_POST['description'];
                            $url = $_POST['url'];

                            // Prepare SQL query to insert a new video into the database
                            $sql = "INSERT INTO Videos (Titre_Video, Description_Video, URL_Video) 
                            VALUES (:titre, :description, :url)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->bindParam(':titre', $titre);
                            $stmt->bindParam(':description', $description);
                            $stmt->bindParam(':url', $url);

                            // Execute the query
                            if ($stmt->execute()) {
                                // Redirect to a confirmation page or back to the list of videos
                                header("Location: videos.php");
                                exit();
                            } else {
                                echo "Erreur lors de l'ajout de la vidéo.";
                            }
                        }
                        ?>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group">
                                <label for="titre">Titre</label>
                                <input type="text" class="form-control" id="titre" name="titre" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" class="form-control" id="url" name="url" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-lg btn-block">Sauvgarder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("addVideosBtn").addEventListener("click", function() {
        $('#addVideosModal').modal('show');
    });
</script>

<?php require_once("partials/footer.php");?>
