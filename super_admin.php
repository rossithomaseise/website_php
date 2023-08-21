<?php include('includes/session.php'); ?>
<!DOCTYPE html>

<?php 
if (!isset($_SESSION['LOGGED_USER']) || $_SESSION['LOGGED_USER'] != "superadmin" || $_SESSION['LOGGED_USER_MDP'] != "superadmin"){
  // Redirection vers la page d'accès interdit si les identifiants sont incorrects
  header('Location: access_interdit.php');
  exit; // Terminer le script pour éviter toute exécution supplémentaire
}
?>

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
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <title>NBSAT - SuperAdmin</title>
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
    <div id="page_capteur">
      <div >
        <!-- Layout container -->
        <div>
          <!-- Content wrapper -->
          <div >
            <!-- Content -->
            <div class=" flex-grow-1 container-p-y "style="padding: 2vh;margin-bottom: 2vh;">
              <div class="row align-items-stretch">
                <!-- Ajouter Groupe -->
                <div class="col-md-6 col-lg-6 mb-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title text-primary"><strong>Ajouter un Groupe</strong></h5>
                      <div>
                        <form action="" method="POST" class="mt-2" onsubmit="return confirm('Êtes-vous sûr de vouloir ajouter ce groupe ?');">
                          <div class="form-group">
                            <input class="form-control mt-2" name="input_ajouter_groupe" placeholder="Nom du groupe à ajouter" style="width:250px" required>
                          </div>
                          <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
                        </form>
                      </div>  
                    </div>
                  </div>
                </div>
                <!-- Supprimer Groupe -->
                <div class="col-md-6 col-lg-6 mb-4">
                  <div class="card h-100">
                    <div class="card-body" id="div_supprimer_capteur">
                      <h5 class="card-title text-primary"><strong>Supprimer un Groupe</strong></h5>
                      <div>
                        <form action="" method="POST" class="mt-2" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce groupe ?');">
                          <div class="form-group">
                            <select class="form-control mt-2" name="select_ajouter_groupe" style="width:250px" required>
                              <option value="">Sélectionner un groupe</option>
                              <option value="Bouygues Telecom">Bouygues Telecom</option>
                              <option value="Bouygues Construction">Bouygues Construction</option>
                              <option value="Bouygues Immobilier">Bouygues Immobilier</option>
                              <option value="Colas">Colas</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
                        </form>
                      </div>  
                    </div>
                  </div>
                </div>
                <!-- Ajouter Utilisateur -->
                <div class="col-md-6 col-lg-6 mb-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title text-primary"><strong>Ajouter un Utilisateur</strong></h5>
                      <div>
                        <form action="" method="POST" class="mt-2" onsubmit="return confirm('Êtes-vous sûr de vouloir ajouter cet utilisateur ?');">
                          <div class="form-group">
                            <select class="form-control mt-2" name="select_supprimer_groupe" style="width:250px" required>
                              <option value="">Sélectionner un groupe</option>
                              <option value="Bouygues Telecom">Bouygues Telecom</option>
                              <option value="Bouygues Construction">Bouygues Construction</option>
                              <option value="Bouygues Immobilier">Bouygues Immobilier</option>
                              <option value="Colas">Colas</option>
                            </select>
                            <input id="input_prenom_ajouter" class="form-control mt-2" name="input_prenom_ajouter" placeholder="Prénom" style="width:250px" pattern="[A-Za-zéèêëïîôöùüç\-]+(?:\s+[A-Za-zéèêëïîôöùüç\-]+)*" required oninvalid="this.setCustomValidity('Veuillez entrer un prénom valide')" oninput="this.setCustomValidity('')" title="Veuillez entrer un prénom valide">
                            <input id="input_nom_ajouter" class="form-control mt-2" name="input_nom_ajouter" placeholder="Nom" style="width:250px" pattern="[A-Za-zéèêëïîôöùüç\-]+(?:\s+[A-Za-zéèêëïîôöùüç\-]+)*" required oninvalid="this.setCustomValidity('Veuillez entrer un nom valide')" oninput="this.setCustomValidity('')" title="Veuillez entrer un nom valide">
                            <input id="input_email_ajouter" class="form-control mt-2" name="input_email_ajouter" type="email" placeholder="Email" style="width:250px" required oninvalid="this.setCustomValidity('Veuillez entrer une adresse email valide')" oninput="this.setCustomValidity('')" title="Veuillez entrer une adresse email valide">
                            <select id="input_administrateur_ajouter" class="form-control mt-2" name="input_administrateur_ajouter" style="width:250px" required>
                              <option value="">Administrateur</option>
                              <option value="Oui">Oui</option>
                              <option value="Non">Non</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
                        </form>
                      </div>  
                    </div>
                  </div>
                </div>
                <!-- Supprimer Utilisateur -->
                <div class="col-md-6 col-lg-6 mb-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title text-primary"><strong>Supprimer un Utilisateur</strong></h5>
                      <div>
                        <form action="" method="POST" class="mt-2" onsubmit="return confirm('Êtes-vous sûr de vouloir ajouter cet utilisateur ?');">
                          <div class="form-group">
                            <select class="form-control mt-2" name="select_supprimer_groupe" style="width:250px" required>
                              <option value="">Sélectionner un groupe</option>
                              <option value="Bouygues Telecom">Bouygues Telecom</option>
                              <option value="Bouygues Construction">Bouygues Construction</option>
                              <option value="Bouygues Immobilier">Bouygues Immobilier</option>
                              <option value="Colas">Colas</option>
                            </select>
                            <input id="input_prenom_supprimer" class="form-control mt-2" name="input_prenom_supprimer" placeholder="Prénom" style="width:250px" pattern="[A-Za-zéèêëïîôöùüç\-]+(?:\s+[A-Za-zéèêëïîôöùüç\-]+)*" required oninvalid="this.setCustomValidity('Veuillez entrer un prénom valide')" oninput="this.setCustomValidity('')" title="Veuillez entrer un prénom valide">
                            <input id="input_nom_supprimer" class="form-control mt-2" name="input_nom_supprimer" placeholder="Nom" style="width:250px" pattern="[A-Za-zéèêëïîôöùüç\-]+(?:\s+[A-Za-zéèêëïîôöùüç\-]+)*" required oninvalid="this.setCustomValidity('Veuillez entrer un nom valide')" oninput="this.setCustomValidity('')" title="Veuillez entrer un nom valide">
                            <input id="input_email_supprimer" class="form-control mt-2" name="input_email_supprimer" type="email" placeholder="Email" style="width:250px" required oninvalid="this.setCustomValidity('Veuillez entrer une adresse email valide')" oninput="this.setCustomValidity('')" title="Veuillez entrer une adresse email valide">
                          </div>
                          <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
                        </form>
                      </div>  
                    </div>
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
