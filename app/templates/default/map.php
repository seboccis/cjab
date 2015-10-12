<?php $this->layout('front_layout', [
										'page'	=> 'map',
										'title' => 'Plan de nos activités',
									])				?>


<?php $this->start('main_content')					?>
	<h2>Page de plan.</h2>

	<div id="showMap" data-ajax-googleMapAPI-getMap-path="<?php echo $this->url('ajax_googleMapAPI_getMap'); ?>">
		<div id="mapBeauchamp"></div>
	</div>

	<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, vel. Atque sed, culpa sapiente delectus, laboriosam magni earum ut, repellendus ea praesentium quibusdam temporibus, architecto beatae sint consequuntur unde quam!</div>

<?php $this->stop('main_content')					?>