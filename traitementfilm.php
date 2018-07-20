<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/favicon.png" />
  <title>Validation ajout film</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>

<body>


<?php
    $titre = addslashes($_POST["titre"]);
    $genre = $_POST["genre"];
    $date = $_POST["date"];
    $realisateurP = addslashes($_POST["realisateur_prenom"]);
    $realisateurN = addslashes($_POST["realisateur_nom"]);
    $acteurP= addslashes($_POST["acteur_prenom"]);
    $acteurN= addslashes($_POST["acteur_nom"]);
    $synopsis = addslashes($_POST["synopsis"]);
    $affiche = $_POST["affiche"];




    $aff = explode(",", $acteurP);
    $acteurP1 = $aff[0];
    $acteurP2 = $aff[1];

    $aff1 = explode(",", $acteurN);
    $acteurN1 = $aff1[0];
    $acteurN2 = $aff1[1];
    ?>


<?php include("connectbdd.php") ?>

<?php

$sql1 =  "INSERT INTO Films (Titre, Date_de_sortie, Synopsis, Affiche)
          VALUES ('$titre','$date','$synopsis','$affiche')";

$sql2 =   "INSERT INTO Realisateurs (nom, Prenom)
          VALUES ('$realisateurN', '$realisateurP')";

$sql3 = "INSERT INTO Acteurs (Nom, Prenom)
          VALUES ('$acteurN1', '$acteurP1')";

$sql4 = "INSERT INTO Acteurs (Nom, Prenom)
          VALUES ('$acteurN2', '$acteurP2')";



$dbh->exec($sql1);
$lienidfilm = $dbh->query('SELECT id_films FROM Films WHERE Titre = "'.$titre.'"');
$lienid = $lienidfilm->fetch();
$currentid = $lienid['id_films'];
$sql7 = "INSERT INTO Appartenir (id_films, id_genre) VALUES ('$currentid', '$genre')";


$dbh->exec($sql2);
$lienidreal = $dbh->query('SELECT id_realisateurs FROM Realisateurs WHERE Nom = "'.$realisateurN.'"');
$lienid2 = $lienidreal->fetch();
$currentid2 = $lienid2['id_realisateurs'];
$sql8 = "INSERT INTO Realise (id_films, id_realisateurs) VALUES ('$currentid', '$currentid2')";

$dbh->exec($sql3);
$dbh->exec($sql4);
$lienidacteur1 = $dbh->query('SELECT id_acteurs FROM Acteurs WHERE Nom = "'.$acteurN1.'"');
$lienid3 = $lienidacteur1->fetch();
$currentid3 = $lienid3['id_acteurs'];
$sql9 = "INSERT INTO JOUE (id_films, id_acteurs) VALUES ('$currentid', '$currentid3')";

$lienidacteur2 = $dbh->query('SELECT id_acteurs FROM Acteurs WHERE Nom = "'.$acteurN2.'"');
$lienid4 = $lienidacteur2->fetch();
$currentid4 = $lienid4['id_acteurs'];
$sql10 = "INSERT INTO JOUE (id_films, id_acteurs) VALUES ('$currentid', '$currentid4')";

$dbh->exec($sql7);
$dbh->exec($sql8);
$dbh->exec($sql9);
$dbh->exec($sql10);

echo '<p class="modiffilm">Film correctement enregistré dans la vidéothèque</p></br>';
echo '<a class="modiffilm" href="index.php">retour à la page principale</a>';

?>
</body>

</html>
