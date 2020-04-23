<!DOCTYPE html>
<html>
<head>
	<title>Ibu Hamil | Posyandu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- <link href="assets/css/formDaftarIH.css" rel="stylesheet"> -->
  <link href="assets/css/profilIH.css" rel="stylesheet">
  <script type="text/javascript" src="assets/js/menu.js"></script>
</head>

<body>

  <!-- NAVBAR -->

	<?php include 'v_menu2.php'; ?>

  <!-- AKHIR SEYENK -->

  <div class="container">
    <div>
      <h3 class="col-h3">Profil Ibu Hamil</h3>
    </div>
    <br>
    <div>
        <div class="col-lg-1"></div>
      	<div class="col-lg-5 col-isi">
        	<form>
          	<div class="form-group">
            	<label for="formGroupExampleInput">ID Registrasi</label>
            	<input type="text" class="form-control" id="formGroupExampleInput" disabled>
          	</div>
          	<div class="form-group">
            	<label for="formGroupExampleInput">Nama</label>
            	<input type="text" class="form-control" id="formGroupExampleInput" disabled>
          	</div>
          	<div class="form-group">
            	<label for="exampleFormControlInput1">Username</label>
            	<input type="text" class="form-control" id="formGroupExampleInput" disabled>
          	</div>
          	<div class="form-group">
            	<label for="inputPassword">Password</label>
              	<input type="password" class="form-control" id="inputPassword" disabled>
          	</div>
          	<div class="form-group">
            	<label for="exampleFormControlTextarea1">Alamat</label>
            	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
          	</div>
          	<div class="form-group">
            	<label for="formGroupExampleInput">TTL</label>
            	<input type="text" class="form-control" id="formGroupExampleInput"  disabled>
          	</div>
          	<div class="form-group">
            	<label for="formGroupExampleInput">Kehamilan Ke-</label>
            	<input type="text" class="form-control" id="formGroupExampleInput" disabled>
          	</div>
          	<div class="form-group">
            	<label for="formGroupExampleInput">No. Telepon</label>
            	<input type="text" class="form-control" id="formGroupExampleInput" disabled>
          	</div>
            <button type="submit" class="btn btn-primary">Edit</button>
        	</form>
      	</div>
      	<div class="col-lg-4"></div>
    </div>
  </div>
</body>
</html>