
<?php echo json_encode($statNom); 
var_dump($statNom);?>
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
        <div class="logo_name">Fit-Foods</div>
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
       <a href="<?= site_url("AdminController/logout") ?>">
         <i class='fas fa-sign-out-alt' ></i>
         <span class="links_name">Deconnexion</span>
       </a>
       <span class="tooltip">Deconnexion</span>
     </li>
    </ul>
  </div>
  
  <section class="home-section">

    <!-- Statistique sur les nombres d'utilisateurs -->
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

      <!--CHART POUR LES STATISTIQUES -->
      <div class="content2">
            
        <div style="width: 350px;height:350px" class="report">
          <h1 style="text-align:center">Variables</h1>
          <canvas id="diagrame_2"></canvas>
        </div>
        
        <div style="width: 350px;height:350px," class="report">
          <h1 style="text-align:center">fixe</h1>
          <canvas id="fixe"></canvas>
        </div>

      </div>

    </div>

  </section>
<script defer>
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

  <script src="<?php echo base_url('assets/dist/js/bootstrap.bundle.min.js');?>" ></script>
  <script src="<?php echo base_url('assets/JS/scriptMenu.js'); ?>" ></script>
  <script src="<?php echo base_url('assets/JS/chart.js'); ?>"></script>     
  
  
   
</body>
</html>