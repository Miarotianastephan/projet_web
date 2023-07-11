
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/style/dash.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5/css/all.css'); ?>">
  </head>
  <body>

    <div class="wrapper">
      <div class="sidebar">
        <div class="profile">
          <div class="logo">
            <span class="logo-txt">Fit-Foods</span>
          </div>
          <img src="<?= base_url("assets/img/profile.svg")?>" alt="Logo" class="profile-img" />
          <div class="profile-content">
            <?php if ($this->session->has_userdata("estadmin")){ 
                    if($this->session->userdata("estadmin") == "oui") {
            ?>
                    <h2 class="name text-white"><?= $this->session->userdata("nomadmin") ?></h2>
                    <span class="position text-white"><?= $this->session->userdata("mail") ?></span>
                <?php } 
            }else{  redirect(base_url()); } ?>
          </div>
        </div>

        <ul class="menu">
          <li class="list active">
            <a href="#dashboard" class="link">
              <!-- <i class="fa fa-desktop"></i> -->
              <img src="<?= base_url("assets/img/icon-01.svg")?>" alt="icon" />
              <span>Tableau de bord</span>
            </a>
          </li>
          <li class="list">
            <a href="#stat" class="link">
                <!-- <i class="fa fa-window-maximize"></i> -->
                <img src="<?= base_url("assets/img/icon-04.svg")?>" alt="icon" />
              <span>Statistique</span>
            </a>
          </li>
          <li class="list">
            <a href="#payments" class="link">
                <!-- <i class="fa fa-money-bill"></i> -->
                <img src="<?= base_url("assets/img/icon-03.svg")?>" alt="icon" />
              <span>Payments Utilisateur</span>
            </a>
          </li>
          <li class="list">
            <a href="#regime" class="settings">
              <span>Régimes</span>
            </a>
          </li>
          <li class="list">
            <a href="#activite" class="link">
              <span>Activitées Sportives</span>
            </a>
          </li>
          <li class="list">
            <a href="<?= site_url("AdminController/logout") ?>" class="settings">
                <img src="<?= base_url("assets/img/icon-02.svg")?>" alt="icon" />
              <span>Deconnexion</span>
            </a>
          </li>
        </ul>

      </div>
      <div class="content">
        <section id="dashboard">
          <h1 class="section-heading">Dashboard</h1>        
            <div class="report">
                <h1>fixe</h1>
                <canvas id="fixe"></canvas>
            </div>            
            <div class="report">
                <h1>Variables</h1>
                <canvas id="diagrame_2"></canvas>
            </div>
        </section>
        <section id="stat">
          <h1 class="section-heading">Statistique</h1>
        </section>
        <section id="payments">
          <h1 class="section-heading">Payments</h1>
        </section>
        <section id="regime">
        <div class="bord_content" id="bord">
            <h3>Gestion des Regimes</h3><br>
            <div class="row" style="justify-content: space-evenly;">
                <div class="bord_content_child" id="space" style="background-image:url(<?php echo site_url('assets/test.png') ?>);"">
                    <h6>Ajout d'un regime</h6>
                    <form action="<?php echo site_url('AdminController/insertRegime') ?>" method="post">
                      <div class="form-floating mb-3">
                          <input type="text" name="nomRegime" class="form-control" id="floatingInput" placeholder="name@example.com" >
                          <label for="floatingInput">Nom</label>
                      </div>
                      <div class="form-floating mb-3">
                        <select name="activite" id="" class="form-control">
                        <option value="#">Activite compatible</option>
                          <?php for ($i=0; $i < count($activite); $i++) { ?>
                            <option value="<?php echo $activite[$i]['idactivite']; ?>"><?php echo $activite[$i]['nomactivite'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-floating">
                            <div class="col-md-6">
                                <div class=" mb-3">
                                  <select name="menuMatin" id="" class="form-control">
                                  <option value="#">Menu matin</option>
                                    <?php for ($i=0; $i < count($matin); $i++) { ?>
                                      <option value="<?php echo $matin[$i]['idmenu']; ?>"><?php echo $matin[$i]['nonmenu'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class=" mb-3">
                                  <label for="floatingInput">Pourcentage <i class="fa fa-cloud-sun" style="color:grey"></i></label>
                                  <input type="number" name="pourcentageMatin" class="form-control" id="floatingInput" placeholder="name@example.com">
                              </div>
                            </div>
                      </div>
                      <div class="form-floating">
                            <div class="col-md-6">
                                <div class="mb-3">
                                  <select name="menuMidi" id="" class="form-control">
                                    <option value="#">Menu midi</option>
                                    <?php for ($i=0; $i < count($midi); $i++) { ?>
                                      <option value="<?php echo $midi[$i]['idmenu']; ?>"><?php echo $midi[$i]['nonmenu'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                  <label for="floatingInput">Pourcentage <i class="fa fa-sun" style="color:grey"></i></label>
                                  <input type="number" name="pourcentageMidi" class="form-control" id="floatingInput" placeholder="name@example.com">
                              </div>
                            </div>
                            
                      </div>
                      <div class="form-floating">
                            <div class="col-md-6">
                                <div class="">
                                  <select name="menuSoir" id="" class="form-control">
                                    <option value="#">Menu soir</option>
                                    <?php for ($i=0; $i < count($soir); $i++) { ?>
                                      <option value="<?php echo $soir[$i]['idmenu']; ?>"><?php echo $soir[$i]['nonmenu'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="">
                                  <label for="floatingInput">Pourcentage <i class="fa fa-cloud-moon" style="color:grey"></i></label>
                                  <input type="text" name="pourcentageSoir" class="form-control" id="floatingInput" placeholder="name@example.com">
                              </div>
                            </div>
                      </div>
                      <div class="form-floating">
                            <div class="col-md-6">
                                <div class="">
                                  <select name="menuGouter" id="" class="form-control">
                                    <option value="#">Menu gouter</option>
                                    <?php for ($i=0; $i < count($gouter); $i++) { ?>
                                      <option value="<?php echo $gouter[$i]['idmenu']; ?>"><?php echo $gouter[$i]['nonmenu'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="">
                                  <label for="floatingInput">Pourcentage pour le Gouter</label>
                                  <input type="text" name="pourcentageGouter" class="form-control" id="floatingInput" placeholder="name@example.com">
                              </div>
                            </div>
                      </div>
                      <div class="form-floating mb-3">
                          <input type="number" name="calorie" class="form-control" id="floatingInput" placeholder="name@example.com">
                          <label for="floatingInput">Calorie</label>
                      </div>
                    
                    <input type="submit" value="Ajouter" class="button btn-primary">
                    </form>
                </div>
            </div><br><br>
          </div>
        </section>
        <section id="activite">
            <div class="bord_content" id="bord">
            <h3>Gestion des Activités</h3><br>
            <div class="row" style="justify-content: space-evenly;">
                <div class="bord_content_child" id="space" style="background-image:url(<?php echo site_url('assets/test.png') ?>);"">
                    <h6>Ajout d'une activite sportive</h6>
                    <form action="<?php echo site_url('AdminController/insertActivite') ?>" method="post" enctype="multipart/form-data">
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
                    <input type="submit" value="Ajouter" class="button btn-primary">
                    </form>
                </div>
            </div><br><br>
          </div>
        </section>
      </div>
    </div>
    <script >
    var ctx3= document.getElementById('diagrame_2').getContext('2d');
var data = {
   labels:<?php echo json_encode($statNom); ?>;
  datasets: [{
    data: <?php echo json_encode($statNombre); ?>,
    backgroundColor: ['blue', 'greenyellow'] // Couleurs des segments du diagramme
  }]
};

// Créez le graphe 2
var graphe_camembert = new Chart(ctx3, {
  type: 'pie', // Type de graphe (diagramme circulaire)
  data: <?php echo json_encode($statNombre); ?>,
  options: {
    responsive: true // Rend le graphe réactif à la taille de la fenêtre
  }
});

      //fixe
      const fixe = document.getElementById('fixe');
        
      new Chart(fixe, {
        type: 'pie',
        data: {
          //label sy data apifandraisina @ json le retour ao ambony
          labels: <?php echo json_encode($statNom); ?>,
          datasets: [{
          label: '#Hashtag Recues',
          data:<?php echo json_encode($statNombre); ?>,
          borderWidth: 1
          }]
        },
    });
</script>

    <script src="<?php echo base_url('assets/JS/dash.js'); ?>"></script>  
    <script src="<?php echo base_url('assets/JS/chart.js'); ?>"></script>     
  </body>
</html>
