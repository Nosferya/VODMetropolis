<!DOCTYPE html>
<html lang="fr">



<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/favicon.png" />
      <?php include("connectbdd.php")
      ?>
      <?php
         $idfilm = $_GET['idfilm'];

          $film = $dbh->query('SELECT * FROM Films WHERE id_films="'.$idfilm.'"');
          $acteur= $dbh->query('SELECT * FROM Acteurs NATURAL JOIN JOUE NATURAL JOIN Films WHERE id_films="'.$idfilm.'"');
          $genre=$dbh->query('SELECT * FROM Genre NATURAL JOIN Appartenir NATURAL JOIN Films WHERE id_films ="'.$idfilm.'"');
          $realisateur=$dbh->query('SELECT * FROM Realisateurs NATURAL JOIN Realise NATURAL JOIN Films WHERE id_films = "'.$idfilm.'"');
          // On affiche chaque entrée une à une
          $donnees = $film->fetch();
          ?>
  <title><?php echo $donnees['Titre']; ?></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>



<body>

    <?php include("header.php") ?>
    <main>
      <div class="container filmstyle">
        <div class="row">
          <div class="offset-lg-1"></div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-12 marginT">
                <div class="sorties">
                  <h2>
             <?php echo $donnees['Titre']; ?><br />
              </h2>

                </div>
              </div>
            </div>
            <div class="row marginT">
              <div class="col-lg-3">
                <img src="<?php echo $donnees['Affiche']?>" alt="affiche" class="marginB">
              </div>
              <div class="col-lg-9 ">
                <h3> Informations sur le film </h3> <br>
                <p><strong>Sortie le :</strong>
                  <?php echo date("d/m/Y", strtotime($donnees['Date_de_sortie']))?>
                </p> <br>
                <p><strong>Genre : </strong><br>
                <?php while($genrel = $genre->fetch()){
                  echo $genrel["Genre"]. " ";
                } ?></p>
                <p><strong>Réalisé par :</strong><br>
                <?php while($realisateurl = $realisateur->fetch()){
                  echo $realisateurl["Prenom"]." ".$realisateurl["Nom"];
                } ?></p>
                <p><strong>Avec :</strong><br>
                   <?php while($acteurl = $acteur->fetch()){
                     echo $acteurl["Prenom"]." " .$acteurl["Nom"]."<br/>";
                   }?> </p>
              </div>
            </div>
            <div class="row marginT">
              <div class="offset-lg-1"></div>
              <div class="col-lg-10">
              <p class="textdetail">  Synopsis :
                <?php echo $donnees['Synopsis'] ?>  </p>
              </div>
              <div class="offset-lg-1"></div>
            </div>
          </div>
          <div class="offset-lg-1"></div>

        </div>

      </div>

    </main>
    <?php
  $film->closeCursor(); // Termine le traitement de la requête

  ?>
      <?php include("footer.php") ?>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js">
        < script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity = "sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin = "anonymous" >
      </script>
      <script src="js/scripts.js"></script>
</body>

</html>
