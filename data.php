<?php
$listClub[1]= new Club(1,"PSG",234);
$listClub[2]= new Club(2,"Lyon",23);
$listClub[3]= new Club(3,"Saint Etienne",345);

$listClub[1]->AjouterSport(new Sport("Foot",11));
$listClub[1]->AjouterSport(new Sport("Tennis",1));
$listClub[2]->AjouterSport(new SportBallon("HandBall",8,40,50));
$listClub[2]->AjouterSport(new SportRelais("4x100",8,400));
$listClub[3]->AjouterSport(new Sport("Karate",1));
$listClub[3]->AjouterSport(new Sport("Judo",1));

$listSport[] = new Sport("Football",11);
$listSport[] = new  SportRelais("4x100",1,400);
$listSport[] = new SportBallon("Basket",5,40,50);
$listSport[] = new Sport("Tennis",1);
$listSport[] = new SportBallon("Handball",8,40,50);
$listSport[] = new Sport("Karate",1);
$listSport[] = new Sport("Judo",1);