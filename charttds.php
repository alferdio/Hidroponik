<?php 
include 'koneksi.php';
?>
<?php
$bulan= $koneksi->query("SELECT * FROM data GROUP BY id_nilai DESC LIMIT 100");
$waktu= $koneksi->query("SELECT * FROM data GROUP BY tanggalwaktu DESC LIMIT 100");
?>
<!DOCTYPE html>
<html>
<head>
	<title>coba chart</title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
</head>
<body>
	 <div class="col-md-12">
    <div class="card">
      <p></p>
	<h2></h2>
 
	<div style="width: 1200px;height: 600px">
		<canvas id="myChart"></canvas>
	</div>
 
	<script>
	const ctx = document.getElementById("myChart").getContext('2d');
	const myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: [<?php while ($b = mysqli_fetch_array($waktu)) { echo '"' . $b['tanggalwaktu'] . '",';}?>],
			datasets: [{
				label: 'Pemantauan Sensor TDS DFRobot',
				data: [ <?php while ($p = mysqli_fetch_array($bulan)) { echo '"' . $p['nilai_tds'] . '",';}?>],
				
				backgroundColor: ['rgba(0, 0, 255, 0.3)'],
				borderColor:['rgba(0, 0, 255, 0.3)'],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

	getData()

	async function getData() {
		// body...
	}
</script>
</div>
</div>
</body>
</html>