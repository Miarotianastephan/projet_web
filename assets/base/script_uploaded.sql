create database bdd_appli;

use bdd_appli;

create table genre(
    idgenre INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomgenre VARCHAR(100) NOT NULL
);

create table backoff(
    idadmin INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomadmin VARCHAR(250) NOT NULL,
    mail VARCHAR(250) NOT NULL,
    pwd VARCHAR(50) NOT NULL
);

create table utilisateur (
    idutilisateur INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomutilisateur VARCHAR(250) NOT NULL,
    mail VARCHAR(250) NOT NULL,
    pwd VARCHAR(50) NOT NULL,
    idgenre INT, -- 0 femelle et 1 male
    taille DECIMAL(5,2), -- exemple 280,50 cm 
    poids FLOAT,
    age INT,
    FOREIGN KEY (idgenre) REFERENCES genre(idgenre)
);

create table objectif(
    idobjectif INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomobjectif VARCHAR(250) NOT NULL
);

create table portemonnaie(
    idportemonnaie INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idutilisateur INT,
    solde FLOAT,
    FOREIGN KEY (idutilisateur) REFERENCES utilisateur(idutilisateur)
);

create table code(
    idcode INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    numerocode VARCHAR(20), -- 123456789
    valeurCode FLOAT -- 5.000.000 ariary
);

create table transaction(
    idtransaction INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idadmin INT NOT NULL,
    idutilisateur INT NOT NULL,
    idcode INT NOT NULL,
    numerocode INT,
    valeurcode FLOAT NOT NULL,
    transactiondate TIMESTAMP,
    FOREIGN KEY (idadmin) REFERENCES backoff(idadmin),
    FOREIGN KEY (idutilisateur) REFERENCES utilisateur(idutilisateur),
    FOREIGN KEY (idcode) REFERENCES code(idcode)
);

create table regime(
    idregime INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomregime VARCHAR(250) NOT NULL
);

create table activite(
    idactivite INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomactivite VARCHAR(250) NOT NULL,
    photoactivite VARCHAR(50),
    descriptionactivite TEXT
);

create table menu(
    idmenu INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nonmenu VARCHAR(100) DEFAULT '',
    descriptionmenu TEXT,
    photomenu VARCHAR(50),
    statutmenu INT NOT NULL, -- (1:Maraina, 1:a=midi , 3:Soir, 4:goute)
    prixmenu FLOAT
);

create table regime_menu(
    idregimemenu INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idregime INT NOT NULL,
    idmenu INT NOT NULL,
    composition FLOAT NOT NULL,
    FOREIGN KEY (idregime) REFERENCES regime(idregime),
    FOREIGN KEY (idmenu) REFERENCES menu(idmenu)
);

create table regime_activite(
    idregimeactivite INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idregime INT NOT NULL,
    quantite FLOAT NOT NULL,
    idactivite INT NOT NULL,
    dureactivite  INT NOT NULL,
    kilocalories FLOAT NOT NULL,
    FOREIGN KEY (idregime) REFERENCES regime(idregime),
    FOREIGN KEY (idactivite) REFERENCES activite(idactivite)
);

create table commande(
    idcommande INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idutilisateur INT NULL,
    idregimeactivite INT NOT NULL,
    jour INT NOT NULL,
    semaine INT NOT NULL,
    prixcommande FLOAT NOT NULL,
    datecommande TIMESTAMP,
    FOREIGN KEY (idregimeactivite) REFERENCES regime_activite(idregimeactivite),
    FOREIGN KEY (idutilisateur) REFERENCES utilisateur(idutilisateur)
);
