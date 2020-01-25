<?php 
$conn =mysqli_connect("localhost", "root","","bootcamp_arcademy");
// ambil data
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;

}
return $rows;
}// 
function tambah($data){
	global $conn;
	$name =htmlspecialchars($data["name"]);//cek supaya tidak memproses script
$price = htmlspecialchars($data["price"]);
$id_category = htmlspecialchars($data["id_category"]);
$id_cashier = htmlspecialchars($data["id_cashier"]);
$query ="INSERT INTO `product`(`id`, `name`, `price`, `id_category`, `id_cashier`) VALUES ('','$name','$price','$id_category','$id_cashier')";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
//cek apakaha ada gambar yang diupload
}


function hapus($id){
	global $conn;
mysqli_query($conn, "DELETE FROM product where id =$id");
return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
$id = htmlspecialchars($data["id"]);
$name =htmlspecialchars($data["name"]);
$price = htmlspecialchars($data["price"]);
$id_category = htmlspecialchars($data["id_category"]);
$id_cashier = htmlspecialchars($data["id_cashier"]);

$query = "UPDATE product SET 
		name = '$name',
		price = '$price',
		id_category ='$id_category',
		id_cashier = '$id_cashier'
		WHERE id = $id
";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
 function cari($kategori){
 	$query = "SELECT * FROM product 
 	WHERE name LIKE '%$kategori%' OR
 			price LIKE '%$kategori%' OR
 			id_category LIKE '%$kategori%' OR
 			id_cashier LIKE '%$kategori%'
 	";// mencari berdasarkan kata yang ada
 	return query($query);
 }

// mysqli_fetch_row($result);
// var_dump()
 ?>