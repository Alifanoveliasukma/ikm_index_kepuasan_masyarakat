<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>INDEKS KEPUASAAN MASYARAKAT | Ngoding Pintar</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid bg-info text-white">
        <div class="container text-center">
            <h1 class="display-4">Ngoding Pintar</h1>
               <p class="lead">
                <h2>
                    INDEX KEPUASAN MASYARAKAT<br> Terhadap Pelayanan Kantor Ngoding Pintar
                </h2>
            </p>
        </div>
    </div>
    
    <style type="text/css">
        .box{
            padding: 30px 40px;
            border-radius: 5px;
        }
    </style>
    <?php
       //panggil koneksi database
    include "koneksi.php";
    //tampilkan data dari table tikm
    $tampil = mysqli_query($koneksi, "SELECT * from tikm");
    $data = mysqli_fetch_array($tampil);
    ?>
    <!-- Awal Container -->
    <div class="container">
        <div class="alert alert-danger" role="alert">
        Perhatian!! untuk memberikan penilaian/poling/suara silahkan klik Icon/Emoji
        </div>
       
        <div class="row">
            <div class="col-md-4">
                <div class="bg-primary box text-white">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>MEMUASKAN</h5>
                            <h2>[ <?=$data['puas']?> ]</h2>
                            <h5>Suara</h5>
                        </div>
                        <div class="col-md-6">
                                <a href="Simpan.php?ket=puas" title="jika anda merasa Puas dengan pelayanan kami, Klik Icon ini">
                                <img src="img/puas.png" style="width: 100px">
                        </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-success box text-white">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Cukup</h5>
                            <h2>[ <?=$data['cukup']?> ]</h2>
                            <h5>Suara</h5>
                        </div>
                        <div class="col-md-6">
                                <a href="Simpan.php?ket=cukup" title="jika anda merasa Cukup dengan pelayanan kami, Klik Icon ini">
                                <img src="img/cukup.png" style="width: 100px">
                        </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-danger box text-white">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>KURANG</h5>
                            <h2>[ <?=$data['kurang']?> ]</h2>
                            <h5>Suara</h5>
                        </div>
                        <div class="col-md-6">
                                <a href="Simpan.php?ket=kurang" title="jika anda merasa Kurang dengan pelayanan kami, Klik Icon ini">
                                <img src="img/kurang.png" style="width: 100px">
                        </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    
    <!-- Akhir Container -->
    <footer class="bg-info text-center text-white mt-3 bt-2 pb-2">
        Create by Channel Youtube "Ngodingpintar"
    </footer>

 </body>
</html>