<script>
    function deconnexion(){
        $.ajax({url:"includes/deconnexion.php"})
    }
</script>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav" style="background-color: #009DCC;">
    <div class="container-fluid" style="background-color: #009DCC;">
        <a class="navbar-brand" style="font-size: 1.3em;" href="home.php" onmouseover="this.style.color='#0055A4'" onmouseout="this.style.color='white'">NB-IoT Satellitaire</a>
        <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #0055A4;font-size: 1em;">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto" style="font-size:1.1em">
                <?php if (!isset($_SESSION['LOGGED_USER'])): ?>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="collection.php" onmouseover="this.style.color='#0055A4'" onmouseout="this.style.color='white'">Exemple_Collection</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="capteur.php" onmouseover="this.style.color='#0055A4'" onmouseout="this.style.color='white'">Exemple_Capteur</a></li>
                  <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="connexion.php" onmouseover="this.style.color='#0055A4'" onmouseout="this.style.color='white'">Connexion</a>
                  </li>
                <?php else: ?>
                  <?php if (isset($_SESSION['LOGGED_USER']) && $_SESSION['LOGGED_USER'] == "admin"): ?>
                    <li class="nav-item mx-0 mx-lg-1">
                      <a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin.php" onmouseover="this.style.color='#0055A4'" onmouseout="this.style.color='white'">Admin</a>
                    </li>
                  <?php elseif (isset($_SESSION['LOGGED_USER']) && $_SESSION['LOGGED_USER'] == "superadmin"): ?>
                    <li class="nav-item mx-0 mx-lg-1">
                      <a class="nav-link py-3 px-0 px-lg-3 rounded" href="super_admin.php" onmouseover="this.style.color='#0055A4'" onmouseout="this.style.color='white'">Super Admin</a>
                    </li>
                  <?php endif; ?>
                  <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="collection.php" onmouseover="this.style.color='#0055A4'" onmouseout="this.style.color='white'">Collection</a>
                  </li>
                  <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="connexion.php" onclick="deconnexion()" onmouseover="this.style.color='#0055A4'" onmouseout="this.style.color='white'">Déconnexion</a>
                  </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<!-- ligne 11373 pour le li hover -->
