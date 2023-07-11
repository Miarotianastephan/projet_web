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
            <img src="images/logo-icon.svg"/>
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
            <a href="<?= site_url("AdminController/logout") ?>" class="settings">
                <img src="<?= base_url("assets/img/icon-02.svg")?>" alt="icon" />
              <span>Deconnexion</span>
            </a>
          </li>
        </ul>

        <div class="create-teams">
          <div class="create-teams-content">
            <img src="images/icon-dot.svg" alt="icon" class="icon-dot" />
            <img src="images/create-team.svg" alt="icon" class="teams-icon" />
            <h5 class="teams-title text-white">Coté gestion et parametrage</h5>
            <p class="teams-description text-dark">
              CRUD: regime, activité sprotif, gestion des transactions
            </p>
          </div>
        </div>
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
        <section id="attendance">
          <h1 class="section-heading">Attendance</h1>
        </section>
      </div>
    </div>
    <script src="<?php echo base_url('assets/JS/dash.js'); ?>"></script>  
    <script src="<?php echo base_url('assets/JS/chart.js'); ?>"></script>     
    <script src="<?php echo base_url('assets/JS/report.js'); ?>"></script> 
  </body>
</html>
