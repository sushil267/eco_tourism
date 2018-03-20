<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Rajasthan.gov</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">
<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  <!-- For date picker-->

<style>
                /*-- booking --*/
.booking{
	padding: 0.5em 0 0 0;
}
.booking-info h3{
	text-align: center;
	font-size: 30px;
	margin: 0 0 1em 0;
	color: #323232;
	text-transform: uppercase;
}
/* start booking_room */
.booking-form{
	padding: 0 0 2em 0;
}
.booking_room h4{
	font-size: 1.5em;
	color: #202020;
	text-transform: capitalize;
	font-weight: 600;
	margin-bottom: 10px;
}
.booking_room p{
	font-size: 0.8725em;
	color: #6b6b6b;
	line-height: 1.8em;
}
.reservation{
	padding: 16px 10px 32px 0;
	background: #719BD3;
}
.reservation ul {
	padding: 0;
	margin: 0;
}
.reservation ul li{
	float: left;
	list-style:none;
}
.reservation ul li.left{
	margin-left: 15px;
}
.reservation ul li.span1_of_1{
	width: 24.33333%;
	margin-left: 5.5em;
}
.reservation ul li.span1_of_2{
	width: 9.33333%;
}
.reservation ul li.span1_of_3{
	width: 13.33333%;
	margin-left: 5.5em;
}
.reservation h5{
	font-size: 18px;
	color: #FFD700;
	text-transform: capitalize;
	margin-bottom: 6px;
}
select {
	width: 100%;
	color: #9F9F9F!important;
	font-size: 14px!important;
	padding: 8px 10px;
	outline: none;
	font-family: 'Open Sans', sans-serif;
	background: #ffffff;
	border: 1px solid #DFDFDF;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
}
select option{
	border: 1px solid #DFDFDF;
	outline: none;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
.book_date input[type="text"]{
	width: 100% !important;
	color: #9F9F9F;
	font-size: 14px;
	padding: 8px 23px;
	outline: none;
	border: none;
	-webkit-appearance: none;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
}
.date{
	background:url(../images/icon.png) no-repeat 3% 50% #FFF;
}
.date_btn{
	margin:37px 0 0 0px;
}
.date_btn form input[type="submit"] {
	text-transform:capitalize;
	width: 90% !important;
	background: #FFD700;
	color: #2A2E33;
	padding: 8px 10px;
	border: none;
	font-size: 16px;
	outline: none;
	font-weight:600;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
}
.date_btn form input[type="submit"]:hover{
	background: #00CCFF;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
}
.booking-grids h3{
	font-size: 18px;
	margin: 0;
	color: #323232;
	font-weight: 600;
}
.booking-grid-left{
	padding: 0!important;
	margin-top: 2em;
}
.booking-grid-left h4{
	font-size: 16px;
	margin: 0;
	line-height: 1.7em;
	color: #616060;
	font-weight: 500;
}
.booking-grid-left p{
	color: #8c8c8c;
	font-size: 14px;
	line-height: 1.7em;
	margin: 1em 0 0 0;
}
.booking-grid-right img{
	width:100%;
}
.red{
	text-align: left;
	margin-top: 2em;
}
.red a{
	padding: .8em 1em;
	font-size: 16px;
}
</style>
</head>


<body>
<?php
$destination=$_REQUEST['q'];
?>


<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li class="small-logo"><a href="#header"><img src="img/pmd1.png" alt=""></a></li>
            <li><a href="#Portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->

<section class="main-section" id="service"><!--main-section-start-->
        <div class="container">
            <h2 class="secHead">Booking!</h2>
        <ul class="nav nav-tabs" id="problem">
          <li class="active"><a data-toggle="tab" class="btn-primary" style="margin-top: 10px;" href="#home">Train</a></li>
          <li><a data-toggle="tab" class="btn-primary" style="margin-top: 10px;" href="#menu1">Flight</a></li>
          <li><a data-toggle="tab" href="#menu2" class="btn-primary" style="margin-top: 10px;">Hotels</a></li>
        </ul>
        
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            	<div class="row">
                	<!-- booking -->
        		<div class="booking">
        			<!-- container -->
        			<div class="container">
        				<div class="booking-form">
        					<div class="online_reservation">
        							<div class="b_room">
        								<div class="booking_room">
        									<div class="reservation">
        									      <div class="row">		 
                                                         <div class="form-group col-md-6">
                                                            <form>
        											          <label for="name">From</label>
                                                              <div id="locationField" class="form-group">
                                                                <input id="autocomplete" class="form-control source" placeholder="Enter the City here.." onfocus="geolocate()" type="text" name="place"/>
                                                              </div>
                                                                 <table id="address" style="display: none;">
                                                                  <tr>
                                                                    <td class="label">Street address</td>
                                                                    <td class="slimField"><input class="field" id="street_number" name="street" disabled="true"></td>
                                                                    <td class="wideField" colspan="2"><input class="field" id="route" name="street" disabled="true"></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td class="label">City</td><td class="wideField" colspan="3"><input class="field" id="locality" name="city" disabled="true"></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td class="label">State</td>
                                                                    <td class="slimField"><input type="text" class="field" id="administrative_area_level_1" disabled="true" name="state"></td>
                                                                    <td class="label">Zip code</td>
                                                                    <td class="wideField"><input class="field" id="postal_code" name="zip_code" disabled="true"></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td class="label">Country</td>
                                                                    <td class="wideField" colspan="3"><input class="field" id="country" disabled="true"></input></td>
                                                                  </tr>
                                                                </table>
                                                             
                                                             </form>
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label for="name">To</label>
                                                            <form>
        													   <input type="text" class="form-control" placeholder="Type Destination City" required="" value="<?php echo $destination;?>">
        												    </form>
        												  </div>
                                                    </div>		
        											<div class="row"> 
                                                         <div class="form-group col-md-6">
                                                                <label for="name">Arrival</label>
                                                                <form>
            													   <input class="form-control b_date" id="datepicker" type="text" required="" >
            													 </form>
         												  </div>
                                                          <div class="form-group col-md-6">
                                                                <label for="name">Departure</label>
                                                                <form>
            														<input class="form-control" id="r_date" type="date" required="" >
        												         </form>
         												  </div>  
       											  </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-lg-4"></div>
                                                    <div class="col-md-4 col-lg-4">
                                                        <input type="submit" class=" btn btn-primary" id="sub_train" value="Find Train" />  
        										      </div>
                                                    <div class="col-md-4 col-lg-4"></div>
                                                </div>
                    					</div>
                                    </div>
                    			</div>
                    		</div>
                    	</div>
                     </div>          
                </div>
           </div>
        </div>
          <div id="menu1" class="tab-pane fade">
            <div class="row">
                	<!-- booking -->
        		<div class="booking">
        			<!-- container -->
        			<div class="container">
        				<div class="booking-form">
        					<div class="online_reservation">
        							<div class="b_room">
        								<div class="booking_room">
        									<div class="reservation">
        										<ul>		
        											<li  class="span1_of_1 left">
        												 <h5>From</h5>
        												 <div class="book_date">
        													 <form>
        											             <div id="locationField" class="form-group">
                                                                   <input id="autocomplete" class="form-control source" placeholder="Enter the City here.." onfocus="geolocate()" type="text" name="place"/>
                                                                  </div>
                                                                    
                                                                <table id="address" style="display: none;">
                                                                  <tr>
                                                                    <td class="label">Street address</td>
                                                                    <td class="slimField"><input class="field" id="street_number" name="street" disabled="true"></td>
                                                                    <td class="wideField" colspan="2"><input class="field" id="route" name="street" disabled="true"></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td class="label">City</td><td class="wideField" colspan="3"><input class="field" id="locality" name="city" disabled="true"></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td class="label">State</td>
                                                                    <td class="slimField"><input type="text" class="field" id="administrative_area_level_1" disabled="true" name="state"></td>
                                                                    <td class="label">Zip code</td>
                                                                    <td class="wideField"><input class="field" id="postal_code" name="zip_code" disabled="true"></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td class="label">Country</td>
                                                                    <td class="wideField" colspan="3"><input class="field" id="country" disabled="true"></input></td>
                                                                  </tr>
                                                                </table>
                                                             
                                                             </form>
        												 </div>					
        											 </li>
        											 <li  class="span1_of_1 left">
        												 <h5>To</h5>
        												 <div class="book_date">
        												 <form>
        													<input type="text" placeholder="Type Destination City" required="" value="<?php echo $destination;?>">
        												 </form>
        												 </div>		
        											 </li>
        											 <li  class="span1_of_1 left">
        												 <h5>Arrival</h5>
        												 <div class="book_date">
        													 <form>
        													 <input class="form-control b_date" id="datepicker" type="text" required="" >
        													 </form>
        												 </div>					
        											 </li>
        											 <li  class="span1_of_1 left">
        												 <h5>Depature</h5>
        												 <div class="book_date">
        												 <form>
        													<input class="form-control" id="r_date" type="date" required="" >
        												 </form>
        												 </div>		
        											 </li>
        											 <li class="span1_of_1">
        												 <h5>Class</h5>
        												 <!----------start section_room----------->
        												 <div class="section_room">
        													  <select id="country" onchange="change_country(this.value)" class="frm-field required">
        															<option value="null">Economy</option>
        															<option value="null">Business</option>         
        															<option value="AX">First Class</option>
        															<option value="AX">Premium Economy</option>
        													  </select>
        												 </div>	
        											 </li>
        											 <li class="span1_of_3">
        													<div class="date_btn">
        															<input type="submit" id="sub_train" value="Find Train" />  
        													</div>
        											 </li>
        											 <div class="clearfix"></div>
        										</ul>
        									 </div>
        								</div>
        							</div>
        					</div>
                        </div>
        			</div>
        		</div>
        	</div>          
          </div>
          <div id="menu2" class="tab-pane fade">
          </div>
        </div>
</section><!--main-section-end-->
<script>
 $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' });
  } );
var s,destination;
$("#sub_flight").click(function(){
    s=$("#locality").val();
    destination="<?php echo $destination;?>";
    console.log(s);
    console.log(destination);
})


$("#sub_train").click(function(){
    s=$("#locality").val();
    destination="<?php echo $destination;?>";
    //console.log(s);
    //console.log(destination);
    s_code=getcode(s);
    d_code=getcode(destination);
    var t=$(".b_date").val();
    
    train_bwt_station(d_code,s_code,t);
    console.log(t);
});

function getcode(ct)
{
    var res;
    
    $.ajax({
        url:"https://api.railwayapi.com/v2/name-to-code/station/"+ct+"/apikey/2cici29dea/",
        dataType:"json",
        async:false,
        success:function(response){
          res = response;
        },
    }); 
   console.log(res);
   var code;
   ct=ct.toUpperCase(ct);
   for (let o of res.stations) {
        if(o.name.includes(ct)){
            code = o.code;
            break;
        }
  
}
console.log(code);
return code;
    
}

function train_bwt_station(d,s,t)
{   //console.log("https://api.railwayapi.com/v2/between/source/"+s+"/dest/"+d+"/date/"+t+"/apikey/2cici29dea/");
    var res1;
    $.ajax({
       url:"https://api.railwayapi.com/v2/between/source/"+s+"/dest/"+d+"/date/"+t+"/apikey/2cici29dea/", 
       dataType:"json",
       async:false,
        success:function(response){
          res1 = response;
          //console.log(response)
        },
    });
    console.log(res1);
    $('#train_data').empty();
    for(var i=0;i<res1.trains.length;i++)
    {
        $('#train_data').append('<tr><td>'+res1.trains[i].number+'</td><td>'+res1.trains[i].name+'</td><td>'+res1.trains[i].dest_arrival_time+'</td><td>'+res1.trains[i].src_departure_time+'</td><td>'+res1.trains[i].travel_time
+'</td></tr>')
    }
}

</script>
<div id="train_list" style="display:;">
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Train No.</th>
            <th>Train Name</th>
            <th>Arrival Time</th>
            <th>Departure Time</th>
            <th>Travel Time</th>
          </tr>
        </thead>
        <tbody id="train_data">
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
</div>

<section class="main-section alabaster"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
            	<img  src="img/iphone.png" alt="">
            </figure>
        	<div class="col-lg-7 col-sm-8 featured-work">
            	<h2>featured News</h2>
            	<P class="padding-b">here are some new York times articles with the city news.. </P>
            	<div class="featured-box" id="pitchers">
                <ul  class="featured"></ul>
                	
                </div>
                <a class="Learn-More" href="#">Learn More</a>
            </div>
        </div>
	</div>
</section><!--main-section alabaster-end-->

<section class="main-section alabaster"><!--main-section alabaster-start-->
    <div class="container">
        <div class="row">
        <div class="col-lg-7 col-sm-8 featured-work">
                <h2>Wiki Links </h2>
                <P class="padding-b">here are some wiki articles about the city.. </P>
                <div class="featured-box" id="pitchers">
                <ul  class="feature3"></ul>
                    
                </div>
                <a class="Learn-More" href="#">Learn More</a>
            </div>
            <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                <img  src="img/iphone.png" alt="">
            </figure>
            
        </div>
    </div>
</section>

<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	<h2>Portfolio</h2>
    	<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
      <div class="portfolioFilter">  
        <ul class="Portfolio-nav wow fadeIn delay-02s">
        	<li><a href="#" data-filter="*" class="current" >All</a></li>
            <li><a href="#" data-filter=".branding" >Branding</a></li>
            <li><a href="#" data-filter=".webdesign" >Web design</a></li>
            <li><a href="#" data-filter=".printdesign" >Print design</a></li>
            <li><a href="#" data-filter=".photography" >Photography</a></li>
        </ul>
       </div> 
        
	</div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
            	<div class="Portfolio-box printdesign">
                	<a href="#hidden-section"><img src="img/bar.jpg" alt="" id="bar"></a>
                	<h3>Foto Album</h3>
                    <p>Print Design</p>
                </div>
                <div class="Portfolio-box webdesign">
                	<a href="#hidden-section"><img src="img/cafe.jpg" alt="" id="cafe"></a>	
                	<h3>Luca Theme</h3>
                    <p>Web Design</p>
                </div>
                <div class=" Portfolio-box branding">
                	<a href="#hidden-section"><img src="img/w-hotels-logo.png" alt="" id="hotels"></a>	
                	<h3>Uni Sans</h3>
                    <p>Branding</p>
                </div>
                <div class=" Portfolio-box photography" >
                	<a href="#hidden-section"><img src="img/restaurant.jpg" alt="" id="restraunt"></a>	
                	<h3>Vinyl Record</h3>
                    <p>Photography</p>
                </div>
                <div class=" Portfolio-box branding">
                	<a href="#hidden-section"><img src="img/attractions.png" alt="" id="attractions"></a>	
                	<h3>Hipster</h3>
                    <p>Branding</p>
                </div>
                <div class="search1">
                	<a href="#hidden-section"><img src="img/Portfolio-pic6.jpg" alt="" id="search"></a>	
                	<h3>Windmills</h3>
                    <p>Photography</p>

                </div>
    </div>
</section><!--main-section-end-->
<section id="hidden-section">
<div class="container">
<div class="row">
    <div id="maps5" style="height:500px"></div></div></div>
</section>
<br><br><br>

<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Let’s Talk Business.</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
	
        <div class="row">
        	<div class="col-lg-6 col-sm-7 wow fadeInLeft">
            	<div class="contact-info-box address clearfix">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>1-800-BOO-YAHH</span>
                </div>
                <div class="contact-info-box email clearfix">
                	<h3><i class="fa-pencil"></i>email:</h3>
                	<span>hello@knightstudios.com</span>
                </div>
            	<div class="contact-info-box hours clearfix">
                	<h3><i class="fa-clock-o"></i>Hours:</h3>
                	<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
                <ul class="social-link">
                	<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul>
            </div>
        	<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
            	<div class="form">
                	<input class="input-text" type="text" name="" value="Your Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="" value="Your E-mail *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                	<textarea class="input-text text-area" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                    <input class="input-btn" type="submit" value="send message">
                </div>	
            </div>
        </div>
</section>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
        <span class="copyright">Copyright © 2015 | <a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste</span>
    </div>
</footer>




<script>
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };
    var cityLat;
    var cityLong;
    var place;
      function initAutocomplete() 
      {
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});
        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        place = autocomplete.getPlace();
        //console.log('test');
        //console.log(place);
        
        //console.log(place.address_components.length);
        
        for (var component in componentForm) 
        {
            //console.log(component);
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }
       
        
        
        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) 
        {
          var addressType = place.address_components[i].types[0];
          //console.log(addressType);
          if (componentForm[addressType]) 
          {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
            //console.log(val);
          }
        }
        //console.log(country);
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            cityLat = position.coords.latitude;
            cityLong = position.coords.longitude;
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBPusPjTEw5ATIXzHH4IwVE72w4xspQYE&libraries=places&callback=initAutocomplete" async defer></script>
    







<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
 
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>


<script type="text/javascript" src="js/script.js"></script>
</body>
</html>