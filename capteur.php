<?php include('includes/session.php'); ?>
<!DOCTYPE html>
<!-- https://themewagon.com/themes/free-responsive-bootstrap-5-html5-admin-template-sneat/ --> <!-- LIEN PAGE-->
<!-- https://apexcharts.com/ --> <!-- DOCUMENTATION-->

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<html
  lang="fr"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <title>NBSAT - Capteur</title>
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
    </style>
    <div id="page_capteur"  >
      <div >
        <!-- Layout container -->
        <div>
          <!-- Content wrapper -->
          <div >
            <!-- Content -->
            <div class=" flex-grow-1 container-p-y "style="padding: 2vh;">
              <div class="row align-items-stretch">
                <!-- Capteur Résumé -->
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card h-100">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body"style="margin-bottom: 0;padding-bottom: 0;">
                          <h2><strong>Capteur n°1</strong> (335648913564857) :</h2>
                          <p style="font-size:18px;"><strong>Groupe</strong> : Bouygues Telecom </p>
                          <p style="font-size:18px;"><strong>Msg Terrestre envoyés</strong> : 980 (QOS = 95%)</p>
                          <p style="font-size:18px;"><strong>Msg Satellitaire envoyés</strong> : 20 (QOS = 55%)</p>
                        </div>
                        <!-- 414 largeur 340 hauteur -->
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="assets/img/illustrations/Bouygues_Telecom_RVB.png"
                            height="140"
                            alt="View Badge User"
                            style="padding-bottom: 1vh;"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <!-- Localisation Résumé -->
                    <!-- js dashboard analytics.hs dans dossier asset/js -->
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="assets/img/icons/unicons/map.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <h4 class="card-title mb-2" id="localisation"></h4>
                          <small class="fw-semibold" id="texte_latitude" style="color: grey;font-size: 18px;"></small>
                          <small class="fw-semibold" id="texte_longitude" style="color: grey;font-size: 18px;"></small>
                        </div>
                      </div>
                    </div>
                    <style>
                      @media only screen and (min-width: 993px) and (max-width:1668px){
                        #radialBarBatterie2{
                          padding: 0;margin: 0;
                        }
                        #radialBarBatterie1{
                          padding-left: 0;padding-left: 0;margin: 0;
                        }
                        #radialBarBatterie3{
                          padding: 0;margin: 0;transform: scale(0.9);
                        }
                      }
                    </style>
                    <!-- Jauge Batterie -->
                    <div class="col-lg-6 col-md-12 col-6 mb-4" id="radialBarBatterie1">
                      <div class="card h-100" id="radialBarBatterie2">
                        <div class="card-body" id="radialBarBatterie3" style="display: flex;justify-content: center;align-items: center;text-align: center;">
                          <div id="batterieJaugeChart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Graphique Température -->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                        <h2 class="card-header m-0 me-2 pb-3"><strong>Température</strong></h2>
                        <div id="temperatureGraphiqueChart" class="px-2"></div>
                  </div>
                </div>

                <!-- Accéléromètre -->
                <div class="col-md-8 col-lg-4 order-2 mb-4">
                  <div class="card h-100" style="padding: 0; margin: 0;">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h2 class="card-title m-0 me-2"><strong>Accéléromètre</strong></h2>
                    </div>
                    <div class="card-body" style="padding: 0; margin: 0;">
                      <style>
                        @media only screen and (max-width:992px) {
                          #accelerometreRadarChart{
                            transform: scale(1.4);
                          }
                        }
                        @media only screen and (min-width:1290px) {
                          #accelerometreRadarChart{
                            transform: scale(1.6);
                            margin-top: 6vh;
                          }
                          #temperatureGraphiqueChart{
                            margin-top: 2vh;
                            margin-bottom: 4vh;
                          }
                        }
                        @media only screen and (min-width: 993px) and (max-width:1289px){
                          #accelerometreRadarChart{
                            transform: scale(1.2);
                          }
                        }
                        /* SI CELA S'ACTUALISE MAL ENLEVER CE PARAGRAPHE !!!!!!!!!!!!!!!!!*/
                        @media only screen and (min-width:768px) and (max-width:992px){
                          #accelerometreRadarChart{
                            margin-top: -3vh;
                          }
                        }
                        @media only screen and (max-width:767px){
                          #accelerometreRadarChart{
                            padding-top: 2vh;
                          }
                        }
                      </style>
                      <div style="width: 100%; height: 100%;display: flex;justify-content: space-around;align-items: flex-end;text-align: center;">
                        <div id="accelerometreRadarChart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Graphique Batterie -->
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <h2 class="card-header m-0 me-2 pb-3"><strong>Batterie</strong></h2>
                    <div id="batterieGraphiqueChart" class="px-2"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Map -->
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <h2 class="card-header m-0 me-2 pb-3"><strong>Map</strong></h2>
                    <!--<section id="mapGraphiqueChart">
                    <div></div>
                    </section>-->

                    <script>
                    function calcul_distance(lat1, lon1, lat2, lon2) {
                      const R = 6371e3; // Rayon de la Terre en mètres
                      const φ1 = lat1 * Math.PI / 180; // Conversion degrés -> radians
                      const φ2 = lat2 * Math.PI / 180;
                      const Δφ = (lat2 - lat1) * Math.PI / 180;
                      const Δλ = (lon2 - lon1) * Math.PI / 180;
                      const a = Math.sin(Δφ / 2) * Math.sin(Δφ / 2) +
                                Math.cos(φ1) * Math.cos(φ2) *
                                Math.sin(Δλ / 2) * Math.sin(Δλ / 2);
                      const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                      const d = R * c; // Distance en mètres
                      return d;
                    }
                    function clusterizePoints(points) {
                      let clusters = [];
                      for (let i = 0; i < points.length; i++) {
                        let clusterIndex = -1;
                        for (let j = 0; j < clusters.length; j++) {
                          let distance = calcul_distance(points[i][0], points[i][1], points[clusters[j][0]][0], points[clusters[j][0]][1]);
                          if (distance < 10.5) {
                            clusterIndex = j;
                            break;
                          }
                        }
                        if (clusterIndex === -1) {
                          clusters.push([i]);
                        } else {
                          clusters[clusterIndex].push(i);
                        }
                      }
                      return clusters.filter(subArr => subArr.length > 1);
                    }
                    </script>

                    <section id="map">
                      <!--<div id="map" style = "width: 400px; height: 890px">-->
                      <div id="map" style = "width: 40vh; height: 90vh;"></div><script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
                     <script>
                        //var data = JSON.parse('<?php echo json_encode($array);?>');
                        //var indice = '<?php echo $indice;?>';
                        
                        /*var mapOptions = {
                           center: [48.78784675288687, 2.2194405476176633],
                           zoom: 18,
                           maxZoom:19
                        }*/
                        // Creating a map object
                        var map = new L.map('map'/*, mapOptions*/,{minZoom:3,worldCopyJump:true});
                        // Creating a Layer object
                        var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
                        // Adding layer to the map
                        map.addLayer(layer);
                        var points = [
                          [48.78310246064324, 2.220736806215012], // UGC Velizy
                          [48.786494425583356, 2.2128178069686055], // Dassault
                          [48.7883611669405, 2.2185873277697272], // angle du haut 2eme carré
                          [48.78801203762308, 2.218311525889307], // angle du haut droite 1er carre
                          [48.78790382745847, 2.2182371523485194], // angle du bas droite 1er carre
                          //[48.78795487001803, 2.2182774380164463]//milieu 1er carre
                          [48.7880753302527, 2.218128690934871], // angle haut gauche 1er carre
                          [48.78805899667848, 2.2181844710904612],//bordure
                          [48.78804765080658, 2.21811659633786]//très légèrement en dessous angle haut gauche 1er carre
                        ];

                        let clusters = clusterizePoints(points);

                        // Créer une ligne avec les points
                        var polyline = L.polyline(points, {color: 'red'}).addTo(map);

                        // Ajouter des marqueurs pour chaque point du parcours
                        let marker_trace;
                        let marker_tab = [];

                        var greyIcon = L.icon({
                          iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-grey.png',
                          iconSize: [25, 41],
                          iconAnchor: [12, 41],
                          popupAnchor: [1, -34],
                          shadowSize: [41, 41]
                        });

                        var blueIcon = L.icon({
                          iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
                          iconSize: [25, 41],
                          iconAnchor: [12, 41],
                          popupAnchor: [1, -34],
                          shadowSize: [41, 41]
                        });


                        for (var i = 0; i < points.length; i++) {
                          let markerColor = greyIcon;
                          if(i == points.length - 1){
                            markerColor = blueIcon;
                          }
                          marker_trace = new L.marker(points[i],{icon: markerColor});
                          marker_trace.addTo(map).setZIndexOffset(i); // put the marker on top of all others
                          marker_tab.push(marker_trace);
                        }
                        /*let affichage = "<h4>Capteur n°1" + "<br>" + "Date : 04/04/2023" + "<br>" + "Heure : 10h30" + "<br>" + "Température = 18°C" + "<br>" + "Batterie = 70 %";
                        marker_tab[points.length-1].bindPopup(affichage, {maxWidth: 1000});
                        marker_tab[points.length-1].on('mouseover', function (e) {
                            this.openPopup();
                        });
                        marker_tab[points.length-1].on('mouseout', function (e) {
                            this.closePopup();
                        });*/
                        L.circle(points[points.length-1], 40).addTo(map);

                        // Créer un rectangle englobant les points
                        var bounds = L.latLngBounds(points).pad(0.1);

                        // Ajuster le zoom et la position de la carte pour afficher le rectangle englobant
                        map.fitBounds(bounds);

                        window.addEventListener('resize', function() {
                          map.fitBounds(bounds);
                        });

                        let tab_affichage = [

                        ];

                        for(let i=0;i<points.length;i++){
                          let affichage = "<h4>Capteur n°" + i+ "<br>" + "Date : 04/04/2023" + "<br>" + "Heure : 10h30" + "<br>" + "Température = 18°C" + "<br>" + "Batterie = 70 %";
                          tab_affichage.push(affichage);
                          marker_tab[i].bindPopup(tab_affichage[i], {maxWidth: 1000});
                          marker_tab[i].on('mouseover', function (e) {
                              this.openPopup();
                          });
                          marker_tab[i].on('mouseout', function (e) {
                              this.closePopup();
                          });
                        }
                        /*for(let i = 0; i < indice;i++){
                          if(data[i]['salle'] != "78959599"){
                            let marker = new L.Marker([data[i]['latitude'], data[i]['longitude']]);
                            marker.addTo(map);
                            let affichage = "<h4>Capteur n° " + data[i]['id'] + "<br>" + "Salle n° " + data[i]['salle'] + "<br>" + "Probabilité : " + data[i]['probabilite'] + " %<br>" + "Heure : " + data[i]['heure'] + "<br>"+ "Batterie : " + data[i]['battery'] + " %" + "</h4> <br>";
                            for(let j = 0; j < i;j++){
                              if(data[j]['salle'] == data[i]['salle']){
                                affichage += "<h4>Capteur n° " + data[j]['id'] + "<br>" + "Salle n° " + data[j]['salle'] + "<br>" + "Probabilité : " + data[j]['probabilite'] + " %<br>" + "Heure : " + data[j]['heure'] + "<br>"+ "Batterie : " + data[j]['battery'] + " %" + "</h4> <br>";
                              }
                            }
                            marker.bindPopup(affichage, {maxWidth: 1000});
                            marker.on('mouseover', function (e) {
                                this.openPopup();
                            });
                            marker.on('mouseout', function (e) {
                                this.closePopup();
                            });
                          }
                        }*/
                     </script>
                    </section>


                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <?php include('includes/footer_style.php'); ?>

            <!--<div class="content-backdrop fade"></div>-->
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <!--<div class="layout-overlay layout-menu-toggle"></div>-->
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
