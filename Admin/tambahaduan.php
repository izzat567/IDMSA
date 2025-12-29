<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
     <link rel="stylesheet" href="style.css">
	<title>Admin Info Dewan Makan Seri Anggun || IDMSA</title>
    <style>
        .form{
	padding: 100px;
  }
  
  .form-container {
	width: 100%;
	max-width: 400px;
	background-color: #ffffff;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	margin: 0 auto;
	
  }
  
  h2 {
	text-align: center;
	font-size: 24px;
	color: #333;
	margin-bottom: 20px;
  }
  
  .form-group {
	display: flex;
	flex-direction: column;
	margin-bottom: 15px;
  }
  
  label {
	font-size: 14px;
	font-weight: 600;
	color: #666;
	margin-bottom: 5px;
  }
  
  input[type="text"],
  input[type="tel"],
  select,
  input[type="file"] {
	padding: 10px;
	border: 1px solid #ddd;
	border-radius: 5px;
	font-size: 16px;
	color: #333;
	transition: border-color 0.3s;
  }
  
  input[type="text"]:focus,
  input[type="tel"]:focus,
  select:focus {
	border-color: #007bff;
	outline: none;
  }
  
  .button[type="submit"] {
	width: 100%;
	padding: 12px;
	font-size: 16px;
	color: #fff;
	background-color: orange;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	transition: background-color 0.3s;
  }
  
  .button[type="submit"]:hover {
	background-color: yellow;
  }

    </style>
</head>
<body>

<!-- SIDEBAR -->
<section id="sidebar">
		<a href="#" class="brand">
            <i class='bx bxs-male'></i>
			<span class="text">IDMSA.</span>
		</a>
		<ul class="side-menu top">
			
			<li>
				<a href="m_bungkus.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Makanan Bungkus</span>
				</a>
			</li>
			<li>
				<a href="aduanpelajar.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Aduan Pelajar</span>
				</a>
			</li>
			<li class="active">
				<a href="tambahbungkus.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Tambah Makanan Bungkus</span>
				</a>
			</li>
			<li>
				<a href="tambahaduan.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Tambah Aduan Pelajar</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="./backend/logout.php"  class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->




	<!-- CONTENT -->
	<section id="content">
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Penambahan Aduan Pelajar</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Pelabagai Aduan</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Pelajar</a>
						</li>
					</ul>
				</div>
			</div>

			
    <section class="form">
    <div class="form-container">
        <h2>Borang Aduan Pelajar</h2>
        <form action="./backend/taduanpro.php" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label for="nama">Nama </label>
                <input type="text" id="nama" name="nama_pelajar" required>
            </div>

            <div class="form-group">
                <label for="dorm">Pilih Dorm</label>
                <select id="dorm" name="dorm" required>
               
          <option value="Ali 1">Ali 1</option>
          <option value="Ali 2">Ali 2</option>
          <option value="Ali 3">Ali 3</option>
          <option value="Ali 4">Ali 4</option>
          <option value="Ali 5">Ali 5</option>
          <option value="Ali 6">Ali 6</option>
          <option value="Ali 7">Ali 7</option>
          <option value="Ali 8">Ali 8</option>
          
          <option value="Uthman 1">Uthman 1</option>
          <option value="Uthman 2">Uthman 2</option>
          <option value="Uthman 3">Uthman 3</option>
          <option value="Uthman 4">Uthman 4</option>
          <option value="Uthman 5">Uthman 5</option>
          <option value="Uthman 6">Uthman 6</option>
          <option value="Uthman 7">Uthman 7</option>
          <option value="Uthman 8">Uthman 8</option>
    
          <option value="Siti Aisyah 1">Siti Aisyah 1</option>
          <option value="Siti Aisyah 2">Siti Aisyah 2</option>
          <option value="Siti Aisyah 3">Siti Aisyah 3</option>
          <option value="Siti Aisyah 4">Siti Aisyah 4</option>
          <option value="Siti Aisyah 5">Siti Aisyah 5</option>
          <option value="Siti Aisyah 6">Siti Aisyah 6</option>
          <option value="Siti Aisyah 7">Siti Aisyah 7</option>
          <option value="Siti Aisyah 8">Siti Aisyah 8</option>
         
          <option value="Siti Khadijah 1">Siti Khadijah 1</option>
          <option value="Siti Khadijah 2">Siti Khadijah 2</option>
          <option value="Siti Khadijah 3">Siti Khadijah 3</option>
          <option value="Siti Khadijah 4">Siti Khadijah 4</option>
          <option value="Siti Khadijah 5">Siti Khadijah 5</option>
          <option value="Siti Khadijah 6">Siti Khadijah 6</option>
          <option value="Siti Khadijah 7">Siti Khadijah 7</option>
          <option value="Siti Khadijah 8">Siti Khadijah 8</option>
        
          <option value="Siti Hajar 1">Siti Hajar 1</option>
          <option value="Siti Hajar 2">Siti Hajar 2</option>
          <option value="Siti Hajar 3">Siti Hajar 3</option>
          <option value="Siti Hajar 4">Siti Hajar 4</option>
          <option value="Siti Hajar 5">Siti Hajar 5</option>
          <option value="Siti Hajar 6">Siti Hajar 6</option>
          <option value="Siti Hajar 7">Siti Hajar 7</option>
          <option value="Siti Hajar 8">Siti Hajar 8</option>
            </select>
            </div>

            <div class="form-group">
                <label for="masa">Waktu Makan</label>
                <div class="option">
                    <input class="optionMasa" type="radio" name="waktu_makan" value="Makan Pagi">
                    <label  for="1">Makan Pagi</label>
                    <br>     
                    <input class="optionMasa"  type="radio" name="waktu_makan" value="Makan Tengah Hari">
                    <label for="2">Makan Tengah Hari</label>
                    <br>
                    <input class="optionMasa" type="radio" name="waktu_makan" value="Makan Petang">
                    <label  for="3">Makan Petang</label>
                    <br>
                    <input class="optionMasa" type="radio" name="waktu_makan" value="Makan Malam">
                    <label  for="3">Makan Malam</label>
                  </div>
            </div>

            <div class="form-group">
                <label for="aduan">Aduan</label>
                <div class="option">
                    <input class="optionAduan" type="radio" name="aduan" value="Makanan Habis">
                    <label  for="1">Makanan Habis</label>
                    <br>     
                    <input class="optionAduan" type="radio" name="aduan" value="Makanan Dapat Sedikit">
                    <label  for="2">Makanan Dapat Sedikit</label>
                    <br>     
                    <input class="optionAduan"  type="radio" name="aduan" value="Makanan Tidak Bersih / Rosak">
                    <label for="3">Makanan Tidak Bersih / Rosak</label>
                    <br>
                    <input class="optionAduan" type="radio" name="aduan" value="Pinggan / Cawan Tidak Bersih">
                    <label  for="4">Pinggan / Cawan Tidak Bersih</label>
                    <br>
                    <input class="optionAduan" type="radio" name="aduan" value="Persekitaran Tidak Bersih">
                    <label  for="5">Persekitaran Tidak Bersih</label>
                  </div>
            </div>

        
            <div class="form-group">
                <label for="bukti_aduan">Bukti Aduan</label>
                <input type="file" id="bukti_aduan" name="bukti_aduan" accept=" .jpg, .jpeg, .png, .pdf" required>
            </div>

            <div class="form-group">
                <label for="baikpulih">Ulasan Penambahbaikan</label>
                <input type="text" id="penambahbaikan" name="penambahbaikan" required>
            </div>
            <div>
            <button class ="button" type="submit" name="submit">Hantar</button>
            </div>
            
        </form>
    </div>
</section>
    
				
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
	<script src="script.js"></script>
</body>
</html>