<!-- PHP untuk menghilangkan semua text errorr -->
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING))
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styleCal.css">
  <script language="javascript" src="./calculator.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>CRUD Bucket Google Cloud</title>
<script src="jquery-3.6.0.js"></script>
  <script>
    $(document).ready(function(){
      $("#flip").click(function(){
        $("#kotak2").slideToggle("slow");
      });
    });
  </script>
  <style type="text/css">
    .tab{
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        background-color: lightskyblue;
    }
    table{
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        background-color: lightskyblue;
    }
    th,td {
            text-align: left;
            padding: 16px;
        }

    tr:nth-child(even){
        background-color: #f2f2f2;
    }    
    #kotak2, #flip{
       padding: 5px;
       text-align: center;
       background-color: #a7dbd8;
       border: solid 2px #e0e4cc;
       border-radius: 5px;
    }

    #kotak2{
       padding: 50px;
    }
    .teh, .ted {
        text-align: left;
        padding: 16px;
    }

    .ter:nth-child(even){
        background-color: #f2f2f2;
    }
    form{
      text-align: left;
    }
    .calculator{
      margin-left: 37%;
    }
    body{
      background-color: darkcyan ;
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
  <h1>UPLOAD FILE TO BUCKETS</h1>

  <form id="fileUploadForm" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="file" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" name="upload" class="btn btn-primary form-control">Upload</button>
            </div>
  </form>
  <?php
      include "storage.php";
      include "DBkoneksi.php";
      $storage = new storage();
      /*Create a new bucket*/
      // $storage->createBucket('durgeshsahani');

      /*List all bucket*/
      // $storage->listBuckets();

      /*Upload a file*/
        if (isset($_POST['upload'])) {
          $db = new DBkoneksi();
          $conn = $db->connect();
          $sql = "INSERT INTO files values(null, :name, :size, NOW())";
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':name', $_FILES['file']['name']);
          $stmt->bindParam(':size', $_FILES['file']['size']);
          $stmt->execute();
          $storage->uploadObject('exam-bucket-2', $_FILES['file']['name'], $_FILES['file']['tmp_name']);
        }
        /*List objects under a bucket*/
        echo "<br>"."<br>";
        $storage->listObjects('exam-bucket-2');

        /*Delete an object*/
        //$storage->deleteObject('exam-bucket-2', 'c.jpg');

        /*Delete a bucket*/
        //$storage->deleteBucket('sahani');

        /*Download file*/
        $storage->downloadObject('exam-bucket-2', 'b.jpg', "C:");

        /*Edit a file*/
        /*$str =  file_get_contents('gs://durgesh/notes.txt');
        echo "<pre>";
        echo $str;
        file_put_contents('gs://durgesh/notes.txt', "LearnWebCoding")*/
        echo "<br>"."<br>";
        $imageUrl = $storage->getImageUrl('exam-bucket-2', 'b.jpg');
        ?> <br><br><br><br>
    <a href="landingPage.php" class="btn btn-danger">Kembali Ke Menu Utama</a>
</body>
</html>