<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="card">
    <div class="card-body">
        <h5 class="card-title text-center">Connexion</h5>
        <div class="text-center">
            <img src="https://apcpedagogie.com/wp-content/uploads/2023/08/apc_.png" alt="Image">
        </div>
        <form action="process_connexion.php" method="post" id="loginForm" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                <small id="emailError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                <small id="passwordError" class="text-danger"></small>
            </div>
            <div class="g-recaptcha" data-sitekey="6LdXi4cpAAAAABapOj_KK3aFgRJVzLEkQb7jVXTX"></div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center mt-3">
            <a href="signup.php">Créer un compte</a>
        </div>
        <div class="text-center mt-3">
            <a href="forgot_password.php">Forgot Password?</a>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var emailError = document.getElementById('emailError');
        var passwordError = document.getElementById('passwordError');
        emailError.textContent = '';
        passwordError.textContent = '';

        if (email.trim() === '') {
            emailError.textContent = 'Email field is empty!';
            return false;
        }

        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            emailError.textContent = 'Invalid email address!';
            return false;
        }

        if (password.trim() === '') {
            passwordError.textContent = 'Password field is empty!';
            return false;
        }


        if (!isRecaptchaValidated()) {
            alert("Please complete the reCAPTCHA verification!");
            return false;
        }
        return true;
    }

    function isRecaptchaValidated() {
        return true;
    }
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>
