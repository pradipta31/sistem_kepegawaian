<?php
include 'head.php';
include 'left.php';

	
  $query = "SELECT * FROM user_pegawai";
  $sql = $connect->query($query);
  $delete = "DELETE FROM user_pegawai WHERE nip = ('$_GET[delete]')";
  $hasil = $connect->query($delete);
  if(mysqli_query($connect, $delete)){
    echo "Data Berhasil Dihapus!";
      header ('location: data_user_pegawai.php');
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($connect);
  }
  mysqli_close($connect);

?>


    