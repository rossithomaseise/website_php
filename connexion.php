<?php include('includes/session.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>NBSAT- Connexion</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
  <?php include('includes/header.php'); ?>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php
        if (isset($_POST['Identifiant_login']) &&  isset($_POST['password_login'])){
            $flag = 0;
            if(
                ("nbsat" == $_POST['Identifiant_login'] || "admin" == $_POST['Identifiant_login'] || "superadmin" == $_POST['Identifiant_login'])
                && ("nbsat" == $_POST['password_login'] || "admin" == $_POST['password_login'] || "superadmin" == $_POST['password_login'])){
                $_SESSION['LOGGED_USER'] = $_POST['Identifiant_login'];
                $_SESSION['LOGGED_USER_MDP'] = $_POST['password_login'];
                $flag = 1;
            }
            if($flag != 1): ?>
                <script>alert("<?php echo htmlspecialchars('Identifiant ou Mot de passe inconnu', ENT_QUOTES); ?>")</script>
            <?php endif; ?>
            <?php
        }
    ?>
</head>

<body class="fixed-sn mdb-skin-custom" style="min-height: 100vh; display: flex; flex-direction: column;">
  
  <?php include('includes/navigation.php'); ?>

<main class="">

  <?php include('includes/main_style.php'); ?>  

  <section id="connexion">

<?php if(!isset($_SESSION['LOGGED_USER'])): ?>
<!--Si utilisateur/trice est non identifié(e), on affiche le formulaire -->

<form id="connexion_form" action="connexion.php" method="post" style="margin-top:10%;">
    <!-- si message d'erreur on l'affiche -->
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>
    <div class="mb-3" style="margin-left:10%;">
        <h2 class="connectez_vous"style="text-align: center; color:#0055A4;font-weight:bold;margin-left:-10%;">Connectez-vous : </h2>
        </br>
        <label for="username" class="label_form form-label" style="color:#0055A4;font-weight:bold;">Username</label>
        <input type="text" class="label_form form-control" id="Identifiant_login" name="Identifiant_login" style="width:80%">
    </div>
    <div class="mb-3" style="margin-left:10%;">
        <label for="password" id="label_form" class="label_form form-label" style="color:#0055A4;font-weight:bold">Mot de passe</label>
        <input type="password" class="label_form form-control" id="password_login" name="password_login" style="width:80%">
    </div>
    <button type="submit" class="label_form_button btn text-uppercase font-weight-bold text-white rounded" name="button_connexion" value="button_connexion" style="background-color:#0055A4;color:#fffff; margin-left:10%;">Connexion</button>
</form>
<!-- 
    Si utilisateur/trice bien connectée on affiche un message de succès
-->
<?php else: ?>
    <div id="msg_connexion" class="alert alert-success" role="alert" style="position:relative;margin-top:4%;margin-bottom:4%;width: 80%;text-align: center;">
        Bonjour et bienvenue sur le site !
    </div>
<?php endif; ?>

</br></br>

<?php if(!isset($_SESSION['LOGGED_USER'])): ?>
<img src="assets/img/portfolio/BouyguesTelecom_BM2L_RVB (1).png" class="connectez_vous_image center" style="position:relative; margin-left: auto;margin-right: auto;width:35%;" alt="Italian Trulli";>

<?php else: ?>
<img src="assets/img/portfolio/BouyguesTelecom_BM2L_RVB (1).png" class="connectez_vous_image center" style="position:relative; margin-left: auto;margin-right: auto;" alt="Italian Trulli";>

<style>
    @media only screen and (max-width: 767px){
        .connectez_vous_image{
           width: 60%;
        }
    }
    @media only screen and (min-width: 768px){
        .connectez_vous_image{
           width: 35%;
        }
    }

</style>

<?php endif; ?>

</section>


</main>

<style>
    @media only screen and (max-width: 1440px){
        #msg_connexion{
           margin-left: auto;
           margin-right:auto;
        }
    }
    @media only screen and (min-width: 1441px){
        #msg_connexion{
            margin-left: 0%;
        }
        footer{
            margin-left: -13%;
        }
    }
</style>

<?php include('includes/footer_style.php'); ?>

</body>

</html>
