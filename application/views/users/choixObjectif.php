<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vos objectifs</title>
    </head>
    <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5/css/all.css'); ?>">
    <link href="<?= base_url("assets/style/style.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("assets/style/loader.css") ?>" rel="stylesheet" />
    <body>    

        <!-- Page Preloder -->
        <!-- <div id="preloder">
            <div class="loader"></div>
        </div> -->
        
        <?php if ($this->session->has_userdata("idutilisateur")){ ?>
        <main class="maincss m-auto" id="formulaireInscription">
        <!-- <form data-multi-step class="multi-step-form" action="<?= site_url("UtilisateurController/accueill") ?>" method="post"> -->
        <form data-multi-step class="multi-step-form" action="<?= site_url("RegimeController/voirRegime") ?>" method="post">
            <div class="card" data-step>
                    <div class="container">
                        <h3>Bonjour, <?= $this->session->userdata("nomutilisateur") ?></h3>
                        <h5>Passons aux choix de vos objectifs</h5><br>
                        <p>A quoi attendez-vous ? </p><br>
                        <a href="<?= site_url("UtilisateurController/logout") ?>">Deconnexion</a>
                        <div class="container">
                            <div class="row" id="ligne" style="">
                                <b class="col-md-3" value="1">
                                    <select name="idobjectif" id="" class="form-control form-control-perso-first">
                                    <?php foreach($listobjectif as $ob){ ?>    
                                        <option value="<?= $ob["idobjectif"]?>"><?= $ob["nomobjectif"]?></option>
                                    <?php } ?>
                                    </select>
                                </b>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="button button-perso btn-primary" data-next>Suivant</button>
                    </div>
            </div>


            <!-- .. -->
            <div class="card" data-step>
                <div class="container" id="step2">
                    <div class="form-champ">
                        <label for="floatingPassword">Fréquence d'activité</label>
                        <select name="status" id="" class="form-control form-control-perso">
                            <option value="#">Niveau</option>
                            <option value="0">Pas d'exercice</option>
                            <option value="1">Legerement actif</option>
                            <option value="2">Moderement actif</option>
                            <option value="3">Tres actif</option>
                        </select>
                    </div><br>
                    <div class="form-champ">
                        <label for="floatingPassword">Poids a perdre ou a gagner</label>
                        <input name="kilo" type="number" class="form-control form-control-perso" placeholder="kg">
                    </div><br>
                    <div class="form-champ">
                        <label for="floatingPassword">Semaine</label>
                        <input name="nbsemaine" type="number" class="form-control form-control-perso" placeholder="1 semaine">
                    </div><br>
                    <div class="row" id="lignes">
                        <div class="col-md-6">
                            <button type="button" class="button btn-primary" data-previous>Retour</button><br>
                        </div><br>
                        <div class="col-md-6">
                            <input type="submit" class="button btn-primary" value="Confirmer">
                        </div>
                    </div>
                </div>
                
            <!-- <button type="button" class="btn btn-secondary" data-next>Next</button> -->
            </div>
        </form>
        </main>
        <?php }else{ redirect(base_url()); } ?>

    </body>
    <script src="<?php echo base_url('assets/JS/next.js'); ?>"></script>
</html>