<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($this->session->has_userdata("estadmin")){ ?>
        <a href="<?= site_url("UtilisateurController/logout") ?>">Deconnexion</a>
        <?php 
                if($this->session->userdata("estadmin") == "oui")
                { ?>
                    <p>Vous etes connecté en tant admin <?= $this->session->userdata("nomadmin") ?></p>
        <?php   }
                else if($this->session->userdata("estadmin") == "non")
                { ?>
                    <p>Vous etes connecté en tant Utilisateur <?= $this->session->userdata("nomutilisateur") ?></p>
        <?php   }
        }else{ ?>
            <p> Verifier vos info de connnexion ! </p>
    <?php } ?>
</body>
</html>