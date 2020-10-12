<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bilangan</title>
        <link rel="stylesheet" type="text/css" href="kirim.css">
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
                <h4>Terima Kasih atas Komentar Anda</h4>
            </div>
            <div class="display-content">
                <div class="form-title">Terkirim</div>
                <div class="form-item">Nama</div>
                <?php echo $_POST['nama']; ?>
                <div class="form-item">E-Mail</div>
                <?php echo $_POST['email']; ?>
                <div class="form-item">Komentar</div>
                <?php echo $_POST['komen']; ?>
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