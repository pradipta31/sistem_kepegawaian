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

$SMA=$conn->query("select * from tb_jabatan where t_ijazah='SMA'");
$STM=$conn->query("select * from tb_jabatan where t_ijazah='STM'");
$D1=$conn->query("select * from tb_jabatan where t_ijazah='D1'");
$D2=$conn->query("select * from tb_jabatan where t_ijazah='D2'");

$D3=$conn->query("select * from tb_jabatan where t_ijazah='D3'");
$S1=$conn->query("select * from tb_jabatan where t_ijazah='S1'");
$S2=$conn->query("select * from tb_jabatan where t_ijazah='S2'");
$S3=$conn->query("select * from tb_jabatan where t_ijazah='S3'");

$jumlah_SMA=mysqli_num_rows($SMA);
$jumlah_STM=mysqli_num_rows($STM);
$jumlah_D1=mysqli_num_rows($D1);
$jumlah_D2=mysqli_num_rows($D2);
$jumlah_D3=mysqli_num_rows($D3);
$jumlah_S1=mysqli_num_rows($S1);
$jumlah_S2=mysqli_num_rows($S2);
$jumlah_S3=mysqli_num_rows($S3);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Tingkat Ijazah', 'Jumlah'],
          ['SMA',    <?php echo $jumlah_SMA;?>],
          ['STM',    <?php echo $jumlah_STM;?>],
		  ['D1',    <?php echo $jumlah_D1;?>],
          ['D2',    <?php echo $jumlah_D2;?>],
		  ['D3',    <?php echo $jumlah_D3;?>],
          ['S1',    <?php echo $jumlah_S1;?>],
		  ['S2',    <?php echo $jumlah_S2;?>],
          ['S3',    <?php echo $jumlah_S3;?>]
		
        ]);

        var options = {
          title: 'JUMLAH PEGAWAI BERDASARKAN TINGKAT IJAZAH'
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
