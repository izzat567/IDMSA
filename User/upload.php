<?php
include('connection/config.php');

if (isset($_POST['submit'])) {
    $nama_pelajar = $_POST['nama_pelajar'];
    $no_telefon = $_POST['no_telefon'];
    $dorm = $_POST['dorm'];
    $gambar_mc = $_FILES['gambar_mc']['tmp_name'];
     
    $gambar_data = file_get_contents($gambar_mc);

    // Simpan data ke dalam database
    $stmt = $conn->prepare("INSERT INTO pelajarsakit (nama_pelajar, gambar_mc) VALUES (?, ?)");
    $stmt->bind_param("sb", $nama_pelajar, $gambar_data);
    
    if ($stmt->execute()) {
        echo "Gambar berjaya dimuat naik dan disimpan dalam database!";
    } else {
        echo "Gagal menyimpan gambar: " . $conn->error;
    }

    $stmt->close();

    
}

$conn->close();
?>
