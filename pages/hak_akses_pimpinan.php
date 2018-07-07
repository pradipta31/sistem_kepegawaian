<?php  
if ($hak_akses_login=='PIMPINAN') {
  # code...
}else{
    echo "<script>alert('Hak Akses Tidak Sesuai');document.location='index.php';</script>";
}
?>
