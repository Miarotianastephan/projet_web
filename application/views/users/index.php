<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?= site_url("UtilisateurController/logout") ?>">Deconnexion</a>
    <?php if ($this->session->has_userdata("idutilisateur")){ ?>
        <p>Vous etes connecté en tant que <?= $this->session->userdata("nomutilisateur") ?></p>
    <?php }else{ ?>
        <p> Verifier vos info de connnexion ! </p>
    <?php } ?>
</body>
</html>