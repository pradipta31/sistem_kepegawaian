<?php
include 'head.php';
include 'left.php';

	
  $query = "SELECT * FROM tb_jabatan";
  $sql = $connect->query($query);
  $delete = "DELETE FROM tb_jabatan WHERE kode_jbt = ('$_GET[delete]')";
  $hasil = $connect->query($delete);
  if(mysqli_query($connect, $delete)){
    echo "Data Berhasil Dihapus!";
      header ('location: data_jabatan.php');
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($connect);
  }
  mysqli_close($connect);

?>


    