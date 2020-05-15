<?php 
include 'koneksi.php';
?>
<?php
$bulan= $koneksi->query("SELECT * FROM data GROUP BY id_nilai DESC LIMIT 1");
$waktu= $koneksi->query("SELECT * FROM data GROUP BY tanggalwaktu DESC LIMIT 1");
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<title>Admin | SIMPENIK</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

 <script src="fusioncharts/fusioncharts.js"></script>

<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>


<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
</head>
<body>

</body>
</html>
<div class="col-md-12">
<div class="row">
<div class="col-md-4">
<div class="card bg-dark text-white">
<h3 class="card-title text-center">
<div class="d-flex flex-wrap justify-content-center mt-2" style="font-size: 80px">
<a style="font-size: 75px"><span class="badge hours"></span></a> 
<a style="font-size: 75px"><span class="badge min"></span></a> 
<a style="font-size: 75px"><span class="badge sec"></span></a>
</div>
</h3>
</div>
</div>

<div class="col-md-4">
<div class="card text-white" style="background-color: #DC3545">
<h3 class="card-title text-center">
<div class="d-flex flex-wrap justify-content-center mt-2" style="font-size: 80px">
<a style="font-size: 77px"><span id="date" "></span></a> 
<a style="font-size: 77px"><span id="month"></span></a> 
</div>
</h3>
</div>
</div>

<div class="col-md-4">
<div class="card text-white" style="background-color: #28A745">
<h3 class="card-title text-center">
<div class="d-flex flex-wrap justify-content-center mt-2" style="font-size: 80px">
<a style="font-size: 77px"><span id="year" "></span></a>
</div>
</h3>
</div>
</div>

</div>
</div>
 <div class="col-md-12">

    
      <p></p>
      <div class="row">

      </div>
      <div class="card">
      <div class="col-md-12" style="padding: 10px 10px 10px 10px">
          <h2>Data Nilai Sensor TDS DFRobot</h2>
          <iframe width="440" height="260px" style="border: 5px solid #cccccc;" src="https://thingspeak.com/channels/1037617/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">  
          </iframe>
          <iframe width="420" height="260" style="border: 5px solid #cccccc;" src="https://thingspeak.com/channels/1037617/widgets/172741"></iframe>
          <iframe width="300" height="260" style="border: 5px solid #cccccc;" src="https://thingspeak.com/channels/1037617/widgets/172745"></iframe>
      </div></div>

      <div class="card">
      <div class="col-md-12" style="padding: 10px 10px 10px 10px">
        <h2>Data Nilai Sensor pH DFRobot</h2>
          <iframe width="440" height="260px" style="border: 5px solid #cccccc;" src="https://thingspeak.com/channels/1037617/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
          <iframe width="420" height="260" style="border: 5px solid #cccccc;" src="https://thingspeak.com/channels/1037617/widgets/172743"></iframe>
          <iframe width="300" height="260" style="border: 5px solid #cccccc;" src="https://thingspeak.com/channels/1037617/widgets/172746"></iframe>
           </div></div>

      <div class="card">
      <div class="col-md-12" style="padding: 10px 10px 10px 10px">
        <h2>Data Nilai Sensor Ultrasonik</h2>
          <iframe width="440" height="260px" style="border: 5px solid #cccccc;" src="https://thingspeak.com/channels/1037617/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
          <iframe width="420" height="260" style="border: 5px solid #cccccc;" src="https://thingspeak.com/channels/1037617/widgets/172744"></iframe>
          <iframe width="300" height="260" style="border: 5px solid #cccccc;" src="https://thingspeak.com/channels/1037617/widgets/172747"></iframe>
          </div></div>
          <!-- <iframe width="250" height="260px" style="border: 5px solid #cccccc;" src="https://thingspeak.com/channels/1037617/widgets/170946"></iframe>
          <iframe width="400" height="260" style="border: 5px solid #cccccc;" src="https://thingspeak.com/channels/1037617/widgets/171959"></iframe> -->
      
    </div>
  

<script>
  
</script>

<script>
var d = new Date();
document.getElementById("date").innerHTML = d.getDate();
</script>

<script>
var d = new Date();
var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
document.getElementById("month").innerHTML = months[d.getMonth()];
</script>

<script>
var d = new Date();
document.getElementById("year").innerHTML = d.getFullYear();
</script>

<script>
$(document).ready(function() {
setInterval( function() {
var hours = new Date().getHours();
$(".hours").html(( hours < 10 ? "0" : "" ) + hours);
}, 1000);
setInterval( function() {
var minutes = new Date().getMinutes();
$(".min").html(( minutes < 10 ? "0" : "" ) + minutes);
},1000);
setInterval( function() {
var seconds = new Date().getSeconds();
$(".sec").html(( seconds < 10 ? "0" : "" ) + seconds);
},1000);
});
</script>



