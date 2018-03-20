
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
<link rel='stylesheet prefetch' href='http://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css'>
<link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin-ext" rel="stylesheet"/>
<link rel="stylesheet" href="style.css">

</head>
<body>
<ul id="hotels"></ul>
<section class="testimonials">
  <div class="container">

      <div class="row">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">
            <!--TESTIMONIAL here -->
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>

    <script  src="index.js"></script>
<!DOCTYPE html>

<meta charset="UTF-8">
<script src="jquery.js"></script>





<script integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script>
      var array_data=new Array(3);
var urlParams = new URLSearchParams(window.location.search);
var keys = urlParams.keys();
for(key of keys) { 
  console.log(key); 
}
// post
// action
var j=0;
var entries = urlParams.entries();
for(pair of entries) { 
  array_data[j++]=pair[1];
}
    var hotel_data;
    var city_name=array_data[0];

    var city_id;
  $.ajax({
                type:'POST',
                url:'city2citycode.php',
                data:'city_name='+city_name,
                async:false,
                success:function(response){
                city_id=response;
         },
         }); 
   

var check_in=array_data[1];

var data_hotel_price;
$.ajax({
       
        url:"http://developer.goibibo.com/api/voyager/get_hotels_by_cityid/?app_id=2efd4c45&app_key=dfcb0f644e9b3806793b7967c0fe7ca1&city_id="+city_id,
        async:false,
        success:function(response){
          hotel_data =response;

        },    
      }); 


$.ajax({
 
       
        url:"https://developer.goibibo.com/api/cyclone/?app_id=2efd4c45&app_key=dfcb0f644e9b3806793b7967c0fe7ca1&city_id="+city_id+"&check_in="+check_in+"&check_out=",
        async:false,
        success:function(response){
          data_hotel_price=response;

          console.log(response.data);

        },    
      }); 
   for(i in hotel_data.data)
   {   if(data_hotel_price.data[i])
    { 
    var location_hotel=hotel_data.data[i].hotel_data_node.loc;
    
      $("#customers-testimonials").append("<div class='item'><div class='shadow-effect'><img class='img-square' height='100px' width='100px' src="+hotel_data.data[i].hotel_data_node.img_selected.srp.l+" alt=''><p>"+"Hotel&nbsp;&nbsp"+hotel_data.data[i].hotel_data_node.name+"</p>"+location_hotel.vendor_location+",&nbsp;&nbsp;"+location_hotel.city+"-"+location_hotel.pin+"&nbsp;&nbsp;("+location_hotel.state+")"+"<br/><br/><p class='text-center'><button class='btn-default'>&#8377;&nbsp;"+data_hotel_price.data[i].op+"</button></p></div>");

    }}

</script>



</html>

