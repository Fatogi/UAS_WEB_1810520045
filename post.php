<form border="2px">
  <div class=" col-sm-8 blog-main sidebar-module sidebar-module-inset">
          <div class="blog-post">
             <?php 
            require 'koneksi.php';
            $id =$_GET['id'];
            $query = " SELECT * FROM post WHERE id=$id";
            $record =mysqli_query($koneksi, $query);
           ?>
           <?php  while($data= mysqli_fetch_array($record)) { ?>
            <div>
              <img src="admin/post/img/<?php  echo $data['file'] ?>" width="250px" height="100px">
              <h3 class="blog-post-title"><?php echo $data['judul'] ?></h3>
              <p class="blog-post-meta"><?php echo $data['tanggal'] ?> 
              <p> Harga Normal Rp. <?php echo $data['harga'] ?></p>
              <p>Nikmati Potongan Harga Rp. <?php echo $data['diskon'] ?> dengan Kode Promo</p>
            <a href="pesanan.php" class="btn btn-primary" > Pesan</a> 
              <p> <?php echo $data['isi'] ?></p>


            </div>
            
          
            <a href="index.php"> kembali</a>
          </div><!-- /.blog-post -->
            <?php } ?>
           
        </div><!-- /.blog-main -->

</form>