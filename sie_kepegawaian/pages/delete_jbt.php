<?php
include 'head.php';
include 'left.php';

	
  $query = "SELECT * FROM tb_jbt";
  $sql = $connect->query($query);
  $delete = "DELETE FROM tb_jbt WHERE id_jbt = ('$_GET[delete]')";
  $hasil = $connect->query($delete);
  if(mysqli_query($connect, $delete)){
    echo "Data Berhasil Dihapus!";
      header ('location: jbt.php');
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($connect);
  }
  mysqli_close($connect);

?>


    