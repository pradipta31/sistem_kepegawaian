<div class="navbar-default sidebar" role="navigation" style="margin-top: 0px;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
<?php  
if ($level=='PIMPINAN') {
?>
<!-- DISINI MENU HAK AKSES 1 pimpinan
 -->
 		<li>
            <a href="edit_profil.php"><i class="fa fa-book fa-fw"></i> Edit profil</a>
        </li>
         <li>
            <a href="grafik.php"><i class="fa fa-bar-chart-o fa-fw"></i> DATA GRAFIK</a>
        </li>
         <li class="treeview">
 <a href="#">
 <i class="fa fa-book fa-fw"></i>
 <span> DATA LAPORAN</span> 
 <span class="pull-right-container"></span>
 <i class="fa fa-angle-left pull-right"></i></a>  
 <ul class="treeview-menu">

             <a href="lap_pegawai.php"><i class="fa fa-book fa-fw"></i> Laporan Data Pegawai</a>
         <br>
          <br>
             <a href="lap_jabatan.php"><i class="fa fa-book fa-fw"></i> Laporan Jabatan Pegawai</a>
          <br>
          <br>
             <a href="lap_cuti.php"><i class="fa fa-book fa-fw"></i> Laporan Pegawai Cuti</a>
          <br>
          <br>
             <a href="lap_pensiun.php"><i class="fa fa-book fa-fw"></i> Laporan Pegawai Pensiun</a>
             </ul>
<?php
}else if ($level=='PETUGAS'){
?>
<!-- DISINI MENU HAK AKSES 2 petugas
 -->
<!--  <a href="morris.html"> <i class="fa fa-search fa-fw"></i>Search</a>
 -->  <li class="treeview">
 <a href="#">
 <i class="fa fa-book fa-fw"></i>
 <span>DAFTAR DATA PEGAWAI</span> 
 <span class="pull-right-container"></span>
 <i class="fa fa-angle-left pull-right"></i></a>  
 <ul class="treeview-menu">

            <a href="data_user.php"><i class="fa fa-users fa-fw"></i> Data User</a>
        <br>
        <br>
            <a href="data_user_pegawai.php"><i class="fa fa-book fa-fw"></i> Data Pegawai</a>
        <br>
        <br>
            <a href="data_cuti.php"><i class="fa fa-book fa-fw"></i> Data Cuti</a>
        <br>
         <br>
            <a href="data_pensiun.php"><i class="fa fa-book fa-fw "></i> Data Pensiun</a>
            <br>
            <br>
        <li class="treeview">
 <a href="#">
 <i class="fa fa-book fa-fw"></i>
 <span>Data jabatan/Golongan</span> 
 <span class="pull-right-container"></span>
 <i class="fa fa-angle-left pull-right"></i></a>  
 <ul class="treeview-menu">
           <a href="jbt.php"><i class="fa fa-book fa-fw"></i> Data Jabatan</a>
         <br>
         <a href="gol.php"><i class="fa fa-book fa-fw"></i> Golongan</a>
         <br>
         <a href="data_jabatan.php"><i class="fa fa-book fa-fw"></i> Data Jabatan Pegawai</a>
        <br>
         <br>
         </ul>
         </ul>
        <li>
            <a href="grafik.php"><i class="fa fa-bar-chart-o fa-fw"></i> DATA GRAFIK</a>
        </li>
         <li class="treeview">
 <a href="#">
 <i class="fa fa-book fa-fw"></i>
 <span> DATA LAPORAN</span> 
 <span class="pull-right-container"></span>
 <i class="fa fa-angle-left pull-right"></i></a>  
 <ul class="treeview-menu">

             <a href="lap_pegawai.php"><i class="fa fa-book fa-fw"></i> Laporan Data Pegawai</a>
         <br>
          <br>
             <a href="lap_jabatan.php"><i class="fa fa-book fa-fw"></i> Laporan Jabatan Pegawai</a>
          <br>
          <br>
             <a href="lap_cuti.php"><i class="fa fa-book fa-fw"></i> Laporan Pegawai Cuti</a>
          <br>
          <br>
             <a href="lap_pensiun.php"><i class="fa fa-book fa-fw"></i> Laporan Pegawai Pensiun</a>
        </ul>
<?php
}else{
?>
<!-- DISINI MENU HAK AKSES 3 pegawai

 -->
        <li>
             <a href="form_cuti.php"><i class="fa fa-bar-chart-o fa-fw "></i>Tambah Cuti</a>
        </li> 
        <li>
             <a href="cetak-grafik.php"><i class="fa fa-bar-chart-o fa-fw "></i> Laporan Pendapatan Pajak </a>
        </li> 
<?php
}

?>

		<li>
            <a href="about.php"><i class=" fa fa-info-circle fa-fw"></i> About</a>
        </li>

        </ul>
                <!-- /.sidebar-collapse -->
    </div>
</div>
            <!-- /.navbar-static-side -->
