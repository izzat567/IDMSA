<?php
include("../../connection/config.php");
$nama_pelajar=$_GET['nama_pelajar'];
$result = mysqli_query($connect,"DELETE FROM pelajarsakit WHERE nama_pelajar='$nama_pelajar'");
header("location:../m_bungkus.php");
?>