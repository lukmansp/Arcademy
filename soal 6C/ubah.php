<?php 
require 'function.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM product WHERE id = $id")[0];

if( isset($_POST["submit"])){

if(ubah($_POST) > 0 ){
	echo "<script> alert('data dirubah');
	document.location.href = 'index.php';
	</script>
	";
}
else {
	echo "<script> alert('gagal dirubah');
	document.location.href = 'ubah.php';
	</script>
	";
}
	# code...
}
// cek keberhasilan

 ?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bootcamp Arcademy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>
<h1>Ubah Mahasiswa</h1>

<div class="container">
<form action="" method="post">
	
<div class="card" style="width: 18rem;">
  <div class="card-body">
   <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Edit data product</label>
    <input type="hidden" name="id" value="<?= $mhs['id']?>">
    <input type="text" class="form-control" name="name" id="name" required value="<?= $mhs['name'];?>">
    <input type="text" class="form-control my-3" name="price" id="price" value="<?= $mhs['price'];?>" required>
    <input type="text" class="form-control my-3" name="id_category" id="id_category" value="<?= $mhs['id_category'];?>" required>
    <input type="text" class="form-control my-3" name="id_cashier" id="id_cashier" value="<?= $mhs['id_cashier'];?>" required>

  </div>
    <button type="submit" name="submit" class="btn btn-primary pl-3"> Edit</button>
  </div>
</div>
</div>
	
</form>
</body>
</html>
<!-- <div style="position:absolute;top: 0;bottom: 0;left: 0;right: 0;background-color: black;font-size: 80px;color: red;text-align: center;">anda dihack</div> -->