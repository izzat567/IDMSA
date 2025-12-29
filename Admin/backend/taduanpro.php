<?php
include("../../connection/config.php");
if (isset($_POST['submit'])) {
    $nama_pelajar = $_POST['nama_pelajar'];
    $dorm = $_POST['dorm'];
    $waktu_makan = $_POST['waktu_makan'];
    $aduan = $_POST['aduan'];
    $penambahbaikan = $_POST['penambahbaikan'];
    $tmp_bukti_aduan = $_FILES['bukti_aduan']['tmp_name'];
    $bukti_aduan = $_FILES['bukti_aduan']['name'];
     

    // $gambar_data = file_get_contents($gambar_mc);

    $extention = explode('.', $bukti_aduan);
    $extention = strtolower(end($extention));

    $newName = uniqid();
    $destination = "../upload/$newName.$extention";
    move_uploaded_file($tmp_bukti_aduan, $destination);

    $file_destination = "$newName.$extention";

    $add = mysqli_query($connect, "INSERT INTO  aduanpelajar VALUES ('$nama_pelajar','$dorm','$waktu_makan','$aduan','$file_destination','$penambahbaikan')");
    header("location:../aduanpelajar.php");   

}


?>