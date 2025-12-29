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
            <p class="sub__header">Selamat Datang Ke Halaman Info IDMSA</p>
            <h1>Info Dewan Makan<br/>Seri Anggun</h1>
            <p class="section__subtitle">
                Halaman Info IDMSA menyediakan maklumat lengkap tentang jadual menu mingguan, waktu operasi, dan pengumuman terkini Dewan Makan Seri Anggun di 
                Kolej Vokasional Kuala Selangor untuk memastikan anda sentiasa mendapat info terkini.
            </p>
          </div>
        </div>
      </div>
    </header>

    <section class="gallary">
        <div class="section__container gallary__container">
          <div class="image__gallary">
            <table class="schedule-table">
                <thead>
                  <tr>
                    <th>Waktu Makan</th>
                    <th>Hari Persekolahan</th>
                    <th>Hari Minggu</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="meal-time">Makan Pagi</td>
                    <td>6.50 Pagi - 7.30 Pagi</td>
                    <td>7.30 Pagi - 8.00 Pagi</td>
                  </tr>
                  <tr>
                    <td class="meal-time">Makan Tengah Hari</td>
                    <td>1.00 Petang - 2.00 Petang</td>
                    <td>12.30 Tengah Hari - 1.30 Petang</td>
                  </tr>
                  <tr>
                    <td class="meal-time">Makan Petang</td>
                    <td>5.00 Petang - 5.30 Petang</td>
                    <td>5.00 Petang - 5.30 Petang</td>
                  </tr>
                  <tr>
                    <td class="meal-time">Makan Malam</td>
                    <td>7.45 Malam - 8.30 Malam</td>
                    <td>7.45 Malam - 8.30 Malam</td>
                  </tr>
                </tbody>
              </table>
          </div>
          <div class="gallary__content">
            <div>
              <h2 class="section__title">
                Jadual Waktu Makan Di Dewan Makan Seri Anggun
              </h2>
              <p class="section__subtitle">
                Dapatkan maklumat terkini mengenai waktu makan harian kami. 
                Sila rujuk jadual di bawah untuk mengetahui waktu sarapan, makan tengah hari, 
                dan makan malam yang disediakan setiap hari. Pastikan anda tidak terlepas waktu makan untuk pengalaman yang lebih memuaskan.
              </p>
              
            </div>
          </div>
        </div>
      </section>

    

    <section class="trip">
        <div class="section__container trip__container">
          <h2 class="section__title">Exco Dan Warden Makanan</h2>
          <p class="section__subtitle">
            Ketahui senarai  Exco dan Warden yang bertugas di Dewan Makan Seri Anggun pada setiap minggu untuk memastikan 
            kelancaran operasi dan keselesaan semua pelajar di Kolej Vokasional Kuala Selangor.
          </p>

          <div class="trip__grid">

            <div class="trip__card">
                <img class="trip_img" src="ExcoWarden/guru.jpg" alt="trip" />
                <div class="trip__details">
                  <p>Madam Lathipah</p>
                  <div class="rating"></i> Warden Asrama / Pensyarah</div>
                  <div class="booking__price">
                    <button class="book__now"><a href="https://wa.link/xmtkmv">Hubungi</a></button>
                  </div>
                </div>
              </div>

            <div class="trip__card">
              <img class="trip_img" src="ExcoWarden/exco1.jpg" alt="trip" />
              <div class="trip__details">
                <p>Nur Dini Fatihah Binti Abdul Isham 
                </p>
                <div class="rating"></i>1 DVM KPD</div>
                <div class="booking__price">
                    <button class="book__now"><a href="https://wa.link/d5dm68">Hubungi</a></button>
                  </div>
              </div>
            </div>

            <div class="trip__card">
              <img class="trip_img" src="ExcoWarden/exco2.jpg" alt="trip" />
              <div class="trip__details">
                <p>Nurin Basyirah Binti Zulkifli
                </p>
                <div class="rating"></i> 1 DVM HBP</div>
                <div class="booking__price">
                    <button class="book__now"><a href="https://wa.link/zxawlv">Hubungi</a></button>
                  </div>
              </div>
            </div>

            <div class="trip__card">
              <img class="trip_img" src="ExcoWarden/exco3.jpg" alt="trip" />
              <div class="trip__details">
                <p>Adam Darimi Bin Rozman</p>
                <div class="rating"></i> 1 DVM HBP</div>
                <div class="booking__price">
                    <button class="book__now"><a href="https://wa.link/zn8xit">Hubungi</a></button>
                  </div>
              </div>
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