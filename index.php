<!DOCTYPE html>
<html lang="fr">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>	   <html class="no-js"> <![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Karine Boisvert</title>
        <meta name="description" content="Portfolio">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--
<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.5/mapbox.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.5/mapbox.css' rel='stylesheet' />
<style>
  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }
</style>
<style>
.ui-button {
  background:#3887BE;
  color:#FFF;
  display:block;
  position:absolute;
  top:50%;left:50%;
  width:160px;
  margin:-20px 0 0 -80px;
  z-index:100;
  text-align:center;
  padding:10px;
  border:1px solid rgba(0,0,0,0.4);
  border-radius:3px;
  }
  .ui-button:hover {
    background:#3074a4;
    color:#fff;
    }
</style>
-->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
      	<link rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!--<link rel="stylesheet" href="css/normalize.css"> -->
         <link rel="stylesheet" href="css/main.css">
    </head>

<!--  début du contenu   -->

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<!-- BARRE NAVIGATION  -->
	<header>
		<a class="button-collapse" href="#" data-activates="nav-mobile"><i class="small mdi-navigation-menu hide-on-large-only"></i></a>
		<a class="button-collapse menutxt hide-on-large-only" href="#" data-activates="nav-mobile">MENU</a>
		<section id="menu">
			<nav>
				<div class="nav-wrapper grey darken-4">
					<ul id="nav-mobile" class="right side-nav">
						<li><a href="#accueil" class="scroll">ACCUEIL</a></li>
						<li><a href="#presentation" class="scroll">PRÉSENTATION</a></li>
						<li><a href="#portfolio" class="scroll">PORTFOLIO</a></li>
						<li><a href="#contact" class="scroll">CONTACT</a></li>
					</ul>
				</div>
		    </nav>
		</section>


	<!-- ACCUEIL  -->
	<section id="accueil">
		<div class="paralaccueil parallax-effect">
			<div class="container">		
				<h1 class="titreAccueil">Karine Boisvert</h1>
				<h2 class="txtAccueil1"> Développement web </h2>
				<h2 class="txtAccueil2"> Cartographie</h2>			
			</div>
		</div>
	</section>
</header>								   


	<!-- presentation  -->
 	<section  id="presentation" class="sectionTitre">			
		<div class="container center-align">
			<h3>Présentation</h3>
			<div class="divider"></div>
			<h4 class="valign-wrapper"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
			</h4>
		</div>

	<!-- 2 catégories -->

		<div class="row  bgpresentation">
			
			<!-- 1- Développement web -->
			
			 	<div class="col s12 m6 l6 center-align bgweb " >

					<div class="modal-trigger categorie btn-flat" href="#modal1">
					<i class="medium mdi-device-devices"></i> 
					<h3>Développement web</h3>	
					</div>				
			  	</div>  
			
				<!-- Modal Structure developpement web  -->
			<div id="modal2" class="modal">

			    <h4>Développement web</h4>
			    <p>Expérience en web ou ???</p>
			    <div class="action-bar">
			    	<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Fermer</a>
			    </div>
			</div>

			 <!-- 2- Géomatique -->
			<div class="col s12 m6 l6 center-align bggeo">
				<div class="modal-trigger btn-flat categorie" href="#modal2">
					<i class="medium mdi-maps-pin-drop"></i> 		
					<h3>Géomatique</h3>
				</div>
			</div>

			  <!-- Modal Structure géomatique-->
			<div id="modal1" class="modal">
				<h4>Géomatique</h4>
				<p>Expérience en géomatique ou ???</p>
				<div class="action-bar">
					<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Fermer</a>
				</div>
			</div>
	</section>

		<!-- Compétences -->
		<section>
			<!-- references pour parallax: http://materializecss.com/parallax.html -->
		  	<div class="paralcompetences parallax-effect">
				<div class="container center-align">
					<h3>Mes compétences</h3>
					<div class="divider"></div>
					<div class="row competence container">
			<!-- 2 colonnes  -->
						<ul class="col s12 m6 l6">
							<li>HTML5 - CSS3 - W3C </li>
							<li>Javascript - JQuery </li>
							<li>Photoshop </li>
							<li>PHP - MySql - MVC  </li>
							<li>Wordpress </li>

						</ul>

						<ul class="col s12 m6 l6 center-align">
							<li>Site adaptatif (responsive)</li>
							<li>GitHub </li>
							<li>Bootstrap - Framework  </li>
							<li>ArcGis - Mapbox - CartoDB </li>
						</ul>
					</div>
				</div>
			</div>
		</section>


	<!-- portfolio -->
	
 		<section id="portfolio">
 			<div>
			<div class="container center-align">
				<h3>Portfolio</h3>
				<div class="divider"></div>
			</div>


			<!-- filtre fait avec https://mixitup.kunkalabs.com/ -->

			<!-- Catégorie -->

			<ul class="container center-align">
				<li data-filter="all" class="filter active waves-effect waves-light btn  deep-orange accent-3">Tout</li>
				<li data-filter=".web" class="filter waves-effect waves-light btn  deep-orange accent-3">Web</li>
				<li data-filter=".gis" class="filter waves-effect waves-light btn  deep-orange accent-3">Géomatique</li>				
			</ul>


			<!--  ************** contenu du portfolio **************   -->


			<div id="Container" class="container row bgportfolio">

				<div class="col s12 m4 l3 center-align itemportfolio mix gis">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/cic_510.jpg"> <!-- .img reponsive? -->
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Canards Illimités <i class="mdi-navigation-more-vert right"></i></span>
							<h6><a href="http://web.archive.org/web/20071124045406/http://www.ducks.ca/FR/PROVINCE/QC/index.html">Voir le site</a></h6>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Intégration de la portion du Québec sur le site national.<i class="mdi-navigation-close right"></i></span>
							<ul>
								<li>Logiciel utilisé: Dreamweaver</li>
								<li>Gestion de version avec les responsables au siège social</li>
								<li>Coordination du contenu</li>
							</ul>
						</div>
					</div>
				</div>




		        <div class="col s12 m4 l3 itemportfolio mix web">
				      <div class="card">
				        <div class="card-image waves-effect waves-block waves-light">
				          <img class="activator" src="img/wifound.jpg">
				        </div>
				        <div class="card-content">
				          <span class="card-title activator grey-text text-darken-4">Site mobile<i class="mdi-navigation-more-vert right"></i></span>
				          <h6><a href="#">Voir le site</a></h6>
				        </div>
				        <div class="card-reveal">
				          <span class="card-title grey-text text-darken-4">Site mobile réalisé dans le cadre de mon cours.<i class="mdi-navigation-close right"></i></span>
						      <ul>
					          	<li>Technologie: HTML5, CSS3, Photoshop</li>
					          	<li>Site mobile pour téléphone, tablette et ordinateur</li>
					          	<li>But: vente d'une application mobile fictive</li>
					          </ul>
				        </div>
				      </div>
		        </div>



		        <div class="col s12 m4 l3 itemportfolio mix gis">
				      <div class="card">
				        <div class="card-image waves-effect waves-block waves-light">
				          <img class="activator" src="img/geohack.jpg">
				        </div>
				        <div class="card-content">
				          <span class="card-title activator grey-text text-darken-4">Géohack 2014<i class="mdi-navigation-more-vert right"></i></span>
				          <h6><a href="http://nbtetreault.github.io/geohack-2014-ul/">Voir le site</a></h6>
				        </div>
				        <div class="card-reveal">
				          <span class="card-title grey-text text-darken-4">Parcours de développement durable, Université Laval<i class="mdi-navigation-close right"></i></span>
				          	<ul>
					          	<li>Technologie: CartoDB, Leaflet, GitHub</li>
					          	<li>Cette application web a été fait dans le cadres du Géohack 2014.</li>
					          	<li>Nous avons remporté la première place.</li>
					          	<li><a href="http://defigeohack.org/">En savoir plus sur le Géohack </a></li>
					        </ul>

				        </div>
				      </div>
		        </div>



		        <div class="col s12 m4 l3 itemportfolio mix web">
			      <div class="card">
			        <div class="card-image waves-effect waves-block waves-light">
			          <img class="activator" src="img/taches.jpg">
			        </div>
			        <div class="card-content">
			          <span class="card-title activator grey-text text-darken-4">Wordpress<i class="mdi-navigation-more-vert right"></i></span>
			          <h6><a href="http://boiskari.devwebgarneau.com/wp_tache/wordpress/">Voir le site</a></h6>
			        </div>
			        <div class="card-reveal">
			          <span class="card-title grey-text text-darken-4">Gestion de tâches<i class="mdi-navigation-close right"></i></span>
				          	<ul>
					          	<li>Technologie: Wordpress</li>
					          	<li>Créer un thème Wordpress</li>
					          	<li>But: Faire un gestionnaire de tâches et de nouvelles pour un intranet d'entreprise</li>
					        </ul>
			        </div>
			      </div>
				</div>	


			</div>
		</section>

	<!-- FOOTER  -->


	<?php
    include_once("include/contact.php");
    ?>


     <!-- fin du contenu -->       

		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="js/vendor/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.mixitup.min.js"></script>
		<script type="text/javascript" src="js/vendor/materialize.min.js"></script>


        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
  		<script src="js/vendor/app.js"></script>

    </body>
</html>



<!--

<div id='map'></div>
<a href='#' id='geolocate' class='ui-button'>Find me</a>

<script>
L.mapbox.accessToken = 'pk.eyJ1Ijoia2FyaW5lMjciLCJhIjoicUNwbzlQbyJ9.YHnE7-P2JFX8nVtOomcZZA';
var geolocate = document.getElementById('geolocate');
var map = L.mapbox.map('map', 'karine27.ka27690n');

var myLayer = L.mapbox.featureLayer().addTo(map);

// This uses the HTML5 geolocation API, which is available on
// most mobile browsers and modern browsers, but not in Internet Explorer
//
// See this chart of compatibility for details:
// http://caniuse.com/#feat=geolocation
if (!navigator.geolocation) {
    geolocate.innerHTML = 'Geolocation is not available';
} else {
    geolocate.onclick = function (e) {
        e.preventDefault();
        e.stopPropagation();
        map.locate();
    };
}

// Once we've got a position, zoom and center the map
// on it, and add a single marker.
map.on('locationfound', function(e) {
    map.fitBounds(e.bounds);

    myLayer.setGeoJSON({
        type: 'Feature',
        geometry: {
            type: 'Point',
            coordinates: [e.latlng.lng, e.latlng.lat]
        },
        properties: {
            'title': 'Here I am!',
            'marker-color': '#ff8888',
            'marker-symbol': 'star'
        }
    });

    // And hide the geolocation button
    geolocate.parentNode.removeChild(geolocate);
});

// If the user chooses not to allow their location
// to be shared, display an error message.
map.on('locationerror', function() {
    geolocate.innerHTML = 'Position could not be found';
});
</script>



<iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/karine27.ka27690n/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1Ijoia2FyaW5lMjciLCJhIjoicUNwbzlQbyJ9.YHnE7-P2JFX8nVtOomcZZA'></iframe>
-->