<?php
include 'head.php';
include 'left.php';
include 'koneksi.php';
if (isset($_GET['setuju_cuti'])) {
  $setuju_cuti = $_GET['setuju_cuti'];
  $query = "UPDATE tb_cuti SET status='1' WHERE kode_cuti = '$setuju_cuti'";
  $result = mysqli_query($connect, $query);
}
?>