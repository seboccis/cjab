<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
		<meta charset="UTF-8">
		<title><?= $this->e($title) ?> | CJAB</title>
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="<?= $this->assetUrl('js/jQuery.min.js') ?>"></script>
		<!-- <script type="text/javascript" src="<?= $this->assetUrl('js/markerIconsLibrary.js'); ?>"></script> -->
		<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
		<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<input type="hidden" id="page" value="<?= $this->e($page) ?>">

		<div class="container">

			<header>
				<div class="banner">
					<h1>Comité de Jumelage Altenstadt - Beauchamp</h1>
				</div>
				<ul class="nav navHeader">

					<li><a href="<?= $this->url('home') ?>" id="navHeaderAnchorHome" class="navHeaderAnchor">Accueil</a></li>
					<li>
						<ul>
							<li><a href="<?= $this->url('activites') ?>" class="navHeaderAnchor">Nos activités</a></li>
							<li>
								<ul>
									<li><span>Nos animations</span></li>
									<li><a href="" class="navHeaderAnchor"></a></li>
									<li><a href="" class="navHeaderAnchor"></a></li>
									<li><a href="" class="navHeaderAnchor"></a></li>
								</ul>
							<li>
							<li>
								<ul>
									<span>Nos manifestations</span>
									<li><a href="" class="navHeaderAnchor"></a></li>
									<li><a href="" class="navHeaderAnchor"></a></li>
									<li><a href="" class="navHeaderAnchor"></a></li>
								</ul>
							<li>
						</ul>
					</li>
					<li><a href="<?= $this->url('map') ?>" id="navHeaderAnchorMap" class="navHeaderAnchor">Plan</a></li>
					<li><a href="<?= $this->url('history') ?>" class="navHeaderAnchor">Notre histoire</a></li>
					<li><a href="<?= $this->url('team') ?>" class="navHeaderAnchor">Notre équipe</a></li>
					<li><a href="<?= $this->url('contact') ?>" class="navHeaderAnchor">Contactez-nous</a></li>

				</ul>
			</header>

			<section>
				<?= $this->section('main_content') ?>
			</section>

			<footer>
				<div class="nav navFooter"></div>
			</footer>

		</div>
		
		<script type="text/javascript" src="<?= $this->assetUrl('js/main.js') ?>"></script>

	</body>

</html>