<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
    <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/style/acceuil.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5/css/all.css'); ?>">
    <script src="<?php echo base_url('assets/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <style>
    </style>
<body>

<div class="container">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" id="enTete">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <span class="fs-4">Fit-Foods</span>
        </a>
        <ul class="nav nav-pills nav-pills_perso">
          <li class="nav-item"><a href="#" class="nav-link">Acceuil</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Rechergement</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Regime</a></li>
          <li class="nav-item">
            <div class="dropdown text-end" id="boiteDroite">
              <?php if ($this->session->has_userdata("idutilisateur")){ ?>
                <a href="#" class="button btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle"></i> <?= $this->session->userdata("nomutilisateur") ?></a>
              <?php }else{  redirect(base_url()); } ?>
                <ul class="action dropdown-menu text-small">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="<?= site_url("UtilisateurController/logout") ?>">Deconnexion</a></li>
                </ul>
            </div>
          </li>
        </ul>
          

  </header>
</div>  <br>
<div class="container">
    <div class="row" style="    justify-content: space-around;">
<!-- REGIME -->
<div class="col-md-5">
    <h5>Voici les codes existants</h5><br>
    <table class="table">
        <tr style="background-color:#00b4d8;color: whiteSmoke;">
            <td>Code</td>
            <td>Prix en Ariary</td>
        </tr>
        <?php for ($i=0; $i < count($code); $i++) { ?>
            <tr>
            <td><?php echo $code[$i]['numerocode']; ?></td>
            <!-- -->
            <td style="text-align:right;"><?php echo number_format( $code[$i]['valeurcode'], 2, ',', ' '); ?></td>
        </tr>
        <?php } ?>
        
    </table>
</div>
<div class="col-md-5">
    <h5>Recharger son compte</h5><br>
    <form action="<?php echo site_url('AcceuilController/crediter'); ?>" method="post">
        <p><input type="number" name="code" id="" class="form-control" style="    width: 50%;"></p>
        <p><input type="submit" value="Confirmer" class="btn btn-primary" style="border:none; background-color:rgba(32, 112, 87, 0.822);"></p>
    </form>
</div>
      
      </div>
    </div>
<!-- ROW OF REGIME -->

</body>
</html>