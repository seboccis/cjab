<?php

namespace Controller;

class GoogleMapAPIController extends DefaultController
{

	public function ajaxGetMap()
	{
		$data = [
					'Beauchamp'	=> 	[
										'lat' => 49.015751,
										'lng' => 2.191521,
									],
				];

		$this->showJson($data);
	}

}