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
<style>
    /* Ajoutez ces styles dans votre fichier CSS pour améliorer le formulaire */
    .form-label {
        font-weight: bold;
        margin-top: 10px;
    }

    .form-control {
        border: 1px solid #405c54; /* Couleur des bordures */
        border-radius: 5px; /* Bords arrondis */
        transition: border-color 0.3s; /* Effet de transition */
    }

    .form-control:focus {
        border-color: #405c54; /* Couleur de la bordure au focus */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Ombre autour de l'élément */
    }

    .btn-primary {
        background-color:#405c54; /* Couleur de fond du bouton */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s; /* Effet de transition */
    }

    .btn-primary:hover {
        background-color: #405c54; /* Couleur au survol */
    }

    .text-center {
        text-align: center; /* Centre le texte */
    }
</style>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php"> <img src="images/couch.png" width="200" height="100"></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
							<a class="nav-link" href="index.php">Accueil</a>
												<li class="nav-item active">
<a class="nav-link" href="index.php#service">Services</a></li>
						<li><a class="nav-link" href="index.php#projet">Nos projets</a></li>
						<li><a class="nav-link" href="index.php#contact">Contact</a></li>
							<li><a class="nav-link" href="https://www.linkedin.com/in/aaai/"><span class="fa fa-brands fa-linkedin"></span></a></li>
							<li><a class="nav-link" href="https://www.youtube.com/@A3I-Startup"><span class="fa fa-brands fa-youtube"></span></a></li>

						</ul>

				
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->
<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Solution Embarquée</h1>
<div id="dynamic-text"></div>

<script>
    const text = "Avec A³I, concevez et intégrez des solutions embarquées pour divers secteurs, alliant hardware et software pour répondre aux défis technologiques modernes..";
    const speed = 30; // Vitesse de l'animation
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
        width: 200%; /* Ajuster la largeur pour contrôler l'affichage */
        text-align: center; /* Centrer le texte à l'intérieur */
    }
</style>



							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>




		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container mt-5">
    <div class="container mt-5">
    <h3 class="text-center mb-4" style="color: #405c54;">Formulaire de demande de solutions embarquées</h3>
    <form id="contactForm" action="send_email_embarqué.php" method="POST" class="row g-3">

        <!-- Nom du client -->
        <div class="col-md-6">
            <label for="nameEmbedded" class="form-label">Nom complet</label>
            <input type="text" class="form-control" id="nameEmbedded" name="nameEmbedded" placeholder="Entrez votre nom" required>
        </div
		

        <!-- Email du client -->
        <div class="col-md-6">
            <label for="emailEmbedded" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailEmbedded" name="emailEmbedded" placeholder="Entrez votre email" required>
        </div>
        
        <div class="col-md-6">
            <label for="phoneEmbedded" class="form-label">Numéro de téléphone</label>
            <input type="tel" class="form-control" id="phoneEmbedded" name="phoneEmbedded"  placeholder="Ex: 98 *** ***" pattern="^[0-9]{8}$" required>
            <small class="form-text text-muted">Veuillez entrer un numéro à 8 chiffres (ex: 98 *** ***).</small>
        </div>

        <!-- Type de solution -->
        <div class="col-md-6">
            <label for="solutionType" class="form-label">Type de solution embarquée</label>
            <select class="form-select" id="solutionType"  name="solutionType" required>
                <option selected disabled>Choisir le type de solution</option>
                <option value="mobile">Application mobile embarquée</option>
                <option value="web">Application web embarquée</option>
                <option value="hardware">Solution hardware embarquée</option>
                <option value="iot">Internet des objets (IoT)</option>
                <option value="automotive">Automobile (système embarqué)</option>
                <option value="healthcare">Santé (système embarqué)</option>
                <option value="industrial">Industriel (système embarqué)</option>
            </select>
        </div>

        <!-- Thème de l'application -->
        <div class="col-md-6">
            <label for="themeEmbedded" class="form-label">Thème de la solution</label>
            <select class="form-select" id="themeEmbedded" name="themeEmbedded" required>
                <option selected disabled>Choisir un thème</option>
                <option value="light">Clair</option>
                <option value="dark">Sombre</option>
                <option value="custom">Personnalisé</option>
            </select>
        </div>

        <!-- Description détaillée du projet -->
        <div class="col-12">
            <label for="descriptionEmbedded" class="form-label">Description détaillée</label>
            <textarea class="form-control" id="descriptionEmbedded" name="descriptionEmbedded"  rows="5" placeholder="Décrivez votre projet et ses fonctionnalités principales" required></textarea>
        </div>

        <!-- Fonctionnalités supplémentaires -->
        <div class="col-12">
            <label for="featuresEmbedded" class="form-label">Fonctionnalités supplémentaires</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="gps" id="gpsEmbedded" name="gpsEmbedded">
                <label class="form-check-label" for="gpsEmbedded">GPS / Géolocalisation</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="realTimeData" id="realTimeDataEmbedded"name="realTimeDataEmbedded">
                <label class="form-check-label" for="realTimeDataEmbedded">Données en temps réel</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="cloudIntegration" id="cloudIntegrationEmbedded" name="cloudIntegrationEmbedded">
                <label class="form-check-label" for="cloudIntegrationEmbedded">Intégration cloud</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="socialIntegration" id="socialIntegrationEmbedded"name="socialIntegrationEmbedded">
                <label class="form-check-label" for="socialIntegrationEmbedded">Intégration de réseaux sociaux</label>
            </div>
        </div>

        <!-- Budget estimé -->
        <div class="col-md-6">
            <label for="budgetEmbedded" class="form-label">Budget estimé (en TND)</label>
            <input type="number" class="form-control" id="budgetEmbedded" name="budgetEmbedded" placeholder="Exemple : 5000 TND" required>
        </div>

        <!-- Date de livraison souhaitée -->
        <div class="col-md-6">
            <label for="deliveryDateEmbedded" class="form-label">Date de livraison souhaitée</label>
            <input type="date" class="form-control" id="deliveryDateEmbedded" name="deliveryDateEmbedded" required>
        </div>

        <!-- Soumettre le formulaire -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary" style="background-color: #405c54;">Envoyer la demande</button>
        </div>
    </form>
</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#contactForm').on('submit', function (event) {
            event.preventDefault(); // Empêche la redirection par défaut du formulaire
            
            $.ajax({
                url: 'send_email_embarqué.php', // URL du fichier PHP qui traite l'envoi
                type: 'POST',
                data: $(this).serialize(), // Sérialise les données du formulaire
				
                success: function (response) {
                    alert("Demande envoyée avec succès!"); // Message de succès
                    $('#contactForm')[0].reset(); // Réinitialise le formulaire
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert("Erreur lors de l'envoi : " + textStatus); // Message d'erreur
                }
            });
        });
    });
</script>

<div class="row justify-content-center g-9 mb-9">
    <div class="col-lg-9 text-center"> <!-- Ajout du 'text-center' pour centrer le contenu -->
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
