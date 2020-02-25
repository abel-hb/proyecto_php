function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(37.6000000,-4.5000000),
      zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}