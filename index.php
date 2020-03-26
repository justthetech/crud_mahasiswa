<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<button type="button"  class="btn btn-outline-primary"><a href="tambah.php"> Tambah Mahasiswa</a></button>
<!-- <a href="tambah.php"></a> -->
<br><br>


<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Aksi</th>
      <th scope="col">Gambar</th>
	  <th scope="col">Gambar</th>
	  <th scope="col">Nim</th>
	  <th scope="col">Nama</th>
	  <th scope="col">Jurusan</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<button class="btn btn-danger"><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a></button>
			<button class="btn btn-success"><a href="">Ubah</a></button>
			
			<!--  |
			 -->
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["nim"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
  </thead>
</table>
<!-- <table  border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th> 
		<th>Nim</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr> -->
<br>

<!-- <h1 class="display-1">Display 1</h1> -->


</body>
</html>