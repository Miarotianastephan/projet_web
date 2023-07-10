<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
    <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5/css/all.css'); ?>">
    <script src="<?php echo base_url('assets/dist/js/bootstrap.bundle.min.js'); ?>"></script>

    <style>
        #enTete{
            background-color: white;
            /* background-color: #08b4b2; */
        }
        .nav-link{
            color: #00b4d8;
            /* margin-right: 23px; */
        }
        .nav-link:hover{
            background-color:#0077B6;
            color:#CAF0F8;
        }
        #profile{
            background-color:#0077B6;
            color:#CAF0F8;
        }
        .petitTitre{
            font-family: cursive;
    font-size: x-large;
    font-weight: 600;
        }
        #petitBoite{
            padding: 4% 4%;
            text-align: center;
            border-radius: 24px;
            box-shadow:  23px 23px 61px #e9e4e4,
             -23px -23px 61px #fffcfc;
            margin-left:5%;
            margin-top: 5%;
        }
        #ligne{
            flex-wrap: wrap;
    justify-content: flex-start;
    display: flex;
    margin-left: 9%;
}
        
        
    </style>
<body>

<div class="container">
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" id="enTete">
      <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4">E-Regime</span>
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link">Acceuil</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Rechergement</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Regime</a></li>
      </ul>
        

        <div class="dropdown text-end" id="boiteDroite">
          <a href="#" id="profile" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false">Mananjara</a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Deconnexion</a></li>
          </ul>
        </div>
    </header>
</div>  
<div class="container">
    <div class="" id="ligne">
        <div class="" id="petitBoite">
            <div>
                <p class="petitTitre">Perdre 2 a 4 kg</p>
                <p>Pendant 1 mois</p>
                <div id="detail"><a href="" class="btn btn-primary">Voir regime</a></div>
            </div>
        </div>
        <div class="" id="petitBoite">
            <div>
                <p class="petitTitre">Perdre 2 a 4 kg</p>
                <p>Pendant 1 mois</p>
                <div id="detail"><a href="" class="btn btn-primary">Voir regime</a></div>
            </div>
        </div>
        <div class="" id="petitBoite">
            <div>
                <p class="petitTitre">Perdre 2 a 4 kg</p>
                <p>Pendant 1 mois</p>
                <div id="detail"><a href="" class="btn btn-primary">Voir regime</a></div>
            </div>
        </div>
        <div class="" id="petitBoite">
            <div>
                <p class="petitTitre">Perdre 2 a 4 kg</p>
                <p>Pendant 1 mois</p>
                <div id="detail"><a href="" class="btn btn-primary">Voir regime</a></div>
            </div>
        </div>
        <div class="" id="petitBoite">
            <div>
                <p class="petitTitre">Perdre 2 a 4 kg</p>
                <p>Pendant 1 mois</p>
                <div id="detail"><a href="" class="btn btn-primary">Voir regime</a></div>
            </div>
        </div>
    </div>
</div>
    

</body>
</html>