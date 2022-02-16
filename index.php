<?php
include 'Comparable.php';
include 'iSport.php';
include 'Club.php';
include 'sport.php';
include 'SportBallon.php';
include 'SportRelais.php';
include 'data.php';

$dbh = new PDO('mysql:host=127.0.0.1;dbname=gestionclub', 'root');
foreach($dbh->query('SELECT * from club') as $row) {
    print_r($row);
}

echo '<h2>LISTE DES CLUBS</h2><a href=index.php> Accueil</a><br>';
foreach ($listClub as $keyClub => $valueClub){
    echo "<a href=result.php?id={$keyClub}>{$keyClub} - {$valueClub->getNomClub()} {$valueClub->getNbPoints()}</a><br>";
}
if (isset($_GET['id'])) {
    echo '<h2>Liste des sports de '.$listClub[$_GET['id']]->getNomClub().'</h2>';
    $sp1 = $listClub[$_GET['id']]->getLesSports();
    foreach ($sp1 as $keySp1 => $valueSp1){
        echo $valueSp1->getDescription();
    }
}

echo "
        <br>
        FORMULAIRE ID CLUB
        <br>
        <form method='post' name='formIdClub' action='result.php'>;
            <label for='club-select'>CLUB:</label>
                <select name='IdClub' id='club-select'>
                    <option value=''>--Choisir un club--</option>";

foreach ($listClub as $kFormClub => $vFormClub)
{
    echo "<option value='".$vFormClub->getIdClub()."'>".$vFormClub->getNomClub()."</option>";
}


echo "</select>

        <button types='submit'>ENVOIEEEEEE !</button>
        </form>
";