<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />

    <!-- navbar untuk IDMSA -->
    <title>Info Dewan Makan Seri Anggun  | IDMSA></title>
  </head>
  <body>
    <nav>
    <div class="nav__logo">IDMSA<span>.</span></div>
      <ul class="nav__links">
        <li class="link"><a href="index.php">Utama</a></li>
        <li class="link"><a href="bungkus.php">Makanan Bungkus</a></li>
        <li class="link"><a href="info.php">Info</a></li>
        <li class="link"><a href="aduan.php">Aduan</a></li>
      </ul>
      <button class="btn"><a href="../Admin/login.php">Admin</a></button>
    </nav>

    <!-- header untuk IDMSA -->
    <header>
      <div class="section__container header__container">
      <div class="header__image">
          <img src="gambardm/gambartegak2.png" alt="header"/>
          <img src="gambardm/pintu.jpeg" alt="header"/>
        </div>
        <div class="header__content">
          <div>
            <p class="sub__header">Selamat Datang Ke Halaman Bungkus Makanan IDMSA</p>
            <h1>Info Dewan Makan<br/>Seri Anggun</h1>
            <p class="section__subtitle">
                Halaman ini adalah untuk pelajar yang memerlukan makanan dibungkus. Sila isi borang di bawah..
            </p>
          </div>
        </div>
      </div>
    </header>

    <!-- section home page for IDMSA -->
    <section class="form">
    <div class="form-container">
        <h2>Borang Pelajar Sakit</h2>
        <form action="./backend/bungkuspro.php" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label for="nama">Nama Pelajar</label>
                <input type="text" id="nama_pelajar" name="nama_pelajar" required>
            </div>

            <div class="form-group">
                <label for="telefon">Nombor Telefon</label>
                <input type="tel" id="no_telefon" name="no_telefon" required>
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
                <label for="surat_mc">Muat Naik Surat MC (image)</label>
                <input type="file" id="gambar_mc" name="gambar_mc" accept=" .jpg, .jpeg, .png, .pdf" required>
            </div>

            <button type="submit" name="submit">Hantar</button>
        </form>
    </div>
</section>


<!-- footer IDMSA -->
    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>IDMSA<span>.</span></h3>
          <p>
            Menampilkan jadual mingguan dan maklumat terkini mengenai Dewan Makan Kolej Vokasional Kuala Selangor.
          </p>
        </div>
        <div class="footer__col">
          <h4>Support</h4>
          <p>FAQs</p>
          <p>Terms & Conditions</p>
          <p>Privacy Policy</p>
          <p>Contact Us</p>
        </div>
        <div class="footer__col">
          <h4>Alamat</h4>
          <p>
            <span>Alamat:</span> Kolej Vokasional Kuala Selangor, 45600 Batang Berjuntai, Selangor
          </p>
          <p><span>Email:</span> KolejVokasionalKualaSelangor.com</p>
          <p><span>No Telefon:</span> +60 1151730774</p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 IDMSA || Info Dewan Makan Seri Anggun . Kolej Vokasional Kuala Selangor.
      </div>
    </footer>
    
</html>