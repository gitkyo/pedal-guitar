<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "DTD/xhtml1-strict.dtd">
<html lang="fr" style="width:1900px;position:relative;margin-right:auto;margin-left:auto;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  
  <title>D-Project</title>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <link rel="icon" href="img/favicon.ico" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/coda-slider.css">
  <link rel="stylesheet" href="css/typo.css">
  <link rel="stylesheet" href="css/facybox.css">
  <link rel="stylesheet" href="css/facybox_urls.css">
  <link rel="stylesheet" href="css/prettyCheckbox.css">
   <!-- Definitely use these for development -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/jquery-ui-1.8.20.custom.min.js"></script>

    <script src="js/query_loader2.js" type="text/javascript"></script>
    <script src="js/galleria-1.2.8.min.js" type="text/javascript"></script>
	<script src="js/facybox.js" type="text/javascript"></script>
	<script src="js/prettycheckboxes.js" type="text/javascript"></script>

</head>
<body>


<div id="wrapper">



	<div id="bandeau_sup">
	<img src="img/logo.png" alt="logo" title="logo" id="logo"/>
	<!-- <div id="hide_menu_disto" style="position:absolute;z-index:9999;width:180px;height:50px;margin-top:3%;margin-left:29%;background-color:transparent;background-image:url('img/cadenas_delay_small.png');background-position: center center;background-repeat:no-repeat;"></div> -->
	<div id="hide_menu_delay" style="position:absolute;z-index:9999;width:110px;height:50px;margin-top:3%;margin-left:42.5%;background-color:transparent;background-image:url('img/cadenas_delay_small.png');background-position: center center;background-repeat:no-repeat;"></div>
	<div id="hide_menu_noise" style="position:absolute;z-index:9999;width:185px;height:50px;margin-top:3%;margin-left:51.5%;background-color:transparent;background-image:url('img/cadenas_noise_small.png');background-position: center center;background-repeat:no-repeat;"></div>
	<div id="hide_menu_compressor" style="position:absolute;z-index:9999;width:200px;height:50px;margin-top:3%;margin-left:66%;background-color:transparent;background-image:url('img/cadenas_compressor_small.png');background-position: center center;background-repeat:no-repeat;"></div>
	</div>
	
		
	<div id="liserai"></div>


	
	<div class="coda-slider" id="slider-id">

	
	
		<div id="slide1">
		<h2 class="title" style="visibility:hidden">HOME</h2>

			
			<div id="content_main">	
				<!--
				<form style="float:left;" id="myForm1" method="POST" action="#">
				<label for="q1"></label><input id="q1" type="radio" name="q1" checked="checked" value="1">grâce à un tube à vide</input><br/>
				<label for="q2"></label><input id="q2" type="radio" name="q1" value="2">par l’augmentation du sustain</input><br/>
				</form>
				-->
			<ul id="disto_place" class="coda-nav"><li class="tab2"><div id="disto"></div></li></ul>
			<ul id="delay_place" class="coda-nav"><li class="tab3"><div id="delay"></div></li></ul><div id="hide_delay" style="position:absolute;margin-left:44%;margin-top:-5%;z-index:9999;width:645px;height:400px;background-color:transparent;background-image:url('img/cadenas_delay.jpg');background-position: center center;background-repeat:no-repeat;"></div>
			<ul id="noise_place" class="coda-nav"><li class="tab4"><div id="noise"></div></li></ul><div id="hide_noise" style="position:absolute;margin-top:23%;z-index:9999;width:640px;height:530px;background-color:transparent;background-image:url('img/cadenas_noise.jpg');background-position: center center;background-repeat:no-repeat;"></div>
			<ul id="compressor_place" class="coda-nav"><li class="tab5"><div id="compressor"></div></li></ul><div id="hide_compressor" style="position:absolute;margin-left:44%;margin-top:23%;z-index:9999;width:645px;height:520px;background-color:transparent;background-image:url('img/cadenas_compressor.jpg');background-position: center center;background-repeat:no-repeat;"></div>
			
			</div>

		
		
		</div>
	  
		<div id="slide2">
			<h2 class="title" style="visibility:hidden;height:0px;">DISTORTION</h2>
			<div id="gauche">
			<img id="content_disto-pedale_disto" src="img/content_disto/disto.png" alt="pédale de distortion">
			</div>
			
			<div id="droite">
			<img id="content_disto-main" src="img/main.png" alt="main"><span class="title_int_disto">Attention son mechant</span>
			<p class="text_intro_disto">L’effet de distorsion est sans aucun doute l’effet le plus utilisé par les guitaristes. Il permet d’obtenir un sustain plus soutenu lors des phases de solos et un son à l’agressivité variable pour les rythmiques. Largement utilisé dans le rock et le métal, cet effet n’en reste pas moins polyvalent puisqu’il est décliné suivant plusieurs formes de crunch du moins violent au plus brutal : overdrive, fuzz, distorsion. </p>
			<span class="titre_lecteur_audio">EFFET SANS PEDALE</span><br/>
			<audio src="audio/disto/source.ogg" controls preload="auto" style="float:left;width:370px;"></audio>
			<br/>	
			<br/>	
			<span class="titre_lecteur_audio">EFFET AVEC PEDALE</span><br/>
			<audio src="audio/disto/source_pedale.ogg" controls preload="auto" style="float:left;width:370px;"></audio>
			</div>
			
			
			<div id="bas">
			<div id="cadre_black">
				<span class="titre_explication_disto">A TOI DE JOUER !</span>
				<p class="text_explication_disto">Importe la piste sonore de ton choix, sélectionne là (double-click) et applique lui l’effet niveleur (degrés : plus fort ; seuil : -35dB) deux fois de suite. Ajoute lui une troisième fois cet effet en changeants les paramètres (degrés : plus fort ; seuil : -50dB). Termine en additionnant via le menu effets, un compresseur et un égaliseur suivant les paramètres ci-contre.</p>
				
					
				<div id="galleria_disto">
				<a href="img/content_disto/slide1.jpg"><img src="img/content_disto/slide1_small.jpg" data-big="img/content_disto/slide1_big.jpg" data-title="01 - niveleur" data-description="My description"></a>
				<a href="img/content_disto/slide2.jpg"><img src="img/content_disto/slide2_small.jpg" data-big="img/content_disto/slide2_big.jpg" data-title="02 - compresseur" data-description="My description"></a>
				<a href="img/content_disto/slide3.jpg"><img src="img/content_disto/slide3_small.jpg" data-big="img/content_disto/slide3_big.jpg" data-title="03 - egaliseur" data-description="My description"></a>
				</div>
				
				<script>
				Galleria.loadTheme('js/galleria.classic.min.js');
				Galleria.configure({
				imageCrop: true
				
				});
				
				Galleria.run('#galleria_disto', {
					extend: function(options) {

						// Galleria.log(this) // the gallery instance   /* BUG AVC CRHOME */
						// Galleria.log(options) // the gallery options

						// listen to when an image is shown
						this.bind('image', function(e) {

							Galleria.log(e) // the event object may contain custom objects, in this case the main image
							Galleria.log(e.imageTarget) // the current image

							// lets make galleria open a lightbox when clicking the main image:
							$(e.imageTarget).click(this.proxy(function() {
							   this.openLightbox();
							}));
						});
					}
				});
				</script>
					
	
			</div>
			</div>
			
		</div>
			
		<div id="slide3">
			<h2 class="title" style="visibility:hidden;height:0px;">DELAY</h2>
			<div id="gauche">
			<img id="content_disto-pedale_disto" src="img/content_delay/delay.png" alt="pédale de distortion">
			</div>
			
			<div id="droite">
			<img id="content_disto-main" src="img/main.png" alt="main"><span class="title_int_disto">Repeat after me</span>
			<p class="text_intro_disto">Le  delay consiste à décaler un signal dans le temps entre son arrivée à l’entrée de l’effet et sa sortie sur le haut-parleur de l’amplificateur. Le principe de fonctionnement est basé sur l’echo, ajouté volontairement par le delay, il vient se superposer au son direct en s’atténuant généralement assez vite pour éviter les capharnaüms. </p>
			<span class="titre_lecteur_audio">EFFET SANS PEDALE</span><br/>
			<audio src="audio/delay/source.ogg" controls preload="auto" style="float:left;width:370px;"></audio>
			<br/>	
			<br/>	
			<span class="titre_lecteur_audio">EFFET AVEC PEDALE</span><br/>
			<audio src="audio/delay/source_pedale.ogg" controls preload="auto" style="float:left;width:370px;"></audio>
			</div>
			
			
			<div id="bas">
			<div id="cadre_black">
				<span class="titre_explication_disto">A TOI DE JOUER !</span>
				<p class="text_explication_disto">Importe la piste sonore de ton choix, sélectionne là (double-click) et applique lui l’effet Delay. Pour la configuration de l'effet, je te renvoi va voir la manuel d'Audacity, <a style="color:#fff" href="http://manual.audacityteam.org/man/Delay/fr">ici.</a> Tu remarquera que l'echo et le Delay sont bien liés.</p>
				
					
				<div id="galleria_delay">
				<a href="img/content_delay/slide1.jpg"><img src="img/content_delay/slide1_small.jpg" data-big="img/content_delay/slide1_big.jpg" data-title="My title" data-description="My description"></a>
				<a href="img/content_delay/slide2.jpg"><img src="img/content_delay/slide2_small.jpg" data-big="img/content_delay/slide2_big.jpg" data-title="Another title" data-description="My <em>HTML</em> description"></a>
				<a href="img/content_delay/slide3.jpg"><img src="img/content_delay/slide3_small.jpg" data-big="img/content_delay/slide3_big.jpg" data-title="Another title" data-description="My <em>HTML</em> description"></a>
				</div>
				
				<script>
				Galleria.loadTheme('js/galleria.classic.min.js');
				Galleria.configure({
				imageCrop: true
				
				});
				
				Galleria.run('#galleria_delay', {
					extend: function(options) {

						// Galleria.log(this) // the gallery instance   /* BUG AVC CRHOME */
						// Galleria.log(options) // the gallery options

						// listen to when an image is shown
						this.bind('image', function(e) {

							Galleria.log(e) // the event object may contain custom objects, in this case the main image
							Galleria.log(e.imageTarget) // the current image

							// lets make galleria open a lightbox when clicking the main image:
							$(e.imageTarget).click(this.proxy(function() {
							   this.openLightbox();
							}));
						});
					}
				});
				</script>
					
	
			</div>
			</div>
			
		</div>
		
		<div id="slide4">
				<h2 class="title" style="visibility:hidden;height:0px;">NOISE-GATE</h2>
			<div id="gauche">
			<img id="content_disto-pedale_disto" src="img/content_noise/noise.png" alt="pédale de distortion">
			</div>
			
			<div id="droite">
			<img id="content_disto-main" src="img/main.png" alt="main"><span class="title_int_disto">Zero souffle</span>
			<p class="text_intro_disto">Le noise-gate est un effet de traitement sonore qui permet d’empêcher les sons parasitaires tel que les soufflements dû à une distorsion massive. Il coupe tout signal ne dépassant  pas un certain volume mais n’altère en aucun cas les autres. Cela permet d’avoir un son propre d’une bonne qualité pour le mixage final. </p>
			<span class="titre_lecteur_audio">EFFET SANS PEDALE</span><br/>
			<audio src="audio/noise/source.ogg" controls preload="auto" style="float:left;width:370px;"></audio>
			<br/>	
			<br/>	
			<span class="titre_lecteur_audio">EFFET AVEC PEDALE</span><br/>
			<audio src="audio/noise/source_pedale.ogg" controls preload="auto" style="float:left;width:370px;"></audio>
			</div>
			
			
			<div id="bas">
			<div id="cadre_black">
				<span class="titre_explication_disto">A TOI DE JOUER !</span>
				<p class="text_explication_disto">Importe la piste sonore de ton choix, selectionne via le curseur la partie avec des soufflements. Génère un silence à la place. </p>
				
					
				<div id="galleria_noise">
				<a href="img/content_noise/slide1.jpg"><img src="img/content_noise/slide1_small.jpg" data-big="img/content_noise/slide1_big.jpg" data-title="01 - original" data-description="My description"></a>
				<a href="img/content_noise/slide2.jpg"><img src="img/content_noise/slide2_small.jpg" data-big="img/content_noise/slide2_big.jpg" data-title="02 - silence" data-description="My <em>HTML</em> description"></a>
				<a href="img/content_noise/slide3.jpg"><img src="img/content_noise/slide3_small.jpg" data-big="img/content_noise/slide3_big.jpg" data-title="03 - final" data-description="My <em>HTML</em> description"></a>
				</div>
				
				<script>
				Galleria.loadTheme('js/galleria.classic.min.js');
				Galleria.configure({
				imageCrop: true
				
				});
				
				Galleria.run('#galleria_noise', {
					extend: function(options) {

						// Galleria.log(this) // the gallery instance   /* BUG AVC CRHOME */
						// Galleria.log(options) // the gallery options

						// listen to when an image is shown
						this.bind('image', function(e) {

							Galleria.log(e) // the event object may contain custom objects, in this case the main image
							Galleria.log(e.imageTarget) // the current image

							// lets make galleria open a lightbox when clicking the main image:
							$(e.imageTarget).click(this.proxy(function() {
							   this.openLightbox();
							}));
						});
					}
				});
				</script>
					
	
			</div>
			</div>
			
		</div>
		
		<div id="slide5">
						<h2 class="title" style="visibility:hidden;height:0px;">COMPRESSOR</h2>
			<div id="gauche">
			<img id="content_disto-pedale_disto" src="img/content_compressor/compressor.png" alt="pédale de distortion">
			</div>
			
			<div id="droite">
			<img id="content_disto-main" src="img/main.png" alt="main"><span class="title_int_disto">Haaaaaaaa</span>
			<p class="text_intro_disto">Cet effet est utilisé  pour augmenter le volume des notes plus douces tout en plafonnant les plus fortes pour donner une homogénéité au volume de sortie. Il permet également de maintenir plus longtemps le son d’une note tenue à son niveau sonore d’origine. Il est bon de coupler cet effet avec un noise-gate pour éviter les soufflements produits par l’égalisation des volumes.</p>
			<span class="titre_lecteur_audio">EFFET SANS PEDALE</span><br/>
			<audio src="audio/compressor/source.ogg" controls preload="auto" style="float:left;width:370px;"></audio>
			<br/>	
			<br/>	
			<span class="titre_lecteur_audio">EFFET AVEC PEDALE</span><br/>
			<audio src="audio/compressor/source_pedale.ogg" controls preload="auto" style="float:left;width:370px;"></audio>
			</div>
			
			
			<div id="bas">
			<div id="cadre_black">
				<span class="titre_explication_disto">A TOI DE JOUER !</span>
				<p class="text_explication_disto">Importe la piste sonore de ton choix, sélectionne là (double-click) et applique lui l’effet Compressor. Pour la configuration de l'effet, je te renvoi va voir la manuel d'Audacity, <a style="color:#fff" href="http://manual.audacityteam.org/man/Compressor/fr">ici.</a> Tu remarquera que c'est la portée dynamique qui est bidouillé, et tout sa pour plus de compression.</p>
				
					
				<div id="galleria_compressor">
				<a href="img/content_compressor/slide1.jpg"><img src="img/content_compressor/slide1_small.jpg" data-big="img/content_compressor/slide1_big.jpg" data-title="My title" data-description="My description"></a>
				<a href="img/content_compressor/slide2.jpg"><img src="img/content_compressor/slide2_small.jpg" data-big="img/content_compressor/slide2_big.jpg" data-title="Another title" data-description="My <em>HTML</em> description"></a>
				<a href="img/content_compressor/slide3.jpg"><img src="img/content_compressor/slide3_small.jpg" data-big="img/content_compressor/slide3_big.jpg" data-title="Another title" data-description="My <em>HTML</em> description"></a>
				</div>
				
				<script>
				Galleria.loadTheme('js/galleria.classic.min.js');
				Galleria.configure({
				imageCrop: true
				
				});
				
				Galleria.run('#galleria_compressor', {
					extend: function(options) {

						// Galleria.log(this) // the gallery instance   /* BUG AVC CRHOME */
						// Galleria.log(options) // the gallery options

						// listen to when an image is shown
						this.bind('image', function(e) {

							Galleria.log(e) // the event object may contain custom objects, in this case the main image
							Galleria.log(e.imageTarget) // the current image

							// lets make galleria open a lightbox when clicking the main image:
							$(e.imageTarget).click(this.proxy(function() {
							   this.openLightbox();
							}));
						});
					}
				});
				</script>
					
	
			</div>
			</div>
		</div>
	  
	  
	</div>


	





	<!--
	<div id="content">
	 
		<div class="contentbox-wrapper">
	 
			<div id="about" class="contentbox">
				<h3>HOME</h3>
				<p>Lorem ipsum dolor ...</p>
			</div>
	 
			<div id="work" class="contentbox">
				<h3>DISTORTION</h3>
				<p>Lorem ipsum dolor ...</p>
			</div>
	 
			<div id="contact" class="contentbox">
				<h3>DELAY</h3>
				<p>Lorem ipsum dolor ... </p>
			</div>
			<div id="contact" class="contentbox">
				<h3>NOISE-GATE</h3>
				<p>Lorem ipsum dolor ... </p>
			</div>
			<div id="contact" class="contentbox">
				<h3>NCOMPRESSOR</h3>
				<p>Lorem ipsum dolor ... </p>
			</div>
		</div>
	 
	</div>
	-->
	
	
	
	
</div><!-- fin wrapper -->
<div id="liserai_bas"></div>


<footer>
<div id="inner_footer">

<div id="foot_gch">
<img src="img/logo.png" alt="logo"/>
<p class="txt_foot">D-project est le nom que nous avons donné à ce site sur les effets sonores réalisé en tant  qu’exercice pédagogique à but non lucratif pour Ingémédia. Le but étant de matérialisé un didacticiel sur le son, nous avons sélectionné plusieurs pédales d’effets de popularités différentes pour examiner leurs utilités. Nous expliquons ensuite le moyen de reproduire cet effet sur un logiciel de musique assisté par ordinateur "Audacity".<br/><p>
</div>

<div id="foot_centre">
<img src="img/logo_how.png" alt="logo"/>
<p class="txt_foot">Nous avons choisi d’utilisé Audacity pour sa simplicité et sa gratuité. Cela n’empêche en aucun cas d’effectuer le même genre d’effets sur d’autre logiciel de MAO.<br/>
<a href="http://www.commentcamarche.net/download/telecharger-113-audacity" style="color:#fff;text-decoration:none;">Lien de téléchargement d’audacit</a><br/><p>

</div>

<div id="foot_drt">
<img src="img/logo_qui.png" alt="logo"/>
<p class="txt_foot"> Ce site a entièrement été réalisé par Pierre Delaunay (conception, programmation) et Vivien Grivaud (conception, graphisme), étudiant de licence pro Techniques Activités de l’Image et du Son option Convergence Internet Audiovisuel et Numérique.<br/>Contact : <a href="mailto:vgrivaud@gmail.com" style="color:#fff;text-decoration:none;">Vivien</a> & <a href="mailto:p.delaunay1@gmail.com" style="color:#fff;text-decoration:none;">Pierre</a><p>
</div>

</div>
</footer>

   <!-- This of course is required. The full version (not .min) is also included in the js directory -->
   <script src="js/jquery.coda-slider-3.0.js"></script>
   <script src="js/script.js"></script>
	 
</body>
</html>