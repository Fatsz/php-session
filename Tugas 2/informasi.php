<?php
session_start();
if(!isset($_SESSION["username"])){ 
    header("location:index.php"); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>informasi</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
    <div class="naviga">
        <ul>
            <li><a href="informasi.php">Informasi</a></li>
            <li><a href="bukuTamu.php">Form Buku Tamu</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="isiInformasi">
        <img src="asset/tugu jogja.jpg" alt="gambar" class="gambarTugu">
        <div class="textInformasi">
            <h2>Tugu Yogyakarta</h2>
            <p>Tugu Yogyakarta (bahasa Jawa: ꦡꦸꦒꦸꦔꦪꦺꦴꦒꦾꦏꦂꦠ, translit. Tugu Ngayogyåkartå) adalah sebuah tugu atau monumen yang sering dipakai sebagai simbol atau lambang dari Kota Yogyakarta, Daerah Istimewa Yogyakarta. Tugu yang terletak di perempatan Jalan Jenderal Sudirman dan Jalan Margo Utomo ini, mempunyai nilai simbolis yang merupakan garis yang bersifat magis yang menghubungkan Pantai Parangtritis dan Panggung Krapyak di Kabupaten Bantul, Keraton Yogyakarta di Kota Yogyakarta dan Gunung Merapi di Kabupaten Sleman.</p>
            <a href="https://id.wikipedia.org/wiki/Tugu_Yogyakarta" class="morin">more info</a>
        </div>
    </div>
    <div class="isiInformasi">
        <img src="asset/godean.JPG" alt="gambar" class="gambarGodean">
        <div class="textInformasi">
            <h2>Godean</h2>
            <p>Godean (bahasa Jawa: ꦒꦺꦴꦝꦺꦪꦤ꧀, translit. Godhéan) adalah sebuah kapanéwon di Kabupaten Sleman, Daerah Istimewa Yogyakarta, Indonesia. Kapanéwon Godean berada di sekitar 10 km sebelah Barat daya dari Ibu kota Kabupaten Sleman dan 10 km di sebelah barat kota Yogyakarta.</p>
            <a href="https://id.wikipedia.org/wiki/Godean,_Sleman" class="morin">more info</a>
        </div>
    </div>
    <div class="isiInformasi">
        <img src="asset/bantul.jpg" alt="gambar" class="gambarBantul">
        <div class="textInformasi">
            <h2>Bantul</h2>
            <p>Kabupaten Bantul (bahasa Jawa: ꦧꦤ꧀ꦠꦸꦭ꧀, pelafalan dalam bahasa Indonesia: [bantʊl]) adalah sebuah wilayah kabupaten yang terletak di provinsi Daerah Istimewa Yogyakarta, Indonesia. Ibu kotanya adalah Kapanewon Bantul. Pada pertengahan tahun 2024, jumlah penduduk Bantul sebanyak 976.573 jiwa.</p>
            <a href="https://id.wikipedia.org/wiki/Kabupaten_Bantul" class="morin">more info</a>
        </div>
    </div>
</body>
</html>