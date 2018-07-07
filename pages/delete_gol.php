<?php
include 'head.php';
include 'left.php';

	
  $query = "SELECT * FROM tb_golongan";
  $sql = $connect->query($query);
  $delete = "DELETE FROM tb_golongan WHERE kode_gol = ('$_GET[delete]')";
  $hasil = $connect->query($delete);
  if(mysqli_query($connect, $delete)){
    echo "Data Berhasil Dihapus!";
      header ('location: gol.php');
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($connect);
  }
  mysqli_close($connect);

?>


    