<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/favicon.png" />
  <title>MetroVOD</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<?php include("header.php") ?>
<?php include("connectbdd.php") ?>

<?php
$filmtable=$dbh->query('SELECT * FROM Films ORDER BY id_films DESC LIMIT 12');
?>

  <main class="marginB">

    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slider1.jpg" alt="affiche1">
        </div>
        <div class="carousel-item">
          <img src="images/slider2.jpg" alt="affiche2">
        </div>
        <div class="carousel-item">
          <img src="images/slider3.jpg" alt="affiche3">
        </div>
          <div class="carousel-item">
            <img src="images/slider4.jpg" alt="affiche4">
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>

    <div class="container">
      <div class="col-lg-10">

      </div>

      <div class="row">
        <div class="offset-lg-1"></div>
        <div class="col-lg-10">
          <div class="sorties">
            <h2>DERNIÈRES SORTIES VIDEO À LA DEMANDE</h2>
          </div>
        </div>
        <div class="offset-lg-1"></div>
      </div>

<div class="row">

<?php
  while($row =$filmtable->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <div class="col-lg-3"> <a href="./descriptif_film.php?idfilm=<?php echo $row["id_films"]?>"> <img src="<?php echo $row["Affiche"] ?>" class=" marginT hauteurimg"></a></div>
<?php
  }
?>
<?php
$filmtable->closeCursor();
?>
</div>
 </div>





  </main>

  <?php include("footer.php") ?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>

</html>
