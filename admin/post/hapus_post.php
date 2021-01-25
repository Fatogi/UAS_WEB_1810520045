<?php require '../koneksi.php';
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "DELETE FROM post WHERE id=$id";
	$hapus = mysqli_query( $koneksi, $query);
	if($hapus){
		header('location: ?file=post/tampil_post');
	}
}
 ?>