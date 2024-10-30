<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php"> <img src="images/couch.png" width="50" height="50"></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Accueil</a>
						</li>
						<li><a class="nav-link" href="#service">Services</a></li>
						<li><a class="nav-link" href="#projet">Nos projets</a></li>
						<li><a class="nav-link" href="#contact">Contact</a></li>

							<li><a class="nav-link" href="https://www.linkedin.com/in/aaai/"><span class="fa fa-brands fa-linkedin"></span></a></li>
							<li><a class="nav-link" href="https://www.youtube.com/@A3I-Startup"><span class="fa fa-brands fa-youtube"></span></a></li>

						</ul>
					</ul>

				
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
					<div class="row justify-content-between">
					<center>
						<div >
							<div class="intro-excerpt">
							<img src="images/A-I-22-10-2024 (2).png" width="200" height="100">

<center>
    <div id="dynamic-text"></div>
</center>

<script>
    const text = "Notre Startup Tunisienne est spécialisée dans les applications web, mobiles et les solutions embarquées. Nous créons des technologies innovantes et automatisées pour simplifier les défis numériques.";
    const speed = 70; // Vitesse de l'écriture en millisecondes
    let i = 0;

    function typeWriter() {
        if (i < text.length) {
            document.getElementById("dynamic-text").innerHTML += text.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }

    window.onload = typeWriter;
</script>

<style>
 

    #dynamic-text {
        font-size: 1rem;  /* Taille du texte */
        font-weight: bold;
        color: white;
        line-height: 2; /* Espace entre les lignes */
        width: 120%; /* Ajuster la largeur pour contrôler l'affichage */
        text-align: center; /* Centrer le texte à l'intérieur */
    }
</style>
<br>
<br>

								<p><a href="#contact" class="btn btn-secondary me-2">Contact</a><a href="#service" class="btn btn-white-outline">Services</a></p>
							</div>
						</div>
							<div class="hero-img-wrap">
							</div>
							</center>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section" id="service">
			<div class="container">
				<div class="row" >

					<!-- Start Column 1 -->
					<div  class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Nos Services.</h2>
						<p class="mb-4"> Nous proposons des solutions d'applications web et mobiles sur mesure, ainsi que des solutions embarquées innovantes, pour répondre à vos défis technologiques. Notre expertise s'étend à l'intégration de technologies avancées et à un support technique fiable..</p>
					</div> 
					<!-- End Column 1 -->

				

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="applicationmobile.php">
							<img src="images/product-2.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Application</h3>
							<strong class="product-price">Mobile</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->
						<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="applicationweb.php">
						<br> 
						<br>
						
							<img src="images/product-1.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Application </h3>
							<strong class="product-price">Web</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="solutionembarque.php">
							<img src="images/product-3.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Solutions </h3>
							<strong class="product-price">Embarquées</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
						
						<h2 class="section-title text-center mb-4">Pourquoi choisir A³I ?</h2>
						<p class="text-center mb-5">Chez A³I, nous nous engageons à transformer vos idées en solutions technologiques innovantes. Notre expertise en développement d'applications web et mobiles, ainsi qu'en solutions embarquées, nous permet de répondre aux besoins uniques de chaque client.</p>

						<div class="container">
							<div class="row text-center">
								<div class="col-md-3">
									<div class="feature">
										<div class="icon">
											<i class="fas fa-lightbulb fa-3x" style="color: #1c748a;"></i>
										</div>
										<h3>Solutions Innovantes</h3>
										<p>Nous utilisons les dernières technologies pour offrir des solutions avant-gardistes qui propulsent votre entreprise vers l'avenir.</p>
									</div>
								</div>

								<div class="col-md-3">
									<div class="feature">
										<div class="icon">
											<i class="fas fa-cogs fa-3x" style="color: #1c748a;"></i>
										</div>
										<h3>Personnalisation Totale</h3>
										<p>Chaque projet est unique. Nous adaptons nos solutions pour répondre exactement aux besoins de votre entreprise.</p>
									</div>
								</div>

								<div class="col-md-3">
									<div class="feature">
										<div class="icon">
											<i class="fas fa-headset fa-3x" style="color: #1c748a;"></i>
										</div>
										<h3>Support 24/7</h3>
										<p>Notre équipe est disponible à tout moment pour vous accompagner et résoudre vos problèmes rapidement.</p>
									</div>
								</div>

								<div class="col-md-3">
									<div class="feature">
										<div class="icon">
											<i class="fas fa-check-circle fa-3x" style="color: #1c748a;"></i>
										</div>
										<h3>Qualité Assurée</h3>
										<p>Nous garantissons des solutions robustes et fiables, testées pour répondre aux normes les plus élevées.</p>
									</div>
								</div>
							</div>

						</div>

				</div>
			</div>
			
		<!-- End Why Choose Us Section -->

	
		<!-- Start Testimonial Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Nos Membres</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo; Jeune ingénieur en systèmes et logiciels embarqués, TRABELSI Amal possède une solide expérience en gestion de projets technologiques. Passionné par l'innovation, il supervise l'ensemble des opérations de la startup, établissant des stratégies claires pour atteindre les objectifs de l'entreprise tout en favorisant une culture d'équipe collaborative et dynamique..&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person.jpg" alt="Trabelsi Amal" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">TRABELSI Amal</h3>
													<span class="position d-block mb-3">Directrice Général
.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo; BOURAOUI Mohamed Iheb assure la santé financière de l'entreprise. Il est responsable de la planification budgétaire, de l'analyse des coûts et de l'optimisation des ressources. Sa capacité à jongler avec des chiffres complexes permet à la startup de prendre des décisions éclairées pour soutenir sa croissance..&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-2.jpg" alt="Bouraoui MedIheb" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">BOURAOUI Mohamed Iheb</h3>
													<span class="position d-block mb-3">Directeur Financier.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo; Spécialiste en Systèmes et Logiciels Embarqués Ambiants et Mobiles , GUESMI Azer dirige l'équipe technique dans le développement et l'implémentation de solutions innovantes. Son approche méthodique et sa passion pour la technologie lui permettent de résoudre des défis complexes, garantissant que les produits de la startup répondent aux standards de qualité les plus élevés.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-3.jpg" alt="GUESMI Azer" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">GUESMI Azer</h3>
													<span class="position d-block mb-3">Directeur Technique.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Diplômé en ingenieurie Systèmes et Logiciels Embarqués Ambiants et Mobiles ,BORCHENI Abdelkader utilise sa créativité et son expertise technique pour promouvoir les produits de la startup. Il développe des stratégies de communication efficaces et s'assure que l'image de l'entreprise soit en adéquation avec ses valeurs. Son rôle est crucial pour établir des relations durables avec les clients et les partenaires.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-4.jpg" alt="BORCHENI Abdelkader" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">BORCHENI Abdelkader </h3>
													<span class="position d-block mb-3">Directeur Communication et Marketing .</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section"id="projet">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Nos Projets</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<!--<a href="#" class="more">Afficher tous</a>-->
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<img src="images/post-1.jpg" alt="Image" class="img-fluid">
							<div class="post-content-entry">
							<br>
								<h3>Serre intelligente</h3>
								<div class="meta">
									<p>Une serre connectée déjà opérationnelle, permettant la surveillance et le contrôle en 
									temps réel des paramètres environnementaux (température, humidité, CO2)
									grâce à des capteurs et une gestion automatisée, accessible via une interface Web.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<img src="images/post-2.jpg" alt="Image" class="img-fluid">
							<div class="post-content-entry">
														<br>

								<h3>Application Web E-commerce</h3>
								<div class="meta">
									<span> Une application de commerce électronique sur mesure, réalisée pour permettre une navigation fluide et intuitive, 
									avec gestion de stocks, options de paiement sécurisé et une interface d'administration.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<img src="images/post-3.jpg" alt="Image" class="img-fluid">
							<div class="post-content-entry">
														<br>

								<h3>Application Mobile Dashbord</h3>
								<div class="meta">
									<span> Une application mobile de tableau de bord déjà développée, qui permet la visualisation en temps réel
									des données de capteurs embarqués sous forme de graphiques, avec alertes en cas de dépassement de seuils.</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
		<footer class="footer-section">
	

				
<div class="row justify-content-center g-9 mb-9" id="contact">
    <div class="col-lg-9 text-center" > <!-- Ajout du 'text-center' pour centrer le contenu -->
        <div class="mb-4 footer-logo-wrap">
            <a href="#" class="footer-logo">Coordonnées<span>.</span></a>
        </div>
        <p><span class="fa fa-map-marker"></span> 
            <a href="https://www.google.com/maps/place/R%C3%A9sidence+YOSR/@36.9121869,10.1852946,15z/data=!4m6!3m5!1s0x12e2cb9a716e6d2b:0x35548f7c9e0242bb!8m2!3d36.9121869!4d10.1852946!16s%2Fg%2F11fxxy94k4?entry=ttu&g_ep=EgoyMDI0MTAxNi4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                Résidence YOSR, Nour Jaafer 2081 , BLOC A3-1
            </a>
        </p>
        <p><span class="fa fa-envelope"></span> 
            <a href="mailto:startup.aaai@gmail.com">startup.aaai@gmail.com</a>
        </p>
        <p><span class="fa fa-phone"></span> 
            Tel : +216 50 122 990 / +216 70 639 378
        </p>
        <p><span class="fa fa-brands fa-linkedin"></span> 
            <a href="https://www.linkedin.com/in/aaai/">LinkedIn</a>
        </p>
    </div>
</div>

				


<!-- Ajouter Font Awesome pour les icônes -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


							
						</div>
					</div>

				</div>
								<center>

				<div class="border-top copyright">

<br>
					<div >
						<div class="col-lg-5">
						
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed by <a href="">A³I</a> 
							</p>
						</div>

					
					</div>

				</div>
								</center>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
