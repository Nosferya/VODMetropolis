<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MetroVOD</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
  <header>
    <div class="topnav" id="myTopnav">
      <a href="#home" class="active">Accueil</a>
      <a href="#news">Informations</a>
      <a href="#contact">Films</a>
      <a href="#about" class="floatR"><i class="fas fa-user"></i></a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
      </a>
    </div>
  </header>

  <main>

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
          <img src="images/slider1.jpg" class="img-fluid" alt="affiche1">
        </div>
        <div class="carousel-item">
          <img src="images/slider2.jpg" class="img-fluid" alt="affiche2">
        </div>
        <div class="carousel-item">
          <img src="images/slider3.jpg" class="img-fluid" alt="affiche3">
        </div>
        <div class="carousel-item">
          <img src="images/slider4.jpg" class="img-fluid" alt="affiche4">
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
      <div class="row">
        <div class="offset-lg-1"></div>
        <div class="col-lg-10">
          <div class="sorties">
            <h2>DERNIÈRES SORTIES VIDEO À LA DEMANDE</h2>
          </div>
        </div>
        <div class="offset-lg-1"></div>

      </div>

    </div>

  </main>

  <?php include("footer.php") ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>

</html>
