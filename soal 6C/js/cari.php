<?php 
require '../function.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM product 
 	WHERE name LIKE '%$keyword%' OR
 			price LIKE '%$keyword%' OR
 			id_category LIKE '%$keyword%' OR
 			id_cashier LIKE '%$keyword%'
 	";
$mahasiswa = query($query);
 ?>
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