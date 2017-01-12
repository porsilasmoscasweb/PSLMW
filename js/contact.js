
/*Global*/
var map;

function initialize() {

    /*    Basic Setup    */

    var latLng = new google.maps.LatLng(53.348114,-6.306711);

    var myOptions = {
        panControl: false,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false,
        draggable: true,
        disableDoubleClickZoom: true,     //disable zooming
        scrollwheel: false,
        zoom: 18,
        center: latLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP //   ROADMAP; SATELLITE; HYBRID; TERRAIN;
    };

    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    /*    MARKER    */

    /*
    //for custom image
    var image = 'yourflag.png';
    icon: image 

    //for animation marker drop
    animation: google.maps.Animation.DROP

    */
    var markerlatlng = new google.maps.LatLng(53.348114,-6.306711);

    var marker = new google.maps.Marker({
        position: markerlatlng,
        title:"PSLMW"
    });

    marker.setMap(map);

    /*    INFO Bubble    */

    myInfoWindowOptions = {
        content: '<div class="info-window-content"><h4><img src="img/logo/PSLMW-Full.png" width="80" style="margin:0 0 10px 60px;text-align:center;"/><br/>Emili Garriga<br/><i style="color:#666;">// Graphic Designer & Web & Motiongrapher //</i><br/>353 85 212 31 68<br/><a href="mailto:info@porsilasmoscasweb.com">info@porsilasmoscasweb.com</a><br/>75, Bridgewater Quay<br/>Dublin 8</h4></div>',
        maxWidth: 410
    };

    infoWindow = new google.maps.InfoWindow(myInfoWindowOptions);

    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.open(map,marker);
    });

    google.maps.event.addListener(marker, 'dragstart', function(){
        infoWindow.close();
    });

    infoWindow.open(map,marker);


}//end initialize


/*onLoad*/

$(function(){
    initialize();

    $("#zo").click(function(event){
        event.preventDefault(); 
        map.setZoom( map.getZoom()-1 );
        //map.setCenter(new google.maps.LatLng(53.348114,-6.306711));
    });

    $("#zi").click(function(event){
        event.preventDefault(); 
        map.setZoom( map.getZoom()+1 );
    });

    $("#gt").click(function(event){
        event.preventDefault(); 
        var lt1 = new google.maps.LatLng(53.348114,-6.306711);
        //map.setZoom( 16 );
        map.panTo(lt2);
    });

});
