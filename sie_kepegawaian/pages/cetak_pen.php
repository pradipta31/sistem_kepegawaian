<?php
include 'head.php';
include 'left.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Cetak Data Pensiun SesuaiTanggal
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="lap_pensiun.php" method="post" target="_blank">
                 <table>
                 <tr>
                 <td>
                 	<div class="form-group">Dari Tanggal</div>
                 </td>
                 <td align="center" width="5%">
                 	<div class="form-group">:</div>
                 </td>
                 <td>
                 	<div class="form-group">
                    <input type="date" class="form-control" name="tgl_a" required>
                    </div>
                 </td>
                 </tr> 
                  <tr>
                 <td>
                 	<div class="form-group">Sampai Tanggal</div>
                 </td>
                 <td align="center">
                 	<div class="form-group">:</div>
                 </td>
                 <td>
                 	<div class="form-group">
                    <input type="date" class="form-control" name="tgl_b" required>
                    </div>
                 </td>
                 <td></td>
                 <td></td>
                 <tr>
                <td>
                    <center><input type="submit"  class="btn btn-primary" name="cetak_pen" value="cetak"></center>
                 </td>
                 </tr>
                 </tr></table></form></div> 
                                    </div>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
<?php
include"footer.php";
?>