<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objectif</title>
</head>
<link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5/css/all.css'); ?>">

<style>
html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: left;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}
#boite{
    /* border: double; */
    height: 99%;
    width: 69%;
    padding: 11%;
    border-radius: 24px;
    /* background: #f5f0f0; */
    box-shadow:  23px 23px 61px #e9e4e4,
                -23px -23px 61px #fffcfc;
}
#ligne{
    display: flex;
    justify-content:space-evenly;
}
#title{
  color: #444444;
    box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
    padding: 20px 0 30px 0;
    transition: all ease-in-out 0.3s;
    text-align:center;
    border-radius:15px;
    text-decoration: none;
}
#title:hover{
  background-color: #023246;
  color: #fff;
}
#title:hover #symbole{
  color: #FFE3B3;
}
#title h{
  font-size: 20px;
    color: #777777;
    font-weight: 700;
    margin: 10px 0;
}
#title p{
    font-weight: 600;
}
#symbole{
  font-size: 32px;
    color: #0AB68B;
    border-radius: 50%;
    padding: 8px;
}

</style>
<body>

    <div class="container" id="boite">
        <h3>Passons aux choix de vos objectifs</h3><br>
        <div class="container">
            <p>Choisissez votre au objectif : </p><br>
            <div class="row" id="ligne" style="">
                <a class="col-md-3" id="title" href="#">
                    <i class="fas fa-walking" id="symbole"></i>
                    <p>Perdre du poids</p>
                </a>
                <a class="col-md-3" id="title" href="#">
                    <i class="fas fa-star" id="symbole"></i>
                    <p>Augmenter son poid</p>
                </a>
                <a class="col-md-3" id="title" href="#">
                    <i class="fas fa-smile" id="symbole"></i>
                    <p>Moyen</p>
                </a>
            </div>
        </div>
        <button class="btn btn-primary"></button>
    </div>

</body>
</html>