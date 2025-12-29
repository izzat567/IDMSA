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
			<li class="active">
				<a href="aduanpelajar.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Aduan Pelajar</span>
				</a>
			</li>
			<li>
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
					<h1>Aduan Pelajar</h1>
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

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Makanan Bungkus</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Nama Pelajar</th>
								<th>Dorm</th>
                                <th>Waktu Makan</th>
                                <th>Aduan</th>
                                <th>Bukti Aduan</th>
								<th>Penambahbaikan</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<?php
		include("../connection/config.php");
			$papar=mysqli_query($connect, "SELECT * FROM aduanpelajar");
			while($row=mysqli_fetch_array($papar)){

				$nama_file = $row['bukti_aduan'];
				?>
				<tr>
				<td><?php echo $row['nama_pelajar']?></td>
				<td><?php echo $row['dorm']?></td>
				<td><?php echo $row['waktu_makan']?></td>
				<td><?php echo $row['aduan']?></td>
				<td><a target="_blank" href="../User/upload/<?php echo $nama_file?>">View</a></td>
				<td><?php echo $row['penambahbaikan']?></td>
				<td><a href="./backend/deleteaduan.php?nama_pelajar=<?php echo $row['nama_pelajar']; ?>" onClick="return confirm('Rekod ini akan dihapuskan?')">Padam</a></td>
				<?php
			}

	?>
					</table>

					<div>
	
	</div>
				</div>
				
					
		</main>
		<!-- MAIN -->
	</section>
	
	<button>
		<a href="tambahaduan.php">
			TAMBAH ADUAN 
		</a>
	</button>
	</div>
					
	
	<script src="script.js"></script>
</body>
</html>