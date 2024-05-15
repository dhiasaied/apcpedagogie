<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link href="css/signup.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="margin: 34px;">

<div class="container">
    <h2 class="mt-5">Inscription</h2>
    <div class="text-center">
        <img src="https://apcpedagogie.com/wp-content/uploads/2023/08/apc_.png" alt="Image">
    </div>
    <form action="ajout_inscription.php" method="POST" id="registrationForm">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="exampleInputFirstName">Prénom</label>
            <input type="text" class="form-control" id="exampleInputFirstName" name="prenom" placeholder="Entrez votre prénom" required pattern="[A-Za-zÀ-ÿ -]{1,}">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputLastName">Nom</label>
            <input type="text" class="form-control" id="exampleInputLastName" name="nom" placeholder="Entrez votre nom" required pattern="[A-Za-zÀ-ÿ -]{1,}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="exampleInputEmail">Adresse email</label>
            <input type="email" class="form-control" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="Entrez votre email" required>
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputPhone">Téléphone</label>
            <input type="tel" class="form-control" id="exampleInputPhone" name="telephone" placeholder="Entrez votre numéro de téléphone" required pattern="[0-9]{10}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="exampleInputDateOfBirth">Date de naissance</label>
            <input type="date" class="form-control" id="exampleInputDateOfBirth" name="date_de_naissance" required>
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputCity">Ville</label>
            <input type="text" class="form-control" id="exampleInputCity" name="ville" placeholder="Entrez votre ville" required pattern="[A-Za-zÀ-ÿ -]{1,}">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword" name="mot_de_passe" placeholder="Mot de passe" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword2">Confirmer le mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirmer le mot de passe" required>
    </div>
    <button type="submit" class="btn btn-primary" onclick="return validateForm()">S'inscrire</button>
</form>
</div>
<script>
    function validateForm() {
    var firstName = document.getElementById("exampleInputFirstName").value;
    var lastName = document.getElementById("exampleInputLastName").value;
    var email = document.getElementById("exampleInputEmail").value;
    var phone = document.getElementById("exampleInputPhone").value;
    var dateOfBirth = document.getElementById("exampleInputDateOfBirth").value;
    var city = document.getElementById("exampleInputCity").value;
    var password = document.getElementById("exampleInputPassword").value;
    var confirmPassword = document.getElementById("exampleInputPassword2").value;
    
    if (firstName !== "" && lastName !== "" && email !== "" && phone !== "" && dateOfBirth !== "" && city !== "" && password !== "" && confirmPassword !== "") {
        if (password !== confirmPassword) {
            alert("Les mots de passe ne correspondent pas.");
            return false;
        }
        return true;
    } else {
        alert("Veuillez remplir tous les champs.");
        return false; 
    }
}

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
