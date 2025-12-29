
<?php
include("../../connection/config.php");

if (isset($_POST['submit'])) {
    $nama_pelajar = $_POST['nama_pelajar'];
    $no_telefon = $_POST['no_telefon'];
    $dorm = $_POST['dorm'];
    $tmp_gambar_mc = $_FILES['gambar_mc']['tmp_name'];
    $gambar_mc = $_FILES['gambar_mc']['name'];
     
    // $gambar_data = file_get_contents($gambar_mc);

    $extention = explode('.', $gambar_mc);
    $extention = strtolower(end($extention));

    $newName = uniqid();
    $destination = "../uploads/$newName.$extention";
    move_uploaded_file($tmp_gambar_mc, $destination);

    $file_destination = "$newName.$extention";

    $add = mysqli_query($connect, "INSERT INTO  pelajarsakit VALUES ('$nama_pelajar','$no_telefon','$dorm','$file_destination')");
    header("location:../bungkus.php");   

}


?>