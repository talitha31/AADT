<?php
    if($_POST){
        $nama = $_POST['nama'];
        $saran = $_POST['saran'];
        $handle = fopen("index2.php", "a");
        fwrite($handle, "<b><i>" . $nama . "</b></i> berkomentar: <br/>" . $saran . "<br/><br/>");
        fclose($handle);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ada Apa di Tlogosari</title>
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Raleway:wght@300&family=Roboto+Mono&display=swap">
</head>

<body style="background-color: white; font-family: 'Poppins', sans-serif;">
    <section id="homepage">
        <article class="container">
            <h2>Selamat Datang di AADT!</h2>
        </article>
    </section>

    <div class="navbar">
        <a href="#homepage">Halaman Utama</a>
        <a href="#sejarah">Sejarah</a>
        <a href="#kuliner">Kuliner</a>
        <a href="#saran">Saran</a>
    </div>

    <!-- <img src="images/tlogosari.jpg" alt="Tlogosari" title="Tlogosari"> -->

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 6</div>
            <img src="images/bumi-tlogosari.jpg" style="width:100%">
            <div class="text">Bumi Tlogosari</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
            <img src="images/tlogosari-1.jpg" style="width:100%">
            <div class="text">Jembatan Satu</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 6</div>
            <img src="images/tlogosari-2.jpg" style="width:100%">
            <div class="text">Jembatan Dua</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <img src="images/tlogosari-3.jpg" style="width:100%">
            <div class="text">Jembatan Tiga</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <img src="images/tlogosari-4.jpg" style="width:100%">
            <div class="text">Jembatan Empat</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / 6</div>
            <img src="images/tlogosari-5.jpg" style="width:100%">
            <div class="text">Jembatan Lima</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
    </div>

    <section id="sejarah">
        <article>
            <h3 style="margin: 10px;">Bagaimana sih awal mula terbentuknya wilayah Tlogosari?</h3>
            <p>
                Tlogosari merupakan sebuah kelurahan yang terletak di Kecamatan Pedurungan, Kota Semarang.
                Sebelum pemekaran wilayah pada 1993, Tlogosari menjadi bagian dari Kecamatan Genuk, Kabupaten Demak.
                <br><br>
                Dalam sejarahnya, Tlogosari pada awalnya merupakan sebuah kawasan rawa yang terdapat sebuah telaga yang
                berfungsi sebagai daerah resapan air.
                Sejalan dengan adanya program pemerintah pusat untuk pemerataan pembangunan, Tlogosari diubah menjadi
                perumahan rakyat yang dikelola oleh Perum Perumnas. Pembangunan Perumnas Bumi Tlogosari dimulai pada
                tahun
                1986.
                <br><br>
                Alhasil, Tlogosari mulai didatangi oleh para penduduk dari dalam maupun luar kota. Peningkatan jumlah
                penduduk yang cukup signifikan menyebabkan permintaan
                lahan semakin banyak, sedangkan lahan di wilayah Tlogosari bersifat terbatas dan tidak dapat diperluas
                lagi.
            </p>
        </article>

        <article>
            <h3 style="margin: 10px;">Ini lokasinya</h3>

            <center>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d916.6561813549507!2d110.45821056788506!3d-6.98882716699378!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708cc47eb5e253%3A0xaf16c5002b43c8ce!2sBumi%20Tlogosari!5e0!3m2!1sid!2sid!4v1668702906972!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>
        </article>
    </section>

    <section id="kuliner">
        <article>
            <h3>Kuliner</h3>
        </article>

        <div class="container">
            <main class="grid">
                <article class="content">
                    <a href="index.html">
                        <img src="images/makanan.png">
                        <div class="content">
                            <h3>Makanan</h3>
                            <p>Nasi goreng, sate ayam, mie goreng, sup buntut, rendang, gado-gado, bakso, dll.</p>
                        </div>
                    </a>
                </article>

                <article class="content">
                    <a href="index2.html">
                        <img src="images/minuman.jpg">
                        <div class="content">
                            <h3>Minuman</h3>
                            <p>Cendol, es doger, wedang ronde, boba, kopi, dll.</p>
                        </div>
                    </a>
                </article>
            </main>
        </div>
    </section>

    <br>

    <section id="saran">
        <article>
            <center>
                <h3 style="margin: 10px;">Saran</h3>
                <form action="" method="POST">
                    Siapa Namamu? <br/> <input type="text" name="nama" style="border: none; background-color: burlywood; padding: 10px;"> <br/><br/>
                    Ketikkan Saran <br/> <textarea name="saran" id="" cols="50" rows="10" style="border: none; background-color: burlywood; padding: 10px;"></textarea> <br/><br/>
                    <input type="submit" value="Kirim" style="background-color: #583C18; border: none; padding: 10px; border-radius: 20px; color: white">
                </form>

                <h3 style="margin: 10px;">Kumpulan Saran</h3>

                <?php
                    include "index2.php";
                ?>
            </center>
        </article>
    </section>

    <br>
    
    <script src="script.js"></script>
</body>

</html>