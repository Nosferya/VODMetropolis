<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/favicon.png" />
  <title>Ajout film</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>

<body>
  <!-- <header> -->
  <?php include("header.php") ?>
  <?php include("connectbddlh.php") ?>
  <?php
  $genreselect = $dbh->query('SELECT * FROM Genre');
  ?>
  <!-- </header> -->
  <main>

    <section>
      <form method="post" action="traitementfilm.php">
        <fieldset>
          <legend>Ajout film</legend>
          <p>Tous les champs sont obligatoires</p>
          <label for="titre"> Titre : </label><br>
          <input type="text" name="titre" id="titre" class="txtinput" placeholder="Titre du film" required/><br>
          <label for="date"> Date de sortie : </label><br>
          <input type="date" name="date" id="date" class="txtinput" required/><br>
          <label for="realisateur"> Realisateur : </label><br>
          <input type="text" name="realisateur_prenom" id="realisateur_prenom" class="txtinput" placeholder="Prénom" required/><br>
          <input type="text" name="realisateur_nom" id="realisateur_nom" class="txtinput" placeholder="Nom" required/><br>
          <label for="acteurs"> Acteurs : </label><br>
          <input type="text" name="acteur_prenom" id="acteur_prenom" class="txtinput" placeholder="Prénom" required/><br>
          <input type="text" name="acteur_nom" id="acteur_nom" class="txtinput" placeholder="Nom" required/><br>
          <label for="genre"> Genres : </label><br>
          <select name="genre" id="genre" class="txtinput" required/><br>
          <?php
          while($genreS = $genreselect->fetch())
          {
            ?>
            <option value=" <?php echo $genreS['id_genre']; ?>"> <?php echo $genreS['Genre']; ?></option>
<?php
          }

          ?>
          <label for="affiche"> Affiche (url) : </label><br>
          <input type="text" name="affiche" id="affiche" class="txtinput" placeholder="Url de l'affiche" required/><br>
          <label for="synopsis">Synopsis : </label><br>
          <textarea name="synopsis" id="synopsis" required></textarea><br><br>
          <input type="submit" placeholder="Synopsis:"value="ENVOYER">
          <input type="reset" value="RESET">
        </fieldset>
      </form>
    </section>
  </main>

  <!-- FOOTER -->
  <?php include('footer.php')?>
  <!-- FOOTER -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>
