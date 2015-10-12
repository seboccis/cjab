function initPage()
{
	page = $('#page').val();
	initNavHeader(page);
	if(page == 'map'){
		getMap();
	}
}

function initNavHeader(page)
{
	switch(page){
		case 'accueil':
			$('#navHeaderAnchorHome').addClass('activ');
			break;
		case 'map':
			$('#navHeaderAnchorMap').addClass('activ');
			break;		
	}
}

function getMap(){
	path = $('#showMap').attr('data-ajax-googleMapAPI-getMap-path');
	$.ajax({
		url: path,
	})
	.done(showMap);
}

function showMap(response){

	var mapCenter = new google.maps.LatLng(response.Beauchamp.lat, response.Beauchamp.lng);
	var mapOptions = {
		zoom: 15,
		center: mapCenter
	}
	
	var mapBeauchamp = new google.maps.Map(document.getElementById("mapBeauchamp"), mapOptions);

	var marker = new google.maps.Marker({
											position: mapBeauchamp.getCenter(),
    										map: mapBeauchamp,
    										title: 'Centre'
   										});

}

$(window).on("load", initPage);