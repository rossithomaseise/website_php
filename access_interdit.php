<?php include('includes/session.php'); ?>
<!DOCTYPE html>

<html>

<head>
  <title>NBSAT- Erreur</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">
  <?php include('includes/header.php'); ?>
  <link type="text/css" rel="stylesheet" href="css/style.css" />
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<?php include('includes/navigation.php'); ?>

<body>
  


<main class="">

<?php include('includes/main_style.php'); ?>  

<div id="page-wrapper">

      <section id="banner">
      </section>      

<!--<div id="notfound" style="margin-bottom: -100px;">-->
  <div id="notfound">
  <div class="notfound">
    <div class="notfound-404">
      <h1>Oops!</h1>
      <h2 id="notfound_h2" style="background-color: transparent;">Accès Refusé</h2>
    </div>
    <a href="home.php" id="notfound_menu" style="background-color:#009DCC;color:#fffff;">Menu Principal</a>
  </div>
</div>
</div>

</main>


<?php include('includes/footer_style.php'); ?>

</body>

</html>
