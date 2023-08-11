<?php include('includes/session.php'); ?>
<!-- https://html5up.net/arcana -->
<!-- http://localhost:8080/home.php -->

<!DOCTYPE HTML>
<html>
	<head>
		<title>NBSAT - Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
  		<?php include('includes/header.php'); ?>
  		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	</head>
	<!--<body class="is-preload">-->
	<body>
		<?php include('includes/navigation.php'); ?>
		<main class="">
		<?php include('includes/main_style.php'); ?>

		<div id="page-wrapper">

			<section id="banner">
			</section>

			<!-- CTA -->
				<section id="cta" class="wrapper style3">
					<div class="container">
						<header>
							<h2 class="espace_texte_bas">Découvrez une Couverture Mondiale NB-IoT</h2>
							<!--<br><br>-->
							<h4 class="espace_texte_bas">Zones Blanches - Océans - Backup</h4>
							<h4 class="reduction_marge_compatible_3gpp">Compatible 3GPP</h4>
						</header>
					</div>
				</section>
			
			<!--<p>La largeur de l'écran est : <span id="largeur-ecran"></span> pixels</p>

		    <script>
		      // Fonction qui affiche la largeur de l'écran
		      function afficherLargeurEcran() {
		        var largeurEcran = window.innerWidth;
		        document.getElementById("largeur-ecran").innerHTML = largeurEcran;
		      }

		      // Appeler la fonction au chargement de la page
		      afficherLargeurEcran();

		      // Appeler la fonction à chaque fois que la taille de l'écran est modifiée
		      window.addEventListener("resize", afficherLargeurEcran);
		    </script>
			-->

			<section id = "section_marge_haut" class="wrapper style1">
				<div class="container">
					<div class="row">
						<section class="col-6 col-12-narrower">
							<div class="box post">
								<a href="https://sateliot.space/en/" class="image left"><img src="images/logo_sateliot.png" alt="" /></a>
								<div class="inner">
									<h3>SATELIOT</h3>
									<p>Sateliot est une entreprise espagnole de technologie spatiale fondée en 2018. Elle se spécialise dans le développement d'une constellation de nanosatellites pour fournir des services de connectivité IoT (Internet des objets) à l'échelle mondiale.</p>
								</div>
							</div>
						</section>
						<section class="col-6 col-12-narrower">
							<div class="box post">
								<a href="https://www.bouyguestelecom.fr/choisir-bouygues-telecom/" class="image left"><img src="images/Bouygues_Telecom_RVB.png" alt="" /></a>
								<div class="inner">
									<h3>Bouygues Telecom</h3>
									<p>Bouygues Telecom est un opérateur de télécommunications français fondé en 1994. L'entreprise offre une gamme de services de communication tels que la téléphonie mobile, l'Internet fixe et la télévision.</p>
								</div>
							</div>
						</section>
					</div>
					<div class="row">
						<section class="col-6 col-12-narrower">
							<div class="box post">
								<a href="https://fr.wikipedia.org/wiki/CubeSat" class="image left"><img src="images/nanosatellite.jpeg" alt="" /></a>
								<div class="inner">
									<h3>CubeSat</h3>
									<p>Les nao-satellites ou cubesat sont de petits satellites artificiels pesant moins de 10kg. Ils ont permis de diminuer drastiquement le prix de construction et de lancement, mais ils présentent une charge utilie limitée et une faible durée de vie en orbite.</p>
								</div>
							</div>
						</section>
						<section class="col-6 col-12-narrower">
							<div class="box post">
								<a href="https://fr.wikipedia.org/wiki/NB-IoT" class="image left"><img src="images/logo_nb_iot.png" alt="" /></a>
								<div class="inner">
									<h3>NB-IoT</h3>
									<p>Le Narrowband IoT est une technologie de communication sans fil LPWAN (Low Power Wide Area Network) pour les objets connectés. Basse consommation, bas débit et longue portée, il est normalisé 3GPP et passe par le réseau 4G.</p>
								</div>
							</div>
						</section>
						
					</div>
				</div>
			</section>

			<?php include('includes/footer_style.php'); ?>

			
		</div>
	</main>

	</body>
</html>
