<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Biodata</title>
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        center {
            margin-top: 7rem;
        }

        center a {
            text-decoration: none;
        }

        center a input {
            font-size: 25px;
            height: 70px;
            width: 250px;
        }

        nav span {
            color: white;
            font-weight: bold;
        }
        .card-img-top{
            width: 50%;
            height: 50%;
            margin-left: 25%;
            margin-top: 10%;
        }
        .card-body{
            margin-left: 27%;
        }
        table{
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        th,td {
            text-align: left;
            padding: 16px;
        }

         tr:nth-child(even){
            background-color: #f2f2f2;
        }
    </style>
    </head>
    <body>
        <!-- Navbar -->
    <nav class="navbar navbar-light " style="background-color: #80BD9E;">
        <div class="container-fluid">
            <span style="font-weight: bold;" class="navbar-brand mb-0 h1 text-light">Kelompok 8</span>
            <span id="tanggalwaktu"></span>
                <script>
                    var tw = new Date();
                    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                    else(a = tw.getTime());
                    tw.setTime(a);
                    var tahun = tw.getFullYear();
                    var hari = tw.getDay();
                    var bulan = tw.getMonth();
                    var tanggal = tw.getDate();
                    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
                    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
                    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun + " | " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10) ? "0" : "") + tw.getMinutes() + (" WIB ");
                </script>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- isi -->
    <br>
    <div class="container-fluid">
<?php
	include "DBkoneksi.php";
    include "storage.php";

    require_once "vendor/autoload.php";
 
    use Google\Cloud\Storage\StorageClient;

    try {
        $storage = new StorageClient([
            'keyFilePath' => getcwd(). '/friendly-access-364700-37a653238b1e.json',
        ]);
      
        $bucket = $storage->bucket('exam-bucket-2');
        $object = $bucket->object('a.jpg');
      
        $object->delete();
    } catch(Exception $e) {
        if ($result) {
            echo "File berhasil dihapus";
    ?>
        <a href="bucket.php" class="btn btn-success"> Lihat data </a>
    <?php 
        }
        else{
            echo "File gagal dihapus".mysqli_error($connect);
        }
    }
    ?>

</div>
     <!-- Footer -->
    <footer class="text-white text-center fixed-bottom" style="background-color: #80bdad;">
        <p><b>©Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>