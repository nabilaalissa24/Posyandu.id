<!DOCTYPE html>
<html>
<head>
  <title>Petugas Kesehatan | Posyandu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <link href="assets/css/formCatatanPemenuhanGizi.css" rel="stylesheet">
</head>

<body>
  <!-- NAVBAR -->
  <?php include 'navbar-PK.php'; ?>

  <!-- AKHIR SEYENK -->

  <div class="container">
  <div class="col-h"></div>
  <div>
    <h3 class="col-h3">Form Pemenuhan Gizi</h3>
  </div>
  <br>
  <div>
  <div class="col-lg-1"></div>
  <div class="col-lg-5 col-isi">
    <form>
      <div class="form-group">
        <label>Tgl Pemeriksaan</label>
        <input type="date" id="datepicker" width="270" />
          <script>
            $('#datepicker').datepicker({
              uiLibrary: 'bootstrap'
            });
          </script>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Nama Petugas Pemeriksa</label>
        <input type="text" class="form-control" id="formGroupExampleInput">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Nama Ibu</label>
        <input type="text" class="form-control" id="formGroupExampleInput">
      </div>
      <div class="form-group">
            <label for="exampleFormControlInput1">ID registrasi</label>
            <input type="text" class="form-control" id="formGroupExampleInput">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">NIP</label>
            <input type="text" class="form-control" id="formGroupExampleInput">
          </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Umur Anak</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>6-11 Bulan</option>
            <option>1-2 Tahun</option>
            <option>2-3 Tahun</option>
            <option>3-4 Tahun</option>
            <option>4-5 Tahun</option>
          </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Vitamin Yang Diberikan</label>
        <input type="text" class="form-control" id="formGroupExampleInput">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Nasihat Pemenuhan Gizi Oleh Tenaga Kesehatan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  </div>
  <div class="col-lg-2"></div>
  </div>
</div>
</body>

</html>