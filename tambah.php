<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1 class="text-center">Tambah data mahasiswa</h1>

	<form action="" method="post">
	<div class="form-group row">
    <label  class="col-sm-2 col-form-label text-center" for="nim">Nim</label>
    <div class="col-sm-10">
	  <input class="form-control" type="number" name="nim" id="nim" required>
	  <small class="form-text text-muted">Nim Berupa 9 angka</small>
	</div>
	</div>
	  
	  <div class="form-group row">
    <label  class="col-sm-2 col-form-label text-center " for="nama">Nama</label>
    <div class="col-sm-10">
	  <input class="form-control" type="text"  name="nama" id="nama" required>
	  <small  class="form-text text-muted">Isi nama lengkap Anda</small>
    </div>
	  </div>
	  <div class="form-group row">
    <label  class="col-sm-2 col-form-label text-center" for="email">Email</label>
    <div class="col-sm-10">
	  <input class="form-control" type="text" name="email" id="email" required>
	  <small class="form-text text-muted">Email Harus Berupa nama.nim@mhs.unimal.ac.id</small>
    </div>
	  </div>
	  <div class="form-group row">
    <label  class="col-sm-2 col-form-label text-center" for="jurusan">Jurusan</label>
    <div class="col-sm-10">
	  <input class="form-control" type="text" name="jurusan" id="jurusan" required>
	  <small id="emailHelp" class="form-text text-muted">Jurusan Anda Di Universitas</small>
    </div>
	  </div>
	  <div class="form-group row">
    <label  class="col-sm-2 col-form-label text-center" for="gambar">Gambar</label>
    <div class="col-sm-10">
	  <input class="form-control" type="text" name="gambar" id="gambar" required>
	  <small id="emailHelp" class="form-text text-muted">Layar Merah</small>
    </div>
	  </div>
		
			<div class="form-group row">
    <label  class="col-sm-2 col-form-label text-center" for="Tambah_data">KLIK!!</label>
    <div class="col-sm-10">
		<button type="submit" name="submit" class="btn btn-primary" >Tambah Data</button>
    </div>
	  </div>

	</form>




</body>
</html>

