  <?php
include 'koneksi.php';
include 'rata_ds1.php';
include 'rata_ds5.php';
include 'rata_ds10.php';
  ?>

        <script src="assets/lib/chartjs/Chart.min.js" type="text/javascript"></script>
    <script src="assets/js/app-charts-chartjs.js" type="text/javascript"></script>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="widget widget-tile">
                          <div id="spark1" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Domain</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="3" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="widget widget-tile">
                          <div id="spark2" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Responden</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="101" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="widget widget-tile">
                          <div id="spark3" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Pertanyaan</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="126" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="widget widget-fullwidth be-loading">
                <div class="widget-head">
                  
                  <span class="title ">Grafik Tingkat Kematangan</span>
                </div>
                <div class="widget-chart-container">
  
                     <div class="widget-counter-group widget-counter-group-right">
                    <div class="counter counter-big">
                      <div class="value text-danger"><?php echo round($asis_ds1,0); ?></div>
                      <div class="desc">DS 1</div>
                    </div>
                    <div class="counter counter-big">
                      <div class="value text-primary"><?php echo round($asis_ds5,0); ?></div>
                      <div class="desc">DS 5</div>
                    </div>
                    <div class="counter counter-big">
                      <div class="value text-warning"><?php echo round($asis_ds10,0); ?></div>
                      <div class="desc">DS 11</div>
                    </div>
                                  <div class="widget-chart-info">
                            <canvas id="myChart" width="1000" height="350"></canvas>           
                  </div>
                  </div>
                  
                  
                </div>

                <div class="be-spinner">
              
                </div>
              </div>
            </div>
          </div>
           <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["DS1","DS5","DS11",],
                    datasets: [{
                            label: 'AS-IS',
                            data: [
              <?php echo round($asis_ds1,0); ?>,<?php echo round($asis_ds5,0); ?>,<?php echo round($asis_ds10,0); ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.9)',
                                'rgba(54, 162, 235, 0.9)',
                                'rgba(255, 206, 86, 0.9)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)'
                            ],
                            borderWidth: 1
                        },{
                            label: 'TO-BE',
                            data: [5,5,5],
                            
                            borderWidth: 1
                        }]
                },
        
                options: {
          responsive:false,
          legend: {
            display: false
         },
                    scales: {
                        yAxes: [{
                                ticks: {
                  suggestedMax: 5,
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script> 
          <div class="row">
                      <div class="col-md-6">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">
                  <div class="title">Maturity Level</div>
                </div>
                <div class="panel-body table-responsive">
<div id="accordion1" class="panel-group accordion ">
                <div class="panel ">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" class="collapsed"><i class="icon mdi mdi-chevron-down"></i> 0,00 – 0,50 / Level 0(Non-existent)</a></h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">Instansi sama sekali tidak ada kepedulian terhadap pentingnya teknologi untuk dikelola secara baik oleh manajemen </div>
                  </div>
                </div>
                <div class="panel panel">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" class="collapsed"><i class="icon mdi mdi-chevron-down"></i> 0,50 – 1,50 / Level 1(Initial Level)</a></h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">Instansi aktif melakukan penerapan dan implementasi teknologi informasi sesuai dengan kebutuhan bisnis, namun dilakukan tanpa melakukan perencanaan sebelumnya </div>
                  </div>
                </div>
                <div class="panel panel">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" class="collapsed"><i class="icon mdi mdi-chevron-down"></i> 1,51 – 2,50 / Level 2(Repeatable Level)</a></h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">Instansi memiliki pola yang rutin dilakukan dalam melakukan pengelolaan aktivitas terkait dengan tata kelola IT, namun belum didefinisikan dengan baik dan formal sehingga masih belum konsisten.</div>
                  </div>
                </div>
                                <div class="panel panel">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseFour" class="collapsed"><i class="icon mdi mdi-chevron-down"></i> 2,51 – 3,50 / Level 3(Defined Level)</a></h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">Instansi telah memiliki prosedur yang diformalkan dan tertulis yang telah disosialisasikan kesegenap jajaran manajemen dan karyawan untuk di patuhi dan dikerjakan dalam aktivitas sehari-hari</div>
                  </div>
                </div>
                                <div class="panel panel">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseFive" class="collapsed"><i class="icon mdi mdi-chevron-down"></i> 3,51 – 4,51 / Level 4(Managed Level)</a></h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">Instansi telah memiliki sejumlah indikator yang dijadikan sebagai tujuan maupun obyektif kinerja setiap penerapan sistem informasi yang ada.</div>
                  </div>
                </div>
                                <div class="panel panel">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseSix" class="collapsed"><i class="icon mdi mdi-chevron-down"></i> 4,51 – 5,00 / Level 5(Optimized Level)</a></h4>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body">Perusahaan telah menerapkan tata kelola teknologi informasi yang mengacu pada “best practice”.</div>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default panel-table">
                <div class="panel-heading"> 
                  
                  <div class="title">Hasil Perhitungan Maturity Level</div>
                </div>
                <div class="panel-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th style="width:40%;">Domain</th>
                        <th class="number">AS-IS</th>
                        <th class="number";">TO-BE</th>
                        <th class="number";">GAP</th>
                        
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td>DS 1</td>
                        <td class="number"><?php echo round($asis_ds1,0); ?></td>
                        <td class="number">5</td>
                        <td class="number"><?php echo 5 - round($asis_ds1,0); ?></td>
                         
                      </tr>
                      <tr>
                        <td>DS 5</td>
                        <td class="number"><?php echo round($asis_ds5,0); ?></td>
                        <td class="number">5</td>
                        <td class="number"><?php echo 5 - round($asis_ds5,0); ?></td>
                         
                      </tr>
                      <tr>
                        <td>DS 11</td>
                        <td class="number"><?php echo round($asis_ds10,0); ?></td>
                        <td class="number">5</td>
                        <td class="number" ><?php echo 5 - round($asis_ds10,0); ?></td>
                         
                      </tr>
                         <tr class="primary">
                        <td>RATA RATA</td>

                        <td class="number"><?php
                            $rata_as = number_format((round($asis_ds1,0)+round($asis_ds5,0)+round($asis_ds10,0))/3,2);
                         echo $rata_as; ?></td>
                         
                        <td class="number"><?php
                            $rata_as = number_format((5+5+5)/3,2);
                         echo $rata_as; ?></td>
                          <td class="number"><?php
                            $rata_gap = number_format(((5 - round($asis_ds1,0))+(5 - round($asis_ds5,0))+(5 - round($asis_ds10,0)))/3,2);
                         echo $rata_gap; ?></td>
                         
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>

        </div>