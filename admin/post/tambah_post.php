<h1> Tambah Post </h1>
<div class="row">
	<div class="col-md-7">
		<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label class=" col-md-2 control-label"> Produk </label>
				<div class="col-md-6">
					<input type="text" name="judul" class="form-control" placeholder="masukkan judul post">
				</div>
			</div>
			<div class="form-group">
				<label class=" col-md-2 control-label"> Deskripsi </label>
				<div class="col-md-10">
					<textarea  name="isi" class="form-control" style="height: 10em"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class=" col-md-2 control-label"> Harga  Rp.</label>
				<div class="col-md-6">
					<input type="text" name="harga" class="form-control" placeholder="Rp.">
				</div>
			</div>
			<div class="form-group">
				<label class=" col-md-2 control-label"> Diskon  Rp.</label>
				<div class="col-md-6">
					<input type="text" name="diskon" class="form-control" placeholder="Rp.">
				</div>
			</div>
			<div class="form-group">
				<label class=" col-md-2 control-label"> Tanggal </label>
				<div class="col-md-6">
					<input type="date" name="tanggal" class="form-control" placeholder="hari/bulan/tahun">
				</div>
			</div>
			<div class="form-group">
				<label class=" col-md-2 control-label"> Kategori </label>
				<div class="col-md-6">
					<input type="text" name="kategori" class="form-control" placeholder="masukkan kstegori produk">
				</div>
			</div>
                <input type="file" name="gambar" >
                  
                        
			<div class="form-group">
				<div class="col-md-offset-2 col-md-6">
					<input type="submit" name="simpan" class="btn btn-primary" value="Save">
				</div>
			</div>
		</form>
	</div>
</div>
<?php 
	if (isset($_POST['simpan'])) {
		require '../koneksi.php';
		$judul = $_POST['judul'];
		$author = $_SESSION['username'];
		$isi = $_POST['isi'];
		$harga = $_POST['harga'];
		$diskon = $_POST['diskon'];
		$tanggal = $_POST['tanggal'];
		$kategori = $_POST['kategori'];
		$nama_file = $_FILES['gambar']['name'];
		$source = $_FILES ['gambar']['tmp_name'];
		$folder = 'post/img/';

		move_uploaded_file($source, $folder.$nama_file);

		$query = "INSERT INTO post values (null,'$judul', '$author', '$isi' , '$harga','$diskon','$tanggal', '$kategori', '$nama_file')";
		$simpan = mysqli_query($koneksi, $query);
		if ($simpan) {
			echo "<script> alert('simpan berhasil'); window.location.href='?file=post/tampil_post';</script>";
		}

	}

 ?>
 