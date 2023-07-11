<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Regime</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
  <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5/css/all.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/style/styleAcceuil.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/style/styleMenu.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/style/menuVertical.css'); ?>">
  <script src="<?php echo base_url('assets/dist/js/bootstrap.bundle.min.js');?>" defer></script>
  <script src="<?php echo base_url('assets/JS/scriptMenu.js'); ?>" defer></script>

<style>
  #titreTableau{
    background-color:#023246;
    color: whiteSmoke;
  }
  #bord{
    padding: 7% 5%;
    width: 64%;
    border-radius: 24px;
    box-shadow:  23px 23px 61px #e9e4e4,
            -23px -23px 61px #fffcfc;
  }
</style>
<body>
  <!-- ... -->
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">LOGO</div>
        <i class='fas fa-bars' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
          <i class="fas fa-home"></i>
          <span class="links_name">Accueil</span>
        </a>
         <span class="tooltip">Accueil</span>
      </li>
      <li>
        <a href="<?php echo site_url('Facture/index');?>">
          <i class="fas fa-check"></i>
          <span class="links_name">Notification</span>
        </a>
         <span class="tooltip">Notification</span>
      </li>
      <li>
       <a href="<?php echo site_url('AdminRegime/regime');?>">
         <i class='far fa-list-alt' ></i>
         <span class="links_name" >Regime</span>
       </a>
       <span class="tooltip">Regime</span>
     </li>
     <li>
       <a href="<?php echo site_url('Controller/journal');?>">
         <i class='fas fa-newspaper'></i>
         <span class="links_name">Activite Sportive</span>
       </a>
       <span class="tooltip">Activite Sportive</span>
     </li>
     <li>
       <a href="<?php echo site_url('Controller/livre/1');?>">
         <i class='fas fa-book' ></i>
         <span class="links_name">Autre</span>
       </a>
       <span class="tooltip">Autre</span>
     </li>
     <li>
       <a href="<?php echo site_url('Controller/logout');?>">
         <i class='fas fa-sign-out-alt' ></i>
         <span class="links_name">Deconnexion</span>
       </a>
       <span class="tooltip">Deconnexion</span>
     </li>
    </ul>
  </div>
  <!-- Manoratra ao @droite -->
  <section class="home-section">
        <div class="container" id="bord">
            <h3>Gestion des regime</h3><br>
            <div class="row" style="justify-content: space-evenly;">
                <div class="col-md-6" id="space" style="background-image:url(<?php echo site_url('assets/test.png') ?>);"">
                    <h6>Ajout d'une activite sportive</h6>
                    <form action="<?php echo site_url('AdminActivite/insertActivite') ?>" method="post" enctype="multipart/form-data">
                      <div class="form-floating mb-3">
                          <input type="text" name="nomactivite" class="form-control" id="floatingInput" placeholder="name@example.com" >
                          <label for="floatingInput">Nom de l'activite</label>
                      </div>
                        <!-- ... -->
                        <label for="photoactivite">Photo pour l'activite</label>
                        <div class="form-floating mb-3">
                            <input type="file" name="photoactivite" id="password" style="border-radius:.25em;" class="form-control">
                        </div>
                        <!-- ... -->
                      <div class="form-floating mb-3">
                          <input type="text" name="descriptionactivite" class="form-control" id="floatingInput" placeholder="name@example.com">
                          <label for="floatingInput">Description</label>
                      </div>
                    <input type="submit" value="Ajouter" class="btn btn-primary">
                    </form>
                </div>
            </div><br><br>
          </div>
  </section>
</body>
</html>