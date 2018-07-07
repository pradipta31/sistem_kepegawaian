<?php  
if ($hak_akses_login=='PEGAWAI') {
  # code...
}else{
    echo "<script>alert('Hak Akses Tidak Sesuai');document.location='index.php';</script>";
}
?>
