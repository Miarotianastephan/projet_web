<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?= base_url("assets/style/login.css") ?>" rel="stylesheet" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/heroes/">
    <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/style/heroes.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row align-items-center g-lg-5">
            <div class="col-lg-7 text-center text-lg-start" id="logImage">
                <div id="left">
                    <h1 class="display-5 fw-bold lh-3 mb-4" >Bienvenue sur<br> Fit-Foods</h1>
                    <p class="col-lg-10 fs-4" >Votre santé et bien-être Entre nos Mains</p>
                </div>
            </div>
            <div class="col-md-10 mx-auto col-lg-5"id="formLogin">
                
            <form action="<?= site_url("UtilisateurController/login") ?>" method="post">
                <div id="right"><h3>Identifier Vous !</h3></div><br>
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Address Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Mot de passe</label>
                    </div>
                
                    <div class="form-floating mb-3">
                        <button class="button btn-lg btn-primary" type="submit" style="font-size: medium;">Connexion</button>
                    </div>

                    <div style="text-align:center;"> ou </div>
                    <div class="form-floating mb-3">
                        <span>
                            <a href=<?= site_url("Inscription") ?> class="button_a">M'inscrire !</a>
                        </span>
                        <span>
                            <a href=<?= site_url("AdminController/index") ?> class="button_a">Back Office </a>
                        </span>
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>
</html>