
<?php 
require 'function.php';
$mahasiswa = query("SELECT  * FROM product");
 
if( isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
	# code...

}
 ?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <script src="js/script.js"></script>
	<title>Bootcamp arcademy</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bootcamp Arcademy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>

<div class="container">
	<div class="row">
		<div class="col">
<a href="tambah.php" class="btn btn-primary my-3">add</a>
<form action="" method="post">
	
<input type="text" name="keyword" size="40" autofocus 
	placeholder="Masukan Keyword.." id="keyword">
	<button type="submit" name="cari" class="btn btn-secondary">search</button><br>
</form>
<h1>List Product</h1>
<table class="table my-2">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Action</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>

    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
<?php foreach ($mahasiswa as $row) : ?>
<tr>

	<td><?= $i; ?></td>
	<td> 
		<a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-warning pill">ubah</a>
		<a class="btn btn-danger pill" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a></td>
		<td><?= $row['name']; ?></td>
		<td><?= $row['price']; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</tbody>
</table>
			
		</div>
	</div>
</div>
</body>
</html>