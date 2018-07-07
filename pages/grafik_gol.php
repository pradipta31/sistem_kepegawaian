<?php
include"head.php";
include"left.php";
include"footer.php";
?>
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Grafik</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
<br>                       
<a href="grafik_kel.php" class="btn btn-success" style=""><i class="fa fa-bar-chart-o fa-fw" ></i> Jenis Kelamin</a>
<a href="grafik_agama.php" class="btn btn-success" style=""><i class="fa fa-bar-chart-o fa-fw" ></i> Agama</a>
<a href="grafik_jab.php" class="btn btn-success" style=""><i class="fa fa-bar-chart-o fa-fw" ></i> Jabatan</a>
<a href="grafik_gol.php" class="btn btn-success" style=""><i class="fa fa-bar-chart-o fa-fw" ></i> Golongan Ruang</a>
<a href="grafik_ijazah.php" class="btn btn-success" style=""><i class="fa fa-bar-chart-o fa-fw" ></i> Tingkat Ijazah</a>
<br>
<br>           
<?php						
$conn=new mysqli("localhost","root","","sie_kepegawaian");
$golongan=$conn->query("select * from tb_jabatan where golongan='.'");
$jumlah_golongan=mysqli_num_rows($golongan);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['golongan Ruang', 'Jumlah'],
          ['.',    <?php echo $jumlah_golongan;?>]
        ]);

        var options = {
          title: 'JUMLAH PEGAWAI BERDASARKAN GOLONGAN RUANG'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
