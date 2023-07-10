<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Signin</title>

    <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/style/signin.css'); ?>" rel="stylesheet">

    <style>
        #formulaireInscription{
            max-width: 350px;
            padding: 6% 2%;
            border-radius:  43px;
            box-shadow:  21px 21px 38px #f3eeee,
            -21px -21px 38px #f7f2f2;
        }
        body{
            background-image: url(assets/img/2.png);
            background-size: 100%;
        }
    </style>
  </head>
  <body class="text-center">
    
<main class="form-signin w-200 m-auto" id="formulaireInscription">
  <form>
    <h1 class="h3 mb-3 fw-normal">Inscription</h1>

    <div class="form-floating">
      <input name="nom" class="form-control" placeholder="Nom">
      <label for="floatingPassword">Nom</label>
    </div><br>
    <div class="row">
        <div class="col-md-6">
            <div class="form-floating">
            <input name="age" class="form-control" placeholder="Age">
            <label for="floatingPassword">Age</label>
            </div><br>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <select name="idgenre" id="" class="form-control">
                    <option>Sexe</option>
                    <option value="">Male</option>
                </select>
            </div><br>
        </div>
    </div>

    <div class="form-floating">
      <input id="nom" type="email" name="nemail" class="form-control" placeholder="Email">
      <label for="floatingPassword">Email</label>
    </div><br>
    
    <div class="form-floating">
      <input name="mdp" type="password" class="form-control" placeholder="Mots de passe">
      <label for="floatingPassword">Mots de Passe</label>
    </div><br>
    <div class="row">
        <div class="col-md-6">
            <div class="form-floating">
            <input name="poids" id="nom" type="email" class="form-control" placeholder="Poids">
            <label for="floatingPassword">Poids</label>
            </div><br>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
            <input name="taille" type="email" class="form-control" placeholder="Taille">
            <label for="floatingPassword">Taille</label>
            </div><br>
        </div>
    </div>
     
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>


    
  </body>
</html>
