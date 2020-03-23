      <?php
include 'koneksi.php';
include 'rata_ds10.php';
?>
       <script src="assets/lib/chartjs/Chart.min.js" type="text/javascript"></script>
    <script src="assets/js/app-charts-chartjs.js" type="text/javascript"></script>
        <div class="page-head">
          <h2 class="page-head-title">Grafik</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Grafik</a></li>
            <li class="active">Delivery and Support 10
</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
<div class="row">
            <div class="col-md-8">
              <div class="panel">
                <div class="panel-heading panel-heading-divider">Grafik Tingkat Kematangan Subdomain DS 10<span class="panel-subtitle">Grafik Tingkat Kematangan yang di peroleh dari hasil perhitungan kuesioner</span></div>
                <div class="panel-body">
                  <canvas id="myChart" width="650" height="300"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Tingkat Kematangan DS 10
                  <span class="panel-subtitle">Hasil Perhitungan Subdomain DS 10</span>
                </div>
                <div class="panel-body">
                 <table class="table table-condensed table-hover table-bordered table-striped" width="">
                    <thead>
      <tr >
      <th >
      Sub Domain
      </th>
      <th>
      As-Is
      </th>
            <th>
      To-Be
      </th>
                  <th>
      Gap
      </th>
      </tr>
      </thead>
      <tbody>
      
       <?php
            

      
      
      echo "<tr><td>DS 10.1</td><td>".round($rata2_ds101,0)."</td><td>5</td><td>".round(5-$rata2_ds101,0)."</td></tr>";
      echo "<tr><td>DS 10.2</td><td>".round($rata2_ds102,0)."</td><td>5</td><td>".round(5-$rata2_ds102,0)."</td></tr>";
      echo "<tr><td>DS 10.3</td><td>".round($rata2_ds103,0)."</td><td>5</td><td>".round(5-$rata2_ds103,0)."</td></tr>";
      echo "<tr><td>DS 10.4</td><td>".round($rata2_ds104,0)."</td><td>5</td><td>".round(5-$rata2_ds104,0)."</td></tr>";

      ?>
      </tbody>
                  </table>
                </div>
              </div>
            </div>

  </div>
  </div>
        <script>
            var ctx = document.getElementById("myChart");
            var options = {
    scale: {
        ticks: {
                   beginAtZero: true,
        max: 5,
        min: 0,
        stepSize: 1
        }
    }
};
            var marksData = {
  labels: ["DS10.1", "DS10.2", "DS10.3", "DS10.4"],
  datasets: [{
    label: "As-Is",
    backgroundColor: 'rgba(255, 99, 132, 0.2)',
    borderColor: 'rgba(255, 99, 132, 0.2)',
    data: [<?php       echo round($rata2_ds101,0).", ";
      echo round($rata2_ds102,0).", ";
      echo round($rata2_ds103,0).", ";
      echo round($rata2_ds104,0);
                           ?>]
  }, {
    label: "To-Be",
    backgroundColor: 'rgba(54, 162, 235, 0.2)',
    data: [5.0,5.0,5.0,5.0]
  }]
};
            var myChart = new Chart(ctx, {
                type: 'radar',
                data: marksData,
                options: options
            });
        </script>