<?php  
if ($hak_akses_login=='PETUGAS') {
  # code...
}else{
    echo "<script>alert('Hak Akses Tidak Sesuai');document.location='index.php';</script>";
}
?>
