<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/heroes/">
    <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/style/heroes.css'); ?>" rel="stylesheet">
</head>
<style>
    #formLogin{
        padding: 9% 6%;
/* background: linear-gradient(145deg, #ddd8d8, #ffffff); */
border-radius: 0px 43px 43px 0px;
box-shadow:  21px 21px 38px #f3eeee,
             -21px -21px 38px #f7f2f2;
    }
    #soratra{
        text-align: center;
    }
    #logImage{
        background-image: url(assets/img/1.png);
    /* height: 510px; */
    padding: 16% 3%;
    background-size: 100%;
    }
    #soratraGauche{
        opacity: 0.7;
    }
</style>
<body>
    <div class="b-example-divider"></div>

                <div class="container col-xl-10 col-xxl-8 px-4 py-5">
                <div class="row align-items-center g-lg-5 py-5">
                    <div class="col-lg-7 text-center text-lg-start" id="logImage">
                        <div id="soratraGauche">
                            <h1 class="display-5 fw-bold lh-3 mb-4" >Bienvenue sur<br> Fit-Foods</h1>
                            <p class="col-lg-10 fs-4" >Notre site est dédié à l'atteinte de vos objectifs de santé et de bien-être !</p>
                        </div>
                    </div>
                    <div class="col-md-10 mx-auto col-lg-5"id="formLogin">
                        
                    <form action="<?= site_url("UtilisateurController/login") ?>" method="post">
                        <div id="soratra"><h3>Identifier Vous !</h3></div><br>
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Address Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Mot de passe</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary" type="submit" style="font-size: medium;">Connexion</button>
                            <br><br>

                            <div style="text-align:center;"> ou </div>
                            <br>
                            
                            <a href=<?= site_url("Inscription") ?> class="w-100 btn btn-lg btn-primary" style="background-color:white;color:black;font-size: medium;">M'inscrire</a>

                        </div>
                    </form>
                </div>
                </div>

    <div class="b-example-divider"></div>

</body>
</html>