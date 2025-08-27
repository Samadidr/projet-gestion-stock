<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mini-Projet Web</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="stylesheet" href="assets/css/custom/login.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    
                    <div class="login-card">
                        <h1 class="auth-title">Bienvenue</h1>
                        <form action="Presentation/verifier.php" method="post">
                            <?php
                            if (isset($_GET['error'])) {
                                echo '<div class="alert alert-danger mb-3" role="alert">Login ou password est incorrect!</div>';
                                unset($_GET);
                            }
                            ?>
                            <div class="input-group mb-4">
                                <span class="input-group-text bg-white border-end-0"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control form-control-xl border-start-0" placeholder="Nom d'utilisateur" name="login" required>
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text bg-white border-end-0"><i class="bi bi-shield-lock"></i></span>
                                <input type="password" class="form-control form-control-xl border-start-0" placeholder="Mot de passe" name="password" required>
                            </div>
                            <div class="form-check d-flex align-items-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                    Rester connecté
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 shadow-lg">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    <img src="assets/images/acc.jpg" alt="Logo">
                </div>
            </div>
        </div>

    </div>
</body>

</html>