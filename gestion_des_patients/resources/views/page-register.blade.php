<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Registre</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png">
    <link href="admin/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Enregistrez votre compte</h4>
                                    <form action="index.html">
                                        <div class="form-group">
                                            <label><strong>Nom d'utilisateur</strong></label>
                                            <input type="text" class="form-control" placeholder="username">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>E-mail</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Mot de passe</strong></label>
                                            <input type="password" class="form-control" value="Password">
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Enregistre-moi</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Vous avez déjà un compte?<a class="text-primary" href="page-login.html">Se connecter</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="admin/vendor/global/global.min.js"></script>
    <script src="admin/js/quixnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>
