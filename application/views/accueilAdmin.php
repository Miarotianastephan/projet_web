
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Administrateur</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
  <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5/css/all.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/style/styleAcceuil.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/style/styleMenu.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/style/menuVertical.css'); ?>">
  <script src="<?php echo base_url('assets/dist/js/bootstrap.bundle.min.js');?>" defer></script>
  <script src="<?php echo base_url('assets/JS/scriptMenu.js'); ?>" defer></script>
  <script src="<?php echo base_url('assets/JS/chart.js'); ?>"></script>     

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

    <div class="container" id="back">
      <h3>Tableaux de bord</h3><br>
      <div class="row" id="bord">
        <table class="table">
          <tr id="titreTableau">
            <td>Designation</td>
            <td>Nombre</td>
          </tr>
          <tr>
            <td>Nombre d'utilisateur actifs sur la plateforme</td>
            <td style="text-align:right;">1</td>
            
          </tr>
          <tr>
            <td>Nombre d'inscrit par semaine</td>
            <td style="text-align:right;">322</td>
          </tr>
          <tr>
            <td>Nombre d'argent obtenue</td>
            <td style="text-align:right;">21</td>
          </tr>
        </table>
      </div>
      <!-- //... -->
      <div style="display:flex;" class="content2">
            <div style="width: 350px;height:350px" class="container">
              <h1 style="text-align:center">Variables</h1>
              <canvas id="variable"></canvas>
            </div>
            <div style="width: 350px;height:350px," class="container">
              <h1 style="text-align:center">fixe</h1>
              <canvas id="fixe"></canvas>
            </div>
          </div>
    </div>

    <!-- <footer class="py-3 my-4" style="background-color: white;">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ETU001754 ANDRIAMIHARISOA Mananjara </a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ETU001779 IHARIMIMA Teddy</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ETU001863 RANDRIAMBOLOLONA Tafita Anael </a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2023 Company, Inc</p>
    </footer> -->
  </section>

<script>
  //Varibale
  const variable = document.getElementById('variable');
          
          new Chart(variable, {
            type: 'pie',
          //...................eto ny tena important
            data: {
              //label sy data apifandraisina @ json le retour ao ambony
              labels: ['sa','sa','sasa'],
              datasets: [{
              label: '# of Votes',
              data: [1,2,3],
              borderWidth: 1
              }]
            },
          //.................eto ny tena important
          //   options: {
          //     animations: {
          //     tension: {
          //         duration: 25000000,
          //         easing: 'linear',
          //         from: 1,
          //         to: 0,
          //         loop: true
          //     }
          //     },
          //     scales: {
          //     y: { // defining min and max so hiding the dataset does not change scale range
          //         min: 25000000,
          //         max: 100000000
          //     }
          //     }
          // }
        });
          //fixe
          const fixe = document.getElementById('fixe');
        
          new Chart(fixe, {
            type: 'pie',
          //...................eto ny tena important
            data: {
              //label sy data apifandraisina @ json le retour ao ambony
              labels: ['sa','sa','sasa'],
              datasets: [{
              label: '# of Votes',
              data:[1,2],
              borderWidth: 1
              }]
            },
          //.................eto ny tena important
          //   options: {
          //     animations: {
          //     tension: {
          //         duration: 20000000,
          //         easing: 'linear',
          //         from: 1,
          //         to: 0,
          //         loop: true
          //     }
          //     },
          //     scales: {
          //     y: { // defining min and max so hiding the dataset does not change scale range
          //         min: 20000000,
          //         max: 160000000
          //     }
          //     }
          // }
        });
</script>
  
   
</body>
</html>