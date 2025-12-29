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
            <p class="sub__header">Selamat Datang Ke Halaman Utama IDMSA</p>
            <h1>Info Dewan Makan<br/>Seri Anggun</h1>
            <p class="section__subtitle">
              Menampilkan jadual mingguan dan maklumat terkini mengenai Dewan Makan Kolej Vokasional Kuala Selangor.
            </p>
            
          </div>
        </div>
      </div>
    </header>

    <!-- section home page for IDMSA -->
    <section class="section__container destination__container">
      <div class="section__header">
        <div>
          <h2 class="section__title">Mari Terokai Dewan Makan Seri Anggun</h2>
          <p class="section__subtitle">
            Destinasi hidangan enak dan pengalaman makan yang menyenangkan di Kolej Vokasional Kuala Selangor.
          </p>
        </div>
      </div>
      <div class="destination__grid">
        <div class="destination__card">
          <img src="gambardm/gambartegak4.jpg" alt="destination"/>
        </div>
        <div class="destination__card">
          <img src="gambardm/gambartegak5.jpg" alt="destination"/>
        </div>
        <div class="destination__card">
          <img src="gambardm/gambartegak6.jpg" alt="destination"/>
        </div>
        <div class="destination__card">
          <img src="gambardm/gambartegak7.jpg" alt="destination"/>
        </div>
      </div>
    </section>

    <section class="trip">
      <div class="section__container trip__container">
        <h2 class="section__title">Menu Mingguan Dewan Makan Seri Anggun</h2>
        <p class="section__subtitle">
          Nikmati pelbagai hidangan lazat yang disediakan setiap minggu khas untuk warga Kolej Vokasional Kuala Selangor. 
          Dapatkan info terkini tentang pilihan makanan yang menyelerakan di sini!"
        </p>
        <br>
        <div class="action__btns">
        <center>
          <button class="btn_menu" type="button"><span></span><a href="minggu1.php">MINGGU 1</a></button>
          <button class="btn_menu" type="button"><span></span><a href="minggu2.php">MINGGU 2</a></button>
          <button class="btn_menu" type="button"><span></span><a href="minggu3.php">MINGGU 3</a></button>
          <button class="btn_menu" type="button"><span></span><a href="minggu4.php">MINGGU 4</a></button>
          </center>
        </div>
      </div>
    </section>

    <section class="gallary">
      <div class="section__container gallary__container">
        <div class="image__gallary">
          <div class="gallary__col">
            <img src="gambardm/gambar1.jpg" alt="gallary" />
          </div>
          <div class="gallary__col">
            <img src="gambardm/gambar2.jpg" alt="gallary" />
            <img src="gambardm/gambar1.jpg" alt="gallary" />
          </div>
        </div>
        <div class="gallary__content">
          <div>
            <h2 class="section__title">
              Jom Kenali Dewan Makan Seri Anggun
            </h2>
            <p class="section__subtitle">
              Ketahui lebih lanjut tentang Dewan Makan Seri Anggun! Klik di sini untuk melihat menu mingguan, waktu operasi, dan maklumat terkini
            </p>
            <button class="btn"><a href="info.php">Mari Terokai</a></button>
          </div>
        </div>
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
  </body>
</html>