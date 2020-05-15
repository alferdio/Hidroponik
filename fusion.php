<?php
    /* Include the ../src/fusioncharts.php file that contains functions to embed the charts.*/
    include("fusioncharts.php");
?>
<html>
    <head>
        <title>FusionCharts | My First Widget</title>

        // Include FusionCharts core file
        <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>

        // Include FusionCharts Theme File
        <script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    </head>
    <body>


<center>
<div id="chart-container"></div>
</center>
</body>
</html>
<script>
	const dataSource = {
  chart: {
    caption: "Nordstorm's Customer Satisfaction Score for 2017",
    lowerlimit: "0",
    upperlimit: "100",
    showvalue: "1",
    numbersuffix: "%",
    theme: "candy",
    showtooltip: "0"
  },
  colorrange: {
    color: [
      {
        minvalue: "0",
        maxvalue: "50",
        code: "#F2726F"
      },
      {
        minvalue: "50",
        maxvalue: "75",
        code: "#FFC533"
      },
      {
        minvalue: "75",
        maxvalue: "100",
        code: "#62B58F"
      }
    ]
  },
  dials: {
    dial: [
      {
        value: "81"
      }
    ]
  }
};

FusionCharts.ready(function() {
  var myChart = new FusionCharts({
    type: "angulargauge",
    renderAt: "chart-container",
    width: "100%",
    height: "100%",
    dataFormat: "json",
    dataSource
  }).render();
});
</script>