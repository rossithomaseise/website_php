<?php include('includes/session.php'); ?>
<!DOCTYPE html>
<!-- https://apexcharts.com/ --> <!-- DOCUMENTATION-->
<!-- https://apexcharts.com/javascript-chart-demos/mixed-charts/line-column/ documentations sur différents types de charts -->
<!-- https://apexcharts.com/docs/options/xaxis/# documentation sur options -->
<!-- https://themewagon.com/themes/free-responsive-bootstrap-5-html5-admin-template-sneat/ --> <!-- LIEN PAGE-->
<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<?php 
if (!isset($_SESSION['LOGGED_USER']) || $_POST['Identifiant_login'] != "admin" || $_POST['password_login'] != "admin"){
  // Redirection vers la page d'accès interdit si les identifiants sont incorrects
  header('Location: access_interdit.php');
  exit; // Terminer le script pour éviter toute exécution supplémentaire
}
?>
<html
  lang="fr"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <title>NBSAT - Admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="css/main_capteur.css" />
    <?php include('includes/header.php'); ?>
    <!-- REFERENCEMENT (REVOIR) -->
    <meta name="description" content="" />
    <!-- Fonts -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />

    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Inclusion bibliothèque google charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <script src="assets/js/config.js"></script>
  </head>

  <body class="custom-body">
    <?php include('includes/navigation.php'); ?>
    <?php include('includes/main_style.php'); ?>
    <!-- Layout wrapper -->
    <style>
      @media only screen and (min-width: 993px){
        #page_capteur{
          position: relative;top: +0vh;
        }
      }
      @media only screen and (max-width: 992px){
        #page_capteur{
          position: relative;top: +0vh;
        }
      }
      h5 {
        font-size: 1.6em;
      }
      .p_police {
        font-size: 1.4em;
      }
    </style>
    <div id="page_capteur" >
      <div >
        <!-- Layout container -->
        <div>
          <!-- Content wrapper -->
          <div >
            <!-- Content -->
            <div class=" flex-grow-1 container-p-y "style="padding: 2vh;">
              <div class="row align-items-stretch">
                <!-- Ajouter Capteur -->
                <div class="col-md-6 col-lg-6 mb-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title text-primary"><strong>Ajouter un Capteur</strong></h5>
                      <div>
                        <form action="" method="POST" class="mt-2" onsubmit="return confirm('Êtes-vous sûr de vouloir ajouter ce capteur ?');">
                          <div class="form-group">
                            <input id="input_ajouter_capteur" class="form-control mt-2" name="input_ajouter_capteur" placeholder="MSISDN de l'objet à ajouter" style="font-size: 1.3em;width:310px" pattern="\d{15}" required oninvalid="this.setCustomValidity('Veuillez entrer un nombre de 15 chiffres')" oninput="this.setCustomValidity('')"  title="Veuillez entrer un nombre de 15 chiffres">
                          </div>
                          <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
                        </form>
                        <!--<?php/*
                          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Récupère la valeur de l'identifiant
                            $identifiant = $_POST['identifiant'];

                            // Affiche l'identifiant à l'utilisateur
                            echo 'Vous avez entré l\'identifiant : ' . $identifiant;
                          }
                        */?>-->
                      </div>  
                    </div>
                  </div>
                </div>
                <!-- Supprimer Capteur -->
                <div class="col-md-6 col-lg-6 mb-4">
                  <div class="card h-100">
                    <div class="card-body" id="div_supprimer_capteur">
                      <h5 class="card-title text-primary"><strong>Supprimer un Capteur</strong></h5>
                      <div>
                        <form action="" method="POST" class="mt-2" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce capteur ?');">
                          <div class="form-group" style="width:fit-content;">
                            <input id="input_supprimer_capteur" class="form-control mt-2" name="input_supprimer_capteur" placeholder="MSISDN de l'objet à supprimer" style="font-size: 1.3em;width: 310px" pattern="\d{15}" required oninvalid="this.setCustomValidity('Veuillez entrer un nombre de 15 chiffres')" oninput="this.setCustomValidity('')"  title="Veuillez entrer un nombre de 15 chiffres">
                          </div>
                          <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
                        </form>
                        <!--<?php/*
                          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Récupère la valeur de l'identifiant
                            $identifiant = $_POST['identifiant'];

                            // Affiche l'identifiant à l'utilisateur
                            echo 'Vous avez entré l\'identifiant : ' . $identifiant;
                          }
                        */?>-->
                      </div>  
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3" id="container">
                <!-- Résumé Capteurs -->
                <script>
                  // Nombre de fois que vous voulez générer la div
                  const nombreDeFois = 4;

                  // Tableaux de valeurs
                  const msisdn = [335648913564857,339856345678915,335224889615784,339876598743156]
                  const localisation = ["Meudon", "Paris", "Londres", "Six-Fours"];
                  const batterie = [85, 90, 55, 35];
                  const msgTerrestreEnvoye = [980, 1000, 1200, 1400];
                  const qosTerrestre = [95, 98, 90, 92];
                  const msgSatEnvoye = [20, 40, 60, 80];
                  const qosSatellite = [55, 65, 45, 35];
                  const temperature = [15, 15.5, 16, 16.5];

                  // La fonction qui génère la div avec les champs appropriés
                  const genererDiv = (numeroCapteur) => {
                    let lienCapteur = "";
                    if(numeroCapteur === 1) {
                      lienCapteur = "href='capteur.php'";
                    }
                    return `
                      <div class="col-md-4 col-lg-4 order-2 order-md-3 order-lg-2 mb-4">
                        <div class="card h-100">
                          <div class="card-body" style="margin-bottom: 0;padding-bottom: 0;">
                            <h5 class="card-title text-primary"><a ${lienCapteur}><strong>Capteur n°${numeroCapteur} :</strong></a></h5>
                            <p class="p_police"><strong>Groupe</strong> : Bouygues Telecom</p>
                            <p class="p_police"><strong>MSISDN</strong> : 335648913564857</p>
                            <p class="p_police"><strong>Localisation</strong> : ${localisation[numeroCapteur-1]} (France)</p>
                            <p class="p_police"><strong>Température</strong> : ${temperature[numeroCapteur-1]}°C</p>
                            <p class="p_police"><strong>Batterie</strong> : ${batterie[numeroCapteur-1]}%</p>
                            <p class="p_police"><strong>Msg Terrestre envoyés</strong> : ${msgTerrestreEnvoye[numeroCapteur-1]} (QOS = ${qosTerrestre[numeroCapteur-1]}%)</p>
                            <p class="p_police"><strong>Msg Satellitaire envoyés</strong> : ${msgSatEnvoye[numeroCapteur-1]} (QOS = ${qosSatellite[numeroCapteur-1]}%)</p>
                          </div>
                        </div>
                      </div>
                    `;
                  };

                  // La div conteneur dans laquelle les div seront ajoutées
                  const container = document.getElementById('container');

                  // Générer la div un certain nombre de fois avec des champs différents et les ajouter à la div conteneur
                  for (let i = 1; i <= nombreDeFois; i++) {
                    container.innerHTML += genererDiv(i);
                  }
                </script>
              </div>
            </div>
            <!-- / Content -->
            <?php include('includes/footer_style.php'); ?>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
      <!-- Overlay -->
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <!--<script src="../assets/vendor/js/bootstrap.js"></script>-->
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
