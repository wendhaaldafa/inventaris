<?php 
    include 'koneksi.php';
         
      $sql = "select * from tb_inventori";
      $list_data = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css";>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>

    <!-- box Form -->
    <section class="box-form">

        <h2 class="heading">
            Data Aplikasi
        </h2>

        <div class="box">
            <table border= 1 cellpadding = 10 cellspacing = 0>
                <tr>
                    <th>No</th>
                    <th>Nama Aplikasi</th>
                    <th>Deskripsi Aplikasi</th>
                    <th>Tanggal Pembuatan</th>
                    <th>SKPD Pengampu</th>
                    <th>Letak Server</th>
                </tr>

                <?php $y = 1 ?>
                <?php 
                    // output data of each row
                    while($row = mysqli_fetch_assoc($list_data)){
                      ?>
                      <tr>
                      <th><?php echo $y; ?></th>
                    <th><?php echo $row["nama_aplikasi"] ?></th>
                    <th><?php echo $row["deskripsi_aplikasi"] ?></th>
                    <th><?php echo $row["tgl_pembuatan"] ?></th>
                    <th><?php echo $row["SKPD_pengampu"] ?></th>
                    <th><?php echo $row["server"] ?></th>
                    </tr>
                      <?php
                     $y++;
                    }
                 
                ?>
                
            </table>
        </div>

    </section>
    
</body>
</html>