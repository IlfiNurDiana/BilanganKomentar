<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bilangan</title>
        <link rel="stylesheet" type="text/css" href="komentar.css">
    </head>
    <body>
        <!--header-->
        <div class="atas"></div>
        <header>
            <div class="container">
                <h1>BILANGAN</h1>
                <ul>
                    <li><a href="https://ilfinurdiana.github.io/Bilangan">HOME</a></li>
                    <li><a href="https://ilfinurdiana.github.io/BilanganMateri">MATERI</a></li>
                    <li class="selected"><a href="https://ilfinurdiana.github.io/BilanganKomentar">KOMENTAR</a></li>
                    <li><a href="https://ilfinurdiana.github.io/BilanganKontak">KONTAK</a></li>
                </ul>
            </div> 
            <div class="bawah">
                <h3>Komentar</h3>
            </div>
        </header>
        <!--Komentar-->
        <div class="main">
            <div class="komentar">
                <h4>Komentar Anda Membantu Kami</h4>
            </div>
            <div class="contact-form">
                <div class="form-title">Komentar</div>
                <form action="kirim.php" method="post">
                    <div class="form-item">Nama</div>
                    <input type="text" name="nama">
                    <div class="form-item">E-Mail</div>
                    <input type="text" name="email">
                    <div class="form-item">Komentar</div>
                    <textarea name="komen"></textarea>
                    <input type="submit" value="Kirim">
                </form>
            </div>
        </div>
        <!--Footer-->
        <div class="footer">
            <div class="copy-container">
                <p>SEMANGAT BELAJAR!</p>
                <p>Ciri Bilangan Habis Dibagi</p>
            </div>
        </div>
    </body>
</html>