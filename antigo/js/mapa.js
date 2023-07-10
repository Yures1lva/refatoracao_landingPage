
function initMap() {
	const marcador = {lat: -5.50846, lng: -47.47349}
	
	const map = new google.maps.Map(document.getElementById("mapa"), {
  center: marcador,
  zoom: 18,
});

const marker = new google.maps.Marker({
position: marcador,
map: map,
});
}