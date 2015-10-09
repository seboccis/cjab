<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<title><?= $this->e($title) ?> | CJAB</title>
		<script type="text/javascript" src="<?= $this->assetUrl('js/jQuery.min.js') ?>"></script>	
		<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
		<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
	</head>

	<body>

		<div class="page">

			<header>
				<div class="banner">
					<h1>Comité de Jumelage Altenstadt - Beauchamp</h1>
				</div>
				<div class="nav navHeader">
					<a href="<?= $this->url('home') ?>" class="navHeaderAnchor">Accueil</a>
					<a href="<?= $this->url('activites') ?>" class="navHeaderAnchor">Nos activités</a>
					<a href="<?= $this->url('history') ?>" class="navHeaderAnchor">Notre histoire</a>
					<a href="<?= $this->url('team') ?>" class="navHeaderAnchor">Notre équipe</a>
					<a href="<?= $this->url('contact') ?>" class="navHeaderAnchor">Contactez-nous</a>
				</div>
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