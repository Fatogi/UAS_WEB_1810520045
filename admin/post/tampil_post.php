<?php 
	require '../koneksi.php';
	$query = " SELECT * FROM post";
	$record =mysqli_query($koneksi, $query);
 ?>
<h1>POST</h1>
<a class="btn btn-primary btn-xs pull-right" href="?file=post/tambah_post">Tambah Post</a><br><br>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nama Produk</th>
			<th>Author</th>
			<th>Deskripsi</th>
			<th>Harga</th>
			<th>Diskon</th>
			<th>Tanggal</th>
			<th>Kategori</th>
			<th>gambar</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php  while($data= mysqli_fetch_array($record)) { ?>
		<tr>
			<td align="center"><?php  echo $data['id'] ?> </td>
			<td align="center"><?php  echo $data['judul'] ?> </td>
			<td align="center"><?php  echo $data['author'] ?> </td>
			<td align="center"><?php  echo $data['isi'] ?> </td>
			<td align="center"><?php  echo $data['harga'] ?> </td>
			<td align="center"><?php  echo $data['diskon'] ?> </td>
			<td align="center"><?php  echo $data['tanggal'] ?> </td>
			<td align="center"><?php  echo $data['kategori'] ?> </td>
			<td align="center"> <img src="post/img/<?php  echo $data['file'] ?>" width="150px" height="100px"> </td>
			<td>
			 <a href="?file=post/ubah_post&id=<?php
						echo $data['id']?>" role="botton" class="btn btn-warning btn-xs"> Edit</a>
			<a href="?file=post/hapus_post&id=<?php
						echo $data['id']?>" role="botton" class="btn btn-xs btn-danger "> Delete </a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>