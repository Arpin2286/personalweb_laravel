function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat: -8.079046977592881, lng: 115.16876140167746};  

    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 17,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'North Bali, INA' // Title Location
    });
}