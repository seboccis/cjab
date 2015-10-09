<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<title><?= $this->e($title) ?> | CJAB</title>
		<script type="text/javascript" src="<?= $this->assetUrl('js/jQuery.min.js') ?>"></script>	
		<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
		<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
	</head>

	<body>

		<div class="container">

			<section>
				<?= $this->section('main_content') ?>
			</section>


		</div>
		
		<?= $this->section('javascript') ?>

	</body>

</html>