<?php 
  require '../koneksi.php';
  if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $tampil = "SELECT * FROM post WHERE  id = $id";
      $hasil =mysqli_query($koneksi, $tampil);
      if ($data = mysqli_fetch_array($hasil)) {
          $judul = $data['judul'];
          $isi = $data['isi'];
          $harga= $data['harga'];
          $tanggal = $data['tanggal'];
          $kategori = $data['kategori'];

      }
    }
    ?>
<h1> Ubah Post </h1>
<div class="row">
  <div class="col-md-7">
    <form class="form-horizontal" method="post" action="">
      <div class="form-group">
        <label class=" col-md-2 control-label"> Produk </label>
        <div class="col-md-6">
          <input type="text" name="judul" class="form-control" placeholder="masukkan nama prosuk" value="<?php echo $judul ?>">
        </div>
      </div>
      <div class="form-group">
        <label class=" col-md-2 control-label"> Deskripsi </label>
        <div class="col-md-10">
          <textarea  type= "text" name="isi" class="form-control" style="height: 10em" value="<?php echo $isi ?>" ></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class=" col-md-2 control-label"> Harga </label>
        <div class="col-md-6">
          <input type="number" name="harga" class="form-control" placeholder="Harga Rp." value="<?php echo $harga ?>">
        </div>
      </div>
       <div class="form-group">
        <label class=" col-md-2 control-label"> Tanggal </label>
        <div class="col-md-6">
          <input type="text" name="tanggal" class="form-control" placeholder="yyyy/bb/mm" value="<?php echo $tanggal ?>">
        </div>
      </div>
      <div class="form-group">
        <label class=" col-md-2 control-label"> Kategori </label>
        <div class="col-md-6">
          <input type="text" name="kategori" class="form-control" placeholder="masukkan kstegori" value="<?php echo $kategori ?>">
        </div>
      </div>
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
    $tanggal = $_POST['tanggal'];
    $kategori = $_POST['kategori'];

    
    $query = "UPDATE post SET judul= '$judul', isi= '$isi', harga= '$harga', tanggal='$tanggal', 
    kategori='$kategori' WHERE id=$id";
    $simpan = mysqli_query($koneksi, $query);
    if ($simpan) {
      echo "<script> alert('simpan berhasil'); window.location.href='?file=post/tampil_post';</script>";
    }

  }
 ?>