<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Signin</title>

    <link href="<?= base_url("assets/style/inscription.css") ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/style/signin.css'); ?>" rel="stylesheet">

  </head>
  <body class="text-center">

    <main class="maincss m-auto" id="formulaireInscription">
      <form action="<?= site_url("UtilisateurController/nouveau_utilisateur") ?>" method="post">
        <h1 class="h3 mb-3 fw-normal">Passons à l'inscription</h1>

        <div class="form-champ">
          <label for="">Nom</label>
          <input name="nomutilisateur" class="form-control" placeholder="Nom">
        </div><br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-champ">
                  <label for="">Age</label>
                  <input name="age" class="form-control" placeholder="Age">
                </div><br>
            </div>
            <div class="col-md-6">
                <div class="form-champ">
                    <label for="">Genre</label>
                    <select name="idgenre" id="" class="form-control">
                      <?php foreach ($listGenre as $genre){  ?>
                        <option value="<?= $genre["idgenre"] ?>"><?= $genre["nomgenre"] ?></option>
                      <?php } ?>
                    </select>
                </div><br>
            </div>
        </div>

        <div class="form-champ">
          <label for="">Email</label>
          <input id="nom" type="email" name="mail" class="form-control" placeholder="Email">
        </div><br>
        
        <div class="form-champ">
          <label for="">Mots de Passe</label>
          <input name="pwd" type="password" class="form-control" placeholder="Mots de passe">
        </div><br>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-champ">
                  <label for="">Poids</label>
                <input name="poids" id="nom" class="form-control" placeholder="Poids">
                </div><br>
            </div>
            <div class="col-md-6">
                <div class="form-champ">
                  <label for="">Taille</label>
                <input name="taille" class="form-control" placeholder="Taille">
                </div><br>
            </div>
        </div>
        
        </div>
        <button class="button btn-lg btn-primary" type="submit">M'enregistrer</button>
      </form>
    </main>

    <span class="pass">
      <a href=<?= site_url("Index") ?> class="button_a">
        <ul>
          <li>L</li>
          <li>o</li>
          <li>g</li>
          <li>i</li>
          <li>n</li>
        </ul>
      </a>
    </span>

  </body>
</html>
