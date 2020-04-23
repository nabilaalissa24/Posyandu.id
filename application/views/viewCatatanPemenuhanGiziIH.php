<!DOCTYPE html>
<html>
<head>
    <title>Ibu Hamil | Petugas Kesehatan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/viewCatatanPemenuhanGiziIH.css">
    <script type="text/javascript" src="assets/js/menu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
</head>
<body>
    <!-- NAVBAR YHA -->

     <?php include 'v_menu2.php'; ?>

    <!-- AKHIR SEYENK -->
    <div>
      <h3 class="col-h" style="text-align:center;">Catatan Pemenuhan Gizi</h3>
    </div>
    <div>
    </div>
    <div class="col-lg-12">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
            <br>
            <br>
            <table class="table table-hover table-bordered">
            <thead>
            <tr bgcolor='#F5B7B1'>
                <th scope="col">No.</th>
                <th scope="col">Tgl Pemeriksaan</th>
                <th scope="col">Nama Petugas Pemeriksa</th>
                <th scope="col">Umur Anak</th>
                <th scope="col">Vitamin Yang Diberikan</th>
                <th scope="col">Nasihat Pemenuhan Gizi Oleh Petugas Kesehatan</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $i=1;
                foreach ($profile_catatanpemenuhangizi as $pcpg) {
            ?>
            <tr bgcolor="#F8F9F9">
                <th scope="row"><?php echo($i++)?></th>
                <th scope="row"><?php echo $pcpg['tanggal']?></th>
                <th scope="row"><?php echo $pcpg['nama_petugas']?></th>
                <th scope="row"><?php echo $pcpg['umur']?></th>
                <th scope="row"><?php echo $pcpg['vitamin']?></th>
                <th scope="row"><?php echo $pcpg['nasihat']?></th>
            </tr>
            </tbody>
            <?php 
                }
            ?>
            </table>
    </div>
    </div>
</body>
</html>