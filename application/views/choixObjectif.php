<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objectif</title>
</head>
<link href="<?= base_url("assets/style/style.css") ?>" rel="stylesheet" />

<link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5/css/all.css'); ?>">
<script src="<?php echo base_url('assets/JS/next.js'); ?>" defer></script>
<style>
    .card {
    height: 99%;
      width: 69%;
      padding: 11%;
      border-radius: 24px;
      box-shadow:  23px 23px 61px #e9e4e4,
                  -23px -23px 61px #fffcfc;
      animation: fade 250ms ease-in-out forwards;
  }
  
  .form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: .5rem;
    gap: .25em;
  }
  
  .form-group:last-child {
    margin: 0;
  }
  
  .form-group > label {
    font-weight: bold;
    font-size: .8em;
    color: #333;
  }
  
  .form-group > input {
    border: 1px solid #333;
    border-radius: .25em;
    font-size: 1rem;
    padding: .25em;
  }
  
  .step-title {
    margin: 0;
    margin-bottom: 1rem;
    text-align: center;
  }
  
  .card.active {
    animation: slide 250ms 125ms ease-in-out both;
  }
  
  .multi-step-form {
    overflow: hidden;
    position: relative;
    width: 100%;
    text-align: -webkit-center;
  }
  
  .hide {
    display: none;
  }
  
  @keyframes slide {
    0% {
      transform: translateX(200%);
      opacity: 0;
    }
    100% {
      transform: translateX(0);
      opacity: 1;
    }
  }
  
  @keyframes fade {
    0% {
      transform: scale(1);
      opacity: 1;
    }
    50% {
      transform: scale(.75);
      opacity: 0;
    }
    100% {
      opacity: 0;
      transform: scale(0);
    }
  }
  #step2{
      width: 62%;
  }
</style>
<body>
<!-- <form data-multi-step class="multi-step-form">
     <div class="card" data-step>
            <div class="container">
                <h3>Passons aux choix de vos objectifs</h3><br>
                <div class="container">
                    <p>Choisissez votre au objectif : </p><br>
                    <div class="row" id="ligne" style="">
                        <b class="col-md-3" value="1">
                            <select name="" id="" class="form-control">
                                <option value="#">Objectif</option>
                                <option value="#">Perdre de Poids</option>
                            </select>
                        </b>
                    </div>
                    
                </div>
                <br>
                <button class="btn btn-primary" data-next>Suivant</button>
            </div>
    </div>


    <!-- .. -->
    <form data-multi-step class="multi-step-form">

    <div class="card" data-step>
      <h3 class="step-title">This is step 1</h3>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
      </div>
      <button type="button" data-next>Next</button>
    </div>

    <div class="card" data-step>
                    <h3>Passons aux choix de vos objectifs</h3><br>
                    
                    <br>

                </div>
                <button type="button" data-next>Suivant</button>
    </div>


    <div class="card" data-step>
      <h3 class="step-title">This is step 2</h3>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address">
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" id="city">
      </div>
      <div class="form-group">
        <label for="zipcode">Zip Code</label>
        <input type="text" name="zipcode" id="zipcode">
      </div>
      <button type="button" data-previous>Previous</button>
      <button type="button" data-next>Next</button>
    </div>

        <div class="card" data-step>
            <div class="container" id="step2">
                <div class="form-floating">
                    <select name="status" id="" class="form-control">
                        <option value="#">Niveau</option>
                        <option value="0">Pas d'exercice</option>
                        <option value="1">Legerement actif</option>
                        <option value="2">Moderement actif</option>
                        <option value="3">Tres actif</option>
                    </select>
                </div><br>

                <div class="form-floating">
                    <input name="kilo" type="number" class="form-control" placeholder="Poids a perdre ou a gagner">
                    <label for="floatingPassword">Poids a perdre ou a gagner</label>
                </div><br>
                
                <div class="form-floating">
                    <input name="nbsemaine" type="number" class="form-control" placeholder="Semaine">
                    <label for="floatingPassword">Semaine</label>
                </div><br>
                
                <div class="row" id="lignes">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary" data-previous>Previous</button><br>
                    </div><br>
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Confirmer">
                    </div>
                </div>
            </div> -->
        
      <!-- <button type="button" class="btn btn-secondary" data-next>Next</button> -->
    </div>
</form>

</body>
</html>