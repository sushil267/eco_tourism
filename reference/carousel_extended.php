<?php

$city = $_REQUEST['q'];
$lat = $_REQUEST['lat'];
$long = $_REQUEST['lng'];





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Carousel Extended - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .span2{
            padding-top: 15px;
        }
        .item{
            height: 400px;
        }
        .modal-body {
    height:400px; 
    overflow-y: auto;
}
    </style>
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script>


    	   function initialize() {
       
       }
      $(window).load(function() {
  $('.post-module').hover(function() {
    $(this).find('.description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);
  });
});
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;

      function initMap() {
        // Create the map.
        var pyrmont = {lat:<?php echo $lat; ?> , lng: <?php echo $long; ?>};
        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 17
        });

         var request = {
    location: pyrmont,
    radius: '500',
    query: 'attractions'
  };

  service = new google.maps.places.PlacesService(map);
  service.textSearch(request, callback);
      }
function createMarker(place) {

    new google.maps.Marker({
        position: place.geometry.location,
        map: map
    });
}
    function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
  	//
    var j=0;
    for (var i = 0; i < results.length; i++) 
    {
      window.place = results[i];
      //console.log(place);
      //console.log(j);
      
      var pics = place.photos;
      if(pics && place.rating>4 && place.rating!=5 && place.opening_hours )
      {
      //$('.car').append('<div class="column" data-toggle="modal" data-target="#myModal"><div class="demo-title"></div><div class="post-module"><div class="thumbnail"><div class="date"><div class="day">27</div><div class="month">Mar</div></div><img class="thumb" onclick="test(place.geometry.location.lat(),place.geometry.location.lng())" src="'+pics[0].getUrl({'maxWidth':5000,'maxHeight':5000})+'"/></div><div class="post-content"><div class="category">Photos</div><h1 class="title">'+place.name+'</h1><h2 class="sub_title">'+place.formatted_address+'</h2><p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p><div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i>Open Now:'+place.opening_hours.open_now+' </span><span class="comments"><i class="fa fa-comments"></i><a href="#">Rating :'+place.rating+'</a></span><span id="lat" style="display:none">'+place.geometry.location.lat()+'</span><span id="long" style="display:none">'+place.geometry.location.lng()+'</span</div></div></div></div>');
    
        $('.carousel-inner').append(' <div class="item" data-slide-number="'+j+'"><img src="'+pics[0].getUrl({'maxWidth':5000,'maxHeight':5000})+'"></div>');
                                
            $('#slide-content').append('<div id="slide-content-'+j+'">'+
                '<h2>'+place.name+'</h2>'+
                '<p> Address : '+place.formatted_address+'</p>'+
                '<p class="sub-text"><span class="timestamp"><i class="fa fa-clock-"></i>Open Now:'+place.opening_hours.open_now+' </span><br><span class="comments"><i class="fa fa-comments"></i><a href="#">Rating :'+place.rating+'</a></span></p><br><button type="button"  class="full_view btn btn-primary" name='+place.geometry.location.lat()+' value='+place.geometry.location.lng()+'><i class="fa fa-street-view"></i>&nbsp;&nbsp;Street View</button></div>');
                
            $('.thumbnails').append(' <li class="span2" style="height:50px;">'+
           '<a class="thumbnail" id="carousel-selector-'+j+'"><img height="50px" src="'+pics[0].getUrl({'maxWidth':190,'maxHeight':70})+'"></a></li>');
           j+=1;
     }
           
     
     // else{
     // 	$('.car').append('<div class="column" data-toggle="modal" data-target="#myModal"><div class="demo-title"></div><div class="post-module"><div class="thumbnail"><div class="date"><div class="day">27</div><div class="month">Mar</div></div><img class="thumb" onclick="test(place.geometry.location.lat(),place.geometry.location.lng())" src="http://bit.ly/2vcsBpW"/></div><div class="post-content"><div class="category">Photos</div><h1 class="title">'+place.name+'</h1><h2 class="sub_title">'+place.formatted_address+'</h2><p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p><div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i>Open Now: </span><span class="comments"><i class="fa fa-comments"></i><a href="#">Rating :'+place.rating+'</a></span><span id="lat" style="display:none" >'+place.geometry.location.lat()+'</span><span id="long" style="display:none">'+place.geometry.location.lng()+'</span</div></div></div></div>');
     // }
    }
  }
}
    </script>
</head>
<body>
<div id="map" style="display: none"></div>
  	<div class="container car">
         
        </div>
  


  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXdLBd_7gZTK2rD2Z7F21XvjM8bIjFyXA&libraries=places&callback=initMap" async="false" defer="false"></script>
       <script type="text/javascript">
  	function test(a,b){
  	 console.log(b);
  	}
    
    
    $(".car").on("click", ".column", function(){
        window.v = this;
    var long1 = v.children[1].children[1].children[4].children[3].innerText;
    var lat1 = v.children[1].children[1].children[4].children[2].innerText;

          var fenway = {lat: parseFloat(lat1), lng: parseFloat(long1)};
    console.log(fenway);

        var map = new google.maps.Map(document.getElementById('map'), {
           center: fenway,
           zoom: 14
         });

         var panorama = new google.maps.StreetViewPanorama(
             document.getElementById('pano'), {
               position: fenway,
               pov: {
              heading: 34,
                pitch: 10
              }
            });
         console.log(panorama);
         map.setStreetView(panorama);

       
    
});
  </script>
  



<div class="container">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="span12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="span8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                      
                                    </div><!-- Carousel nav -->
                                    <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a>
                                </div>
                            </div>

                            <div class="span4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                           
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-phone" id="slider-thumbs">
                    <div class="span12">
                        <!-- Bottom switcher of slider -->

                        <ul class="thumbnails" >
                          
                        </ul>
                    </div>
                </div>
        </div>
</div>

<script type="text/javascript">
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('.thumbnails').on('click',".thumbnail",function(){
            var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                console.log(id);
                console.log("test");
                $('#myCarousel').carousel(id);
        });
 
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) 
        {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});



    $("#carousel-text").on("click", ".full_view", function(){
        console.log("this");
        window.v = this;
         var long1 = v.getAttribute('value');
    var lat1 = v.getAttribute('name');

          var fenway = {lat: parseFloat(lat1), lng: parseFloat(long1)};
    console.log(fenway);

        var map = new google.maps.Map(document.getElementById('map'), {
           center: fenway,
           zoom: 14
         });

         var panorama = new google.maps.StreetViewPanorama(
             document.getElementById('pano'), {
               position: fenway,
               pov: {
              heading: 34,
                pitch: 10
              }
            });
         console.log(panorama);
         map.setStreetView(panorama);

        $('#myModal').modal('toggle');
    
    
});
</script>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">360* view</h4>
        </div>
        <div class="modal-body" id="pano">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</body>
</html>
