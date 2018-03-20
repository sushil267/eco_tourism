<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<div id="train_list" style="display:;">
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Travler_name</th>
            <th>Bus Name</th>
           <th>Departure Time</th>
             <th>Arrival Time</th>
            <th>Travel Time</th>
            <th>Base fare</th>
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

<script>
	var city_src='jaipur';
	var dest_city='pushkar';
	var dot=20180322;
	var bus_data;
$.ajax({
       
        url:"http://developer.goibibo.com/api/bus/search/?app_id=3e749b40&app_key=5b13b209db122a4b31eb7153eaca8dfe&format=json&source="+city_src+"&destination="+dest_city+"&dateofdeparture="+dot,
        async:false,
        success:function(response){
          bus_data =response.data.onwardflights;
        },    
      }); 
for(var i=0;i<bus_data.length;i++)
 $('#train_data').append('<tr><td>'+bus_data[i].TravelsName+'</td><td>'+bus_data[i].BusType+'</td><td>'+bus_data[i].DepartureTime+'</td><td>'+bus_data[i].ArrivalTime+'</td><td>'+bus_data[i].duration
+'</td><td>'+bus_data[i].fare.totalfare+'</td></tr>')




</script>