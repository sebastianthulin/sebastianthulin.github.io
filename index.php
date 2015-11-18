<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" lang="sv-SE">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="sv-SE">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="sv-SE">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="nor" lang="sv-SE">
<!--<![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="./assets/images/favicon.png" />
    <title>Sebastian Thulin - WordPress Utvecklare</title>

    <!-- Basic stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>

    <!-- Settings, Safari Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="format-detection" content = "telephone=yes">
	<meta name="HandheldFriendly" content="true" />

	<!-- Compability -->
	<!--[if lt IE 9]>
	<script type="text/javascript">
		document.createElement('header');
		document.createElement('nav');
		document.createElement('section');
		document.createElement('article');
		document.createElement('aside');
		document.createElement('footer');
		document.createElement('hgroup');
	</script>
	<![endif]-->
	
	<!-- Noscript mode -->
	<noscript>
		<style>
			.blockmenu {
				display: block !important; 
			}
		</style>
	</noscript>
  </head>
  
  <body>
  
  	<div class="container hidden-md hidden-lg hidden-print">
		<div class="row">
  			<div class="col-xs-24">
			  	<a id="menutrigger" href="#mobilemenu">
			  		<span></span>
			  		<span></span>
			  		<span class="last"></span>
			  	</a>
  			</div>
		</div>
	</div>
  
  	<nav role="main" class="hidden-print">
  		<ul>
  			<li><a class="active" href="#sebastian">Sebastian</a></li>
  			<li><a href="#frontend">Frontend</a></li>
  			<li><a href="#backend">Backend</a></li>
  			<li><a href="#annat">Annat</a></li>
  			<li><a href="#utbildning">Utbildning</a></li>
  			<li><a href="#arbete">Arbete</a></li>
  			<li><a href="#dtrivsjag">Då trivs jag</a></li>
  			<li><a href="#kontakt">Kontakt</a></li>
  		</ul>
  	</nav>
  	
  	<div class="blockmenu active">
  	
	  	<header class="container" id="sebastian">

		  	<div class="row hidden-xs hidden-sm">
		  		<div class="col-xs-10"></div>
		  		<div class="col-xs-4">
			  		<img class="profileimage" src="./assets/images/sebastian.png"/>
		  		</div>
		  		<div class="col-xs-10"></div>
	  		</div>

	  		<div class="row">
		  		<div class="col-xs-24">
			  		<h1>Sebastian <span class="hidden-xs">Thulin</span></h1>
			  		<h2 class="small bottommargin">Webbutvecklare</h2>
		  		</div>
	  		</div>
	  		
	  		<div class="row">
		  		<div class="hidden-xs hidden-sm col-md-4 col-lg-5"></div>
		  		<div class="col-xs-24 col-md-16 col-lg-14">
			  		<p class="description">
			  			Hej! Jag heter Sebastian Thulin, jag jobbar med webbutveckling, primärt i WordPress.
			  		</p>
			  		
			  		<p class="description">
			  			Mina uppdrag har varit blandade sedan jag började arbeta professionellt med webbutveckling, men ett återkommande inslag har varit hantering av större produktdatabaser.
			  		</p>
			  		
			  		<p class="description">
			  			Jag har även utvecklat mängder med WordPress-siter med fokus på både effektiv och lättunderhållen kod, samt enkla gränssnitt för användaren. Oftast, nöjer jag mig inte förrän produkten är perfekt i minsta detalj, men med stor respekt för den utställda budgeten.
			  		</p>
		  		</div>
		  		<div class="hidden-xs hidden-sm col-md-4 col-lg-5"></div>
	  		</div>
	  		
	  	</header>
  	
  	</div>
  	
  	<?php 
		
		$competences = array(
			
			array(
				'name' 	=> 	"Frontend",
				'data' 	=> 	array(
								array("Bootstrap", 85, "#5DCC66", "icon-grid" ),
								array("JQuery", 90, "#2F9089", "icon-cog-alt"  ), 
								array("HTML 5 & CSS3", 90, "#58995E", "icon-html5"  ), 
								array("Formgivning", 80, "#61CCAB", "icon-brush"  ), 
							),
				'other' => array("Interaktionsdesign","Vanilla JS","SASS", "LESS","Adaptiva layouter","Adobe Photoshop", "Angular JS")
			),
			array(
				'name' => 	"Backend",
				'data' => 	array(
								array("PHP", 90, "#61CCA8", "icon-article-alt"  ),
								array("MySQL", 90, "#5DCCC1", "icon-database"  ), 
								array("ASP.NET C#", 40, "#18BDDF", "icon-code"  ),
								array("SQL Server", 60, "#6EC34C", "icon-database"  )
							),
				'other' => array("PostgreeSQL","ASP.NET VB","MVC Programmering")
			),
			array(
				'name' => 	"Annat",
				'data' => 	array(
								array("Git", 80, "#4FC0CC", "icon-github-text"  ),
								array("Wordpress", 95, "#4E9199", "icon-wordpress11"  ), 
								array("Ljudproduktion", 50, "#FF7379", "icon-music"  ), 
								array("Projektledning", 70, "#CC5395", "icon-clock-1"  ), 
							),
				'other' => array("Linux", "Windows Server","Mac OSX","Adobe Audition")
			)
		
		); 
		
		foreach ( $competences as $competence ) {

			?>
			
			<div class="blockmenu <?php echo ( $competence['name'] == "" ? "active" : "" ); ?>">
			
				<section id="<?php echo strtolower(preg_replace('/[^a-zA-Z]/', '',$competence['name'] )); ?>" class="qualification container">
					
					<div class="row">
						<div class="col-xs-24">
							<h3 class="topmargin"><?php echo $competence['name'];?></h3>
						</div>
					</div>
					<div class="row blockcontainer">
						<?php foreach ( $competence['data'] as $item ) { ?>
					
					  		<div class="col-xs-24 col-sm-12 col-md-6">
					  			
					  			<div class="bigicon percentanimation" style="background-color: <?php echo $item[2]; ?>">
					  			
					  				<img src="./assets/images/square.png" class="stretch hidden-xs hidden-sm"/>
					  				
					  				<div class="wrapper">
					  				
					  					<span class="glyphicon <?php echo $item[3]; ?>" aria-hidden="true"></span>
					  				
					  					<div class="percent hidden-xs hidden-sm" data-value="<?php echo $item[1]; ?>">
					  						<img src="./assets/images/square.png" class="stretch"/>
					  					</div>
					  					
					  					<div class="mperc hidden-md hidden-lg">
					  						<?php echo $item[1]; ?>%
					  					</div>
					  				
					  				</div>
					  			
					  			</div>
					  			
					  			<span class="label">
					  				<?php echo $item[0]; ?>
					  			</span>
					  			
					  		</div>
							
						<?php } ?>  
						
					</div>
						
					<div class="row">
						<div class="others">
							<?php 
								if ( isset( $competence['other'] ) && is_array( $competence['other'] ) ) { 
									echo "<span>Andra kompetenser:</span> " . implode(", ", $competence['other'] ); 
								}
							?>
						</div>
					</div>
					
				</section>
			
			</div>
			
			<?php
			
		} 
		
	
	
	?>
	
	<div class="blockmenu">
	
		<section id="dtrivsjag" class="container">
			
			<div class="row">
				<div class="col-xs-24">
					<h3 class="bottommargin topmargin">Då trivs jag</h3>
				</div>
			</div>
			
			<div class="row">
		  		<div class="hidden-xs hidden-sm col-md-4 col-lg-5"></div>
		  		<div class="col-xs-24 col-md-16 col-lg-14">
			  		<p class="description">
				  		Vad jag trivs bäst med att arbeta i för miljöer och språk är relativt svårt att beskriva i en form som ständigt är aktuell. Jag har en vilja att lära mig minst en ny sak varje dag. Det kan vara en ny spännande teknik, eller helt enkelt att dra lärdom av ett misstag. 
			  		</p>
			  		
			  		<p class="description">
						Att ha en arbetsplats där arbetsgivaren lägger ner det där lilla extra för att medarbetarna ska känna glädje för att gå till jobbet, är bland det viktigaste som finns. 			  			
						Att kollegorna är spontana och har ett sinne för både bra och dålig humor är ett stort plus.
					</p>
		  		</div>
		  		<div class="hidden-xs hidden-sm col-md-4 col-lg-5"></div>
	  		</div>
				
		</section>
	
	</div>
	
	<div class="blockmenu">		
		
		<section id="utbildning" class="container">

			<div class="row">
		  		<div class="hidden-xs hidden-sm col-md-4 col-lg-5"></div>
		  		<div class="col-xs-24 col-md-16 col-lg-14">
		
					<h4 class="bottommargin topmargin">Utbildning</h4>
					
					<p class="description">
						Under mina gymnasiala år, gjorde jag valet att rikta in mig på det <strong>tekniska programmet</strong>. Då med tillval starkt inriktat på programmering i bland annat VB.NET, .NET C#, HTML, CSS och Java. Detta i kombination med tillvalskurser i musik och medieproduktion. 
					</p>
					
					<p class="description">
						Kort efter at jag tog studenten, valde jag att söka mig vidare i studierna och hamnade i <strong>Halmstad</strong>, på deras <strong>Informatikprogram</strong>. Där läste jag blandade kurser inom informatik, som bland annat omfattar; Multimedia, IT-Strategi, Interaktionsdesign, Visual-Basic, Affärssystem, Nätverksteknik, ASP.NET och Systemutveckling.
					</p>
					
				</div>
		  		<div class="hidden-xs hidden-sm col-md-4 col-lg-5"></div>
	  		</div>
	
		</section>

	</div>
	
	<div class="blockmenu">		
		
		<section id="arbete" class="container">
	
			<div class="row">
		  		<div class="hidden-xs hidden-sm col-md-4 col-lg-5"></div>
		  		<div class="col-xs-24 col-md-16 col-lg-14">
		
					<h4 class="bottommargin topmargin">Erfarenheter</h4>
					
					<p class="description">
						<strong>Helsingborg Stad | 2015 och framåt</strong><br/>
						På Helsingborg Stad jobbar jag likväl med WordPress, men har tagit ett kliv mot en mer varierad roll som utvecklingsansvarig (WordPress Lead Developer). 
					</p>
					
					<p class="description">
						<strong>Gertrud och Söner AB | 2012 - 2015</strong><br/>
						På gertrud är var mitt primära arbetsområde utveckling av Wordpress sidor, i första hand frontendutveckling, men i många fall även backendlösningar. Vid ett fåtal tillfällen genomförde jag även kompletta ljudproduktioner för såväl film som monterinstallationer. 
					</p>
					
					<p class="description">
						<strong>MBS Maskinbroderi | 2010, 2011 & 2012</strong><br/>
						På MBS jobbade jag som Internutvecklare och Grafisk formgivare. Jag ansvarede för att planera och strukturera upp webbsidan innehållande ett stort produktsortment, samt att producera denna. I arbetsuppgifterna ingick komplett tekniskt ansvar samt att producera tryckmaterial så som tidningsannonser, men också tryck för kläder.
					</p>
					
					<p class="description">
						<strong>Logotypebolaget Sverige AB | 2011</strong><br/>
						På Logotypebolaget arbetade jag primärt med att skapa mindre Wordpress-sidor för småföretagare. Dock ansvarade jag också för produktionen av större söksajter och offert- förmedlingssiter, de flesta, byggda i ASP.NET C#. 
					</p>
					
					<p class="description">
						Jag har också haft följande anställningar; Helsingborgs Stad - Webbdesignslärare, Automationspartner Helsingborg - Dokumenationsansvarig.
					</p>
					
				</div>
		  		<div class="hidden-xs hidden-sm col-md-4 col-lg-5"></div>
	  		</div>

		</section>

	</div>
	
	<div class="blockmenu">		
		
		<footer id="kontakt" class="container">

			<div class="row hidden-xs hidden-sm">
				<div class="col-xs-10"></div>
		  		<div class="col-xs-4">
			  		<img class="profileimage" src="./assets/images/sebastian.png"/>
		  		</div>
		  		<div class="col-xs-10"></div>
	  		</div>
		  		
			<div class="row">
		  		<div class="hidden-xs hidden-sm col-md-4 col-lg-5"></div>
		  		<div class="col-xs-24 col-md-16 col-lg-14">
		
					<h4 class="bottommargin topmargin">Kontakta mig</h4>
					
					<p class="oneliner hidden-xs hidden-sm"><a href="mailto:sebastian.thulin@gmail.com">sebastian.thulin@gmail.com</a></p>
					
					<p class="oneliner hidden-xs hidden-sm"><a href="tel:+46730861415">+46 (0)730 86 14 15</a></p>
				
					<p class="description hidden-md hidden-lg">
						För att kontakta mig kan du antingen maila på <a href="mailto:sebastian.thulin@gmail.com">sebastian.thulin@gmail.com</a> eller slå mig en signal på <a href="tel:+46730861415">+46 (0)730 86 14 15</a>.
						<br/>
						<br/>
						Vi hörs! 
					</p>
					
				</div>
		  		<div class="hidden-xs hidden-sm col-md-4 col-lg-5"></div>
	  		</div>
		
		</footer>

	</div>

	<!-- Custom scripts -->
	<script src="./assets/js/min/script-min.js"></script>
	
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="./assets/js/respond.js"></script>
    <![endif]-->

  </body>
  
</html>