-- insertion donnée test genre
insert into genre(nomgenre) values ('Male');
insert into genre(nomgenre) values ('Femelle');

-- insertion donnée test admin
insert into backoff(nomadmin,mail,pwd) values('MainAdmin','mad@gmail.com','ad');
insert into backoff(nomadmin,mail,pwd) values('Admin','admin@gmail.com','admin');

-- insertion données test objoectifs
insert into objectif(nomobjectif) values ('Perdre du Poids');
insert into objectif(nomobjectif) values ('Augmenter de Masse');
insert into objectif(nomobjectif) values ('Manger sainement');

insert into Utilisateur(nomutilisateur,mail,pwd,idgenre,taille,poids,age) values('liala','kiala@gmail.com','0000','2','155','39','21');
insert into Utilisateur(nomutilisateur,mail,pwd,idgenre,taille,poids,age) values('soa','soa@gmail.com','1010','1','175','100','35')




insert into regime values(1,'regime hypercalorique');
insert into regime values(2,'regime riche en glucide');
insert into regime values(3,'regime equilibre');
insert into regime values(4,'regime fractionne');
insert into regime values(5,'regime de renforement musculaire');
insert into regime values(6,'regime riche en proteine');
insert into regime values(7,'hyperproteinne');
insert into regime values(8,'proteinee');
insert into regime values(9,'hypoproteinee');
insert into regime values(10,'regime hollywood 1');
insert into regime values(11,'regime hollywood 2');
insert into regime values(12,'le regime IG bas 1');
insert into regime values(13,'regime dash 1');
insert into regime values(14,'regime soupe au choux ');
insert into regime values(15,'regime chrononutrution');
insert into regime values(16,'regime alcalin');
insert into regime values(17,'regime Thonon');
insert into regime values(18,'regime ventre plat');
insert into regime values(19,'regime natman');
insert into regime values(20,'regime flexitarien');




///grossir 
insert into menu values(1,'Salade de legume frais avec du poulet speciale','Une plat pour gagner de poids a manger le midi composer d oeuf dur, brocoli, poulet, concombre... ','gdej1.jpg',2,7000);
insert into menu values(2,'Crevette au crudite','Une plat pour gagner de calorie a consommer le midi composer de crevette , crudite... ','gdej2.jpg',2,10000);
insert into menu values(3,'Poisson au legume saute','Une plat pour gagner de calorie a consommer le midi composer de brocoli,chou,viande de poisson... ','gdej3.jpg',2,15000);
insert into menu values(4,'Champignon et crevette avec legume','Composer de crevette, Champignon, legume... ','gdej4.jpg',2,10000);
insert into menu values(5,'Poisson sauce','Une plat riche en nutriment composer de poisson, brocoli... ','gdej5.jpg',2,15000);
insert into menu values(6,'Salade de legume avec poisson','Une plat riche en nutriment composer de poisson, carotte... ','gdej6.jpg',2,10000);
insert into menu values(7,'Charcuterie et legume','Une plat riche en nutriment','gdej7.jpg',2,5000);
insert into menu values(8,'Soupe de cervelle','Une plat riche en nutriment composer de cervelle de boeuf et une soupe bien chaude ... ','gdej8.jpg',2,9000);
insert into menu values(9,'Steak simple','viande bien cuite avec salade et autre composants croustillant','gdej9.jpg',2,7000);


insert into menu values(10,'Steak au germe de Soja','Le germe de Soja contient beaucoup de calorie et bon pour la sante','gdinner1.jpg',3,7000);
insert into menu values(11,'Viande et crudite','Une plat riche en nutriment tres bon pour la croissance','gdinner2.jpg',3,6000);
insert into menu values(12,'Poulet au legume','Simple mais bon et sain','gdinner3.jpg',3,5000);
insert into menu values(13,'Riz au steak legume','Une specialite malgache , facile a digere et contient beaucoup de calorie','gdinner4.jpg',3,10000);
insert into menu values(14,'Sushi special aux haricots','Authentiquement japonaise','gdinner5.jpg',3,15000);
insert into menu values(15,'Viande aux haricots verts','Melange de viande de boeuf et de poulet avec des haricots verts','gdinner6.jpg',3,9000);
insert into menu values(16,'Avocat speciale au mais ','Melange de oeuf, mais, avocat','gdinner7.jpg',3,9000);


insert into menu values(17,'Demi lune speciale','Nourriture bon pour demarrer le matin','gptedej1.jpg',1,4000);
insert into menu values(18,'Saucisse speciale','Saucisse avec oeuf sur plat','gptedej2.jpg',1,6000);
insert into menu values(19,'Saucisse speciale gm','Grosse Saucisse avec oeuf sur plat','gptedej3.jpg',1,8000);
insert into menu values(20,'Avocat au saucisse special','Authentiquement allemande','gptedej4.jpg',1,9000);
insert into menu values(21,'Oeuf brouille au avocat','Menu sain et riche en calorie','gptedej5.jpg',1,7000);
insert into menu values(22,'Saucisse speciale pm','Mini Saucisse avec oeuf sur plat','gptedej6.jpg',1,5000);


insert into menu values(23,'Banane au cereale','','ggoute1.jpg',4,10000);
insert into menu values(24,'Cheese burger','Burger fourre au cheddar','ggoute2.jpg',4,18000);
insert into menu values(25,'Pancakes','Pancakes de grow foods','ggoute3.jpg',4,15000);
insert into menu values(26,'Petit gateaux speciale','Mini gateau avec oeuf sur plat et sucisse','ggoute4.jpg',4,15000);
insert into menu values(27,'Yaourt au fraise','Yaourt accompagne de fraise','ggoute5.jpg',4,5000);




///maigrir
insert into menu values(28,'Soupe au salade de legume ','','mdej1.jpg',2,10000);
insert into menu values(29,'salade de legume ','Lentille , courgettes , feta , aBasilic ,Coriande , Graines de tournelsol ','mdej2.jpg',2,10000);
insert into menu values(30,'crudite ','Crudite fourree au mangue ','mdej3',2,15000);
insert into menu values(31,'Salade de crevette','legume, Champignon, crevettes... ','mdej4.jpg',2,12000);
insert into menu values(32,'Pain Avec sauce','Une plat riche en nutriment composer de pain,oeufs , ...','mdej5.jpg',2,13200);
insert into menu values(33,'Salade de pate','Une plat riche en nutriment composer de pate, carotte, thon... ','mdej6.jpg',2,10000);
insert into menu values(34,'salade au Avocat','Une plat riche en nutriment composer de avocat et de legume ','mdej7.jpg',2,5000);
insert into menu values(35,'salade de pate au thon','Une plat riche en nutriment composer de cervelle de jambon, parmesan ,petit poids ... ','mdej8.jpg',2,9000);
insert into menu values(36,'Salade de poulet au curry','poulet bien cuite avec batternut et obergines','mdej9.jpg',2,7000);


insert into menu values(37,'Poisson au avocat','Les avocats contiennent beaucoup de calorie et bon pour la sante','mdinner1.jpg',3,7000);
insert into menu values(38,'Viande et frommage','Une plat riche en nutriment tres bon pour la croissance','mdinner2.jpg',3,6000);
insert into menu values(39,'Viande de poulet ','poulet saute avec salade de patte','mdinner3.jpg',3,10000);
insert into menu values(40,'Viande de poissonn','Poissonn grille avec poirreaux','mdinner4.jpg',3,15000);
insert into menu values(41,'Salade de poisson','Salade de poisson aux epinards','mdinner5.jpg',3,9000);
insert into menu values(42,'Avocat speciale au mais ','Melange de oeuf, mais, avocat','mdinner6.jpg',3,9000);
insert into menu values(43,'Omelette avec Mokaro','Simple mais bon et sain, c est une specialite malgache','mdinner7.jpg',3,5000);


insert into menu values(44,'Croque Monsieur','Deux pain avec deux omellettes','mptedej1.jpg',1,4000);
insert into menu values(45,'Steak speciale','Steak avec omellettes et des raisains','mptedej2.jpg',1,6000);
insert into menu values(46,'Croque Monsieur ','Croque Monsieur auc avocats avec une tasse de cafe','mptedej3.jpg',1,8000);
insert into menu values(47,'pain aux avocats','Authentiquement allemande','mptedej4.jpg',1,9000);
insert into menu values(48,'Pain avec cerises','Menu sain et riche en calorie','mptedej5.jpg',1,7000);
insert into menu values(49,'Croque Mr','Mini Pain avec oeuf sur plat et des salades avocats','mptedej6.jpg',1,5000);


insert into menu values(50,'Yaourt','Yaourt avec salade de fruits','mgoute1.jpg',4,10000);
insert into menu values(51,'goffre','','mgoute2.jpg',4,18000);
insert into menu values(52,'Pancakes','Pancakes de grow foods avec des cerises','mgoute3.jpg',4,15000);
insert into menu values(53,'Gateau ','que du delice','mgoute7.jpg',4,15000);
insert into menu values(54,'Chocolat','Mini chocolat avec cafe au lait chaude','mgoute4.jpg',4,15000);
insert into menu values(55,'Yaourt au miel','Yaourt accompagne de miel et un petit jus frais','mgoute5.jpg',4,5000);
insert into menu values(56,'Petit Gateau','Un petit gateau gourmand avec une trace orange','mgoute6.jpg',4,5000);



insert into regime_menu(idregime,idmenu,composition) values(1,1,30);
insert into regime_menu(idregime,idmenu,composition) values(1,10,30);
insert into regime_menu(idregime,idmenu,composition) values(1,17,30);
insert into regime_menu(idregime,idmenu,composition) values(1,23,10);

insert into regime_menu(idregime,idmenu,composition) values(2,2,30);
insert into regime_menu(idregime,idmenu,composition) values(2,11,30);
insert into regime_menu(idregime,idmenu,composition) values(2,18,30);
insert into regime_menu(idregime,idmenu,composition) values(2,24,10);

insert into regime_menu(idregime,idmenu,composition) values(3,3,30);
insert into regime_menu(idregime,idmenu,composition) values(3,12,30);
insert into regime_menu(idregime,idmenu,composition) values(3,19,30);
insert into regime_menu(idregime,idmenu,composition) values(3,25,10);

insert into regime_menu(idregime,idmenu,composition) values(4,4,30);
insert into regime_menu(idregime,idmenu,composition) values(4,13,30);
insert into regime_menu(idregime,idmenu,composition) values(4,20,30);
insert into regime_menu(idregime,idmenu,composition) values(4,26,10);

insert into regime_menu(idregime,idmenu,composition) values(5,5,30);
insert into regime_menu(idregime,idmenu,composition) values(5,14,30);
insert into regime_menu(idregime,idmenu,composition) values(5,21,30);
insert into regime_menu(idregime,idmenu,composition) values(5,27,10);

insert into regime_menu(idregime,idmenu,composition) values(6,6,30);
insert into regime_menu(idregime,idmenu,composition) values(,15,30);
insert into regime_menu(idregime,idmenu,composition) values(6,22,30);
insert into regime_menu(idregime,idmenu,composition) values(6,1,10);

insert into regime_menu(idregime,idmenu,composition) values(7,7,30);
insert into regime_menu(idregime,idmenu,composition) values(7,16,30);
insert into regime_menu(idregime,idmenu,composition) values(7,17,30);
insert into regime_menu(idregime,idmenu,composition) values(7,26,10);


insert into regime_menu(idregime,idmenu,composition) values(8,8,30);
insert into regime_menu(idregime,idmenu,composition) values(8,12,30);
insert into regime_menu(idregime,idmenu,composition) values(8,18,30);
insert into regime_menu(idregime,idmenu,composition) values(8,23,10);

insert into regime_menu(idregime,idmenu,composition) values(9,9,30);
insert into regime_menu(idregime,idmenu,composition) values(9,13,30);
insert into regime_menu(idregime,idmenu,composition) values(9,19,30);
insert into regime_menu(idregime,idmenu,composition) values(9,24,10);

insert into regime_menu(idregime,idmenu,composition) values(10,1,30);
insert into regime_menu(idregime,idmenu,composition) values(10,14,30);
insert into regime_menu(idregime,idmenu,composition) values(10,20,30);
insert into regime_menu(idregime,idmenu,composition) values(10,25,10);




insert into regime_menu(idregime,idmenu,composition) values(11,28,30);
insert into regime_menu(idregime,idmenu,composition) values(11,37,30);
insert into regime_menu(idregime,idmenu,composition) values(11,44,30);
insert into regime_menu(idregime,idmenu,composition) values(11,50,10);

insert into regime_menu(idregime,idmenu,composition) values(12,29,30);
insert into regime_menu(idregime,idmenu,composition) values(12,38,30);
insert into regime_menu(idregime,idmenu,composition) values(12,45,30);
insert into regime_menu(idregime,idmenu,composition) values(12,51,10);

insert into regime_menu(idregime,idmenu,composition) values(13,30,30);
insert into regime_menu(idregime,idmenu,composition) values(13,39,30);
insert into regime_menu(idregime,idmenu,composition) values(13,46,30);
insert into regime_menu(idregime,idmenu,composition) values(13,52,10);

insert into regime_menu(idregime,idmenu,composition) values(14,31,30);
insert into regime_menu(idregime,idmenu,composition) values(14,40,30);
insert into regime_menu(idregime,idmenu,composition) values(14,47,30);
insert into regime_menu(idregime,idmenu,composition) values(14,53,10);

insert into regime_menu(idregime,idmenu,composition) values(15,32,30);
insert into regime_menu(idregime,idmenu,composition) values(15,41,30);
insert into regime_menu(idregime,idmenu,composition) values(15,48,30);
insert into regime_menu(idregime,idmenu,composition) values(15,54,10);

insert into regime_menu(idregime,idmenu,composition) values(16,33,30);
insert into regime_menu(idregime,idmenu,composition) values(16,42,30);
insert into regime_menu(idregime,idmenu,composition) values(16,49,30);
insert into regime_menu(idregime,idmenu,composition) values(16,55,10);

insert into regime_menu(idregime,idmenu,composition) values(17,34,30);
insert into regime_menu(idregime,idmenu,composition) values(17,43,30);
insert into regime_menu(idregime,idmenu,composition) values(17,44,30);
insert into regime_menu(idregime,idmenu,composition) values(17,56,10);


insert into regime_menu(idregime,idmenu,composition) values(18,35,30);
insert into regime_menu(idregime,idmenu,composition) values(18,37,30);
insert into regime_menu(idregime,idmenu,composition) values(18,45,30);
insert into regime_menu(idregime,idmenu,composition) values(18,50,10);

insert into regime_menu(idregime,idmenu,composition) values(19,36,30);
insert into regime_menu(idregime,idmenu,composition) values(19,39,30);
insert into regime_menu(idregime,idmenu,composition) values(19,46,30);
insert into regime_menu(idregime,idmenu,composition) values(19,51,10);

insert into regime_menu(idregime,idmenu,composition) values(20,28,30);
insert into regime_menu(idregime,idmenu,composition) values(20,40,30);
insert into regime_menu(idregime,idmenu,composition) values(20,47,30);
insert into regime_menu(idregime,idmenu,composition) values(20,52,10);


insert into activite values(1,'Squat','activite1.jpg','Faire du squat 3 serie de 10 fois avec une repos de 2minutes');
insert into activite values(2,'Squat Hard','activite2.jpg','Faire du squat 4 serie de 10,12,15,20 fois avec une repos de 2minutes');
insert into activite values(3,'Corde a sauter','activite3.jpg','Faire de la corde 3 serie de 20 fois avec une repos de 2minutes');
insert into activite values(4,'Corde a sauter Hard','activite4.jpg','Faire de la corde 3 serie de 50 fois avec une repos de 2minutes , boire de l eau pas plus de 3 gorger');
insert into activite values(5,'Pompe','activite4.jpg','Faire de la pompe 3 serie de 10 fois avec une repos de 2minutes , boire de l eau pas plus de 3 gorger');
insert into activite values(6,'Jogging','activite5.jpg','Faire du jogging pendant 30 minutes, boire de l eau pas plus de 3 gorger et bien etire les muscles apres');
insert into activite values(7,'Jumping Jack','activite6.jpg','Faire du jumping jack pendant 1 minutes dans 3 serie avec une repos de 2 minutes, boire de l eau pas plus de 3 gorger et bien etire les muscles apres');



insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(1,80,1,15,4000);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(1,100,2,10,5000);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(1,150,3,5,6000);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(1,200,4,15,7000);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(1,250,5,10,8000);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(1,275,6,5,9000);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(1,275,7,20,3000);



insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(2,80,2,15,4100);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(2,100,3,10,5100);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(2,150,4,5,6100);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(2,200,5,15,7100);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(2,250,6,10,8100);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(2,275,7,5,9100);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(2,275,1,20,3100);

insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(3,80,1,15,4200);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(3,100,2,10,5200);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(3,150,3,5,6200);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(3,200,4,15,7200);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(3,250,5,10,8200);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(3,275,6,5,9200);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(3,275,7,20,3200);


insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(4,80,3,15,4300);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(4,100,4,10,5300);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(4,150,5,5,6300);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(4,200,6,15,7300);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(4,250,7,10,8300);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(4,275,8,5,9300);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(4,275,9,20,3300);

insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(5,80,2,15,4400);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(5,100,3,10,5400);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(5,150,4,5,6400);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(5,200,5,15,7400);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(5,250,6,10,8400);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(5,275,7,5,9400);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(5,275,1,20,3400);

insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(6,80,1,15,4500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(6,100,2,10,5500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(6,150,3,5,6500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(6,100,4,15,7500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(6,250,5,10,8500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(6,275,6,5,9500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(6,275,7,20,3500);



insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(7,80,3,15,4600);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(7,100,4,10,5600);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(7,150,5,5,6600);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(7,200,6,15,7600);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(7,250,7,10,8600);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(7,275,1,5,9600);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(7,275,2,20,3600);

insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(8,80,3,15,4650);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(8,100,4,10,5650);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(8,150,5,5,6650);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(8,200,6,15,7650);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(8,250,7,10,8650);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(8,275,1,5,9650);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(8,275,2,20,3650);

insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(9,80,5,15,4750);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(9,100,6,10,5750);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(9,150,7,5,6750);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(9,200,1,15,7750);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(9,250,2,10,8750);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(9,275,3,5,9750);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(9,275,4,20,3750);

insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(10,80,2,15,4700);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(10,100,3,10,5700);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(10,150,4,5,6700);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(10,200,5,15,7700);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(10,250,6,10,8700);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(10,275,7,5,9700);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(10,275,1,20,3700);







////maigrir 
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(11,80,1,15,400);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(11,100,2,10,500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(11,150,3,5,600);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(11,200,4,15,700);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(11,250,5,10,800);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(11,175,6,5,9000);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(11,125,7,20,3000);



insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(12,80,2,15,410);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(12,100,3,10,510);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(12,150,4,5,610);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(12,200,5,15,710);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(12,250,6,10,810);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(12,125,7,5,910);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(12,175,1,20,310);

insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(13,80,1,15,420);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(13,100,2,10,520);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(13,150,3,5,620);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(13,200,4,15,720);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(13,250,5,10,820);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(13,125,6,5,920);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(13,175,7,20,320);


insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(14,80,3,15,430);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(14,100,4,10,530);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(14,150,5,5,630);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(14,200,6,15,730);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(14,250,7,10,830);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(14,125,8,5,930);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(14,175,9,20,330);

insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(15,80,2,15,440);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(15,100,3,10,540);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(15,150,4,5,640);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(15,200,5,15,740);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(15,250,6,10,840);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(15,175,7,5,940);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(15,175,1,20,340);

insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(16,80,1,15,450);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(16,100,2,10,550);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(16,150,3,5,650);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(16,100,4,15,750);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(16,250,5,10,850);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(16,175,6,5,950);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(16,175,7,20,350);



insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(17,80,3,15,1000);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(17,100,4,10,1500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(17,150,5,5,2000);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(17,200,6,15,2500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(17,250,7,10,3000);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(17,175,1,5,3500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(17,175,2,20,4000);

insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(18,80,3,15,1100);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(18,100,4,10,1600);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(18,150,5,5,2100);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(18,200,6,15,2600);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(18,250,7,10,3100);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(18,175,1,5,3600);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(18,175,2,20,4100);

insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(19,80,5,15,1200);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(19,100,6,10,1625);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(19,150,7,5,2150);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(19,200,1,15,2650);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(19,250,2,10,3250);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(19,175,3,5,3650);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(19,175,4,20,4000);


insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(20,80,2,15,1500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(20,100,3,10,1700);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(20,150,4,5,2500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(20,200,5,15,2700);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(20,250,6,10,3500);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(20,100,7,5,3750);
insert into regime_activite(idregime,quantite,idactivite,dureactivite,kilocalories) values(20,175,1,20,3450);

