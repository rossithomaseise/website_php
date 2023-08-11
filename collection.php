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
<html
  lang="fr"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <title>NBSAT - Collection</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="css/main_capteur.css" />
    <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
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
                <!-- Collection -->
                <div class="col-md-12 col-lg-12 mb-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title text-primary"><strong>Collection :</strong></h5>
                      <div>
                        <p class="p_police"><strong>Groupe</strong> : Bouygues Telecom</p>
                        <p class="p_police"><strong>Nb de Capteurs</strong> : 4</p>
                        <p class="p_police"><strong>Capteurs OK</strong> : 4</p>
                        <p class="p_police"><strong>Capteurs KO</strong> : 0</p>
                        <p class="p_police"><strong>Nb Msg Terrestre</strong> : 4580</p>
                        <p class="p_police"><strong>Nb Msg Satellitaire</strong> : 200</p>
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
                  const localisation = ["Meudon", "Paris", "Londres", "Sydney"];
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
                            <h5 class="card-title text-primary" ><a ${lienCapteur}><strong style=" border-bottom: 3px solid;">Capteur n°${numeroCapteur} :</strong></a></h5>
                            <p class="p_police"><strong>Groupe</strong> : Bouygues Telecom</p>
                            <p class="p_police"><strong>MSISDN</strong> : ${msisdn[numeroCapteur-1]}</p>
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
              <div class="row">
                <!-- Map -->
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <h2 class="card-header m-0 me-2 pb-3"><strong>Map</strong></h2>
                    <section id="map_collection">
                      <div id="map_collection" style = "width: 40vh; height: 90vh;"></div><script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
                     <script>
                        // Creating a map object
                        var map = new L.map('map_collection'/*, mapOptions*/,{minZoom:3,worldCopyJump:true});
                        // Creating a Layer object
                        var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
                        // Adding layer to the map
                        map.addLayer(layer);
                        var points = [
                          [48.787251171727675, 2.221182467813012], // Meudon (Bouygues Telecom)
                          [48.85588899919633, 2.35355542505073], // Paris
                          [51.50716224190307, -0.1393743370503224], // Londres
                          [-33.81531408537254, 151.22138764789887] // Sydney
                        ];

                        // Ajouter des marqueurs pour chaque point
                        let marker_trace;
                        let marker_tab = [];

                        for (var i = 0; i < points.length; i++) {
                          marker_trace = new L.marker(points[i]);
                          marker_trace.addTo(map).setZIndexOffset(i);;
                          marker_tab.push(marker_trace);
                          //L.circle(points[i],40).addTo(map);
                        }
                        L.circle(points[points.length-1], 40).addTo(map);

                        // Créer un rectangle englobant les points
                        var bounds = L.latLngBounds(points).pad(0.1);

                        // Ajuster le zoom et la position de la carte pour afficher le rectangle englobant
                        map.fitBounds(bounds);

                        // Mettre à jour les limites du rectangle englobant lors d'un déplacement de la carte
                        map.on('moveend', function() {
                          bounds = map.getBounds();
                        });

                        window.addEventListener('resize', function() {
                          map.fitBounds(bounds);
                        });

                        let tab_affichage = [
                          "<h4>Capteur n° 1" + "<br>" + "Date : 04/04/2023" + "<br>" + "Heure : 10h30" + "<br>" + "Température = 15°C" + "<br>" + "Batterie = 85 %",
                          "<h4>Capteur n° 2" + "<br>" + "Date : 04/04/2023" + "<br>" + "Heure : 10h30" + "<br>" + "Température = 15.5°C" + "<br>" + "Batterie = 90 %",
                          "<h4>Capteur n° 3" + "<br>" + "Date : 04/04/2023" + "<br>" + "Heure : 10h30" + "<br>" + "Température = 16°C" + "<br>" + "Batterie = 55 %",
                          "<h4>Capteur n° 4" + "<br>" + "Date : 04/04/2023" + "<br>" + "Heure : 10h30" + "<br>" + "Température = 16.5°C" + "<br>" + "Batterie = 35 %"
                        ];

                        for(let i=0;i<points.length;i++){
                          marker_tab[i].bindPopup(tab_affichage[i], {maxWidth: 1000});
                          marker_tab[i].on('mouseover', function (e) {
                              this.openPopup();
                          });
                          marker_tab[i].on('mouseout', function (e) {
                              this.closePopup();
                          });
                        }
                     </script>
                    </section>
                  </div>
                </div>
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
