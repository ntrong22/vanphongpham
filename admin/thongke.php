<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/helpers.esm.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<body>

<div id="text" style="margin-left: 200px;font-size: 30px;"> Báo Cáo Thống Kê 2021</div>
<div id="thongke1"  style="margin-top:50px;">
	

		<canvas id="myChart1" style="width:100%;max-width:600px;height: 300px;"></canvas>

		<script>
			var xValues = ['Tháng 1','Tháng 2','Tháng 3','Tháng 4','Tháng 5','Tháng 6','Tháng 7'];
			var yValues = [10, 20, 25, 30, 20, 25, 20];
			var barColors = ['rgb(0, 156, 123)'];

			new Chart("myChart1", {
			  type: "line",
			  data: {
			    labels: xValues,
			    datasets: [{
			      backgroundColor: barColors,
			      data: yValues
			    }]
			  },
			  options: {
			    legend: {display: false},
			    title: {
			      display: true,
			      text: "Báo Cáo Thống Kê 2021"
			    }
			  }
			});

		</script>
</div>

<div id="thongke1" style="margin-top: 50px;" >
	

		<canvas id="myChart" style="width:100%;max-width:600px;height: 300px;"></canvas>

		<script>
			var xValues = ["Quý I", "Quý II", "Quý III", "Quý IV",];
			var yValues = [20, 25, 26, 20, 18];
			var barColors = [
							'rgb(159, 218, 159)',
							'rgb(159, 206, 218)',
							'rgb( 218, 171, 159)',
							'rgb(218, 159, 206)',

							];

			new Chart("myChart", {
			  type: "bar",
			  data: {
			    labels: xValues,
			    datasets: [{
			      backgroundColor: barColors,
			      data: yValues
			    }]
			  },
			  options: {
			    legend: {display: false},
			    title: {
			      display: true,
			      text: "Báo Cáo Thống Kê 2021"
			    }
			  }
			});

		</script>
</div>
	

	



</body>
</html>
