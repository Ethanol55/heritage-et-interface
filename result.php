<?php
include 'iSport.php';
include 'Comparable.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Club.php';
include 'data.php';

/* echo "<a href='index.php'>ACCUEIL</a>";

if (isset($_GET['id']) || isset($_POST["Club"])) {
    if (isset($_GET["id"])){
        $idClub = $_GET["id"];
    }else{
        $idClub = $_POST["idClub"];
    }
    echo '<h2>Liste des sports de '.$listClub[$_GET['id']]->getNomClub().'</h2>';
    $sp1 = $listClub[$idClub]->getLesSports();
    foreach ($sp1 as $keySp1 => $valueSp1){
        echo $valueSp1->getDescription();
    }
}
*/
echo "<a href='index.php'>RETOUR</a>";

echo '<a href="index.php">Accueil</a>';

if (isset($_GET['id']) || isset($_POST['IdClub'])) {
    if (isset($_GET['id'])) {
        $idClub = $_GET['id'];
    }
    else {
        $idClub = $_POST["IdClub"];
    }
    echo '<h2>Liste des sports de '.$listClub[$idClub]->getNomClub().'</h2>';
    $sp1 = $listClub[$idClub]->getLesSports();
    foreach ($sp1 as $keySp1 => $valueSp1){
        echo $valueSp1->getDescription();
    }
}