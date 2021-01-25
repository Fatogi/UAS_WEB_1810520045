<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/logo.jpeg">

    <title>A.A.H Pro</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/blog.css" rel="stylesheet">

    <script src="assets/js/bootstrap.min.js"></script>

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">News</a>
         <a href="tambah_pelanggan.php" aligen="right">Creat Customer</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"></h1>
        <p class="lead blog-description"></p>
      </div>

      <div class="row">
       <?php 
        if (isset($_GET['file'])) {
          $filename = $_GET['file'].'.php';
          if (file_exists($filename)) {
            include $filename;
          }else{
            echo"halaman tidak ada";
          }
        }else { ?>
          <div class="col-sm-8 blog-main sidebar-module sidebar-module-inset">
          <div class="blog-post">
             <?php 
            require 'koneksi.php';
            $query = " SELECT * FROM post";
            $record =mysqli_query($koneksi, $query);
           ?>
           <?php  while($data= mysqli_fetch_array($record)) { ?>
            <p class="blog-post-title"><?php echo $data['judul'] ?></p>
            <p class="blog-post-meta"><?php echo $data['tanggal'] ?> <?php echo $data['author'] ?></p>
             <p> <?php echo $data['isi'] ?></p>
             <a href="?file=post&id=<?php echo $data['id']?>" class="pull-right"> selengkapnya</a>
            <?php } ?>

          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->
        <?php } ?>
        

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Rumah Makan A.A.H menyediakan aneka ramag maknan dan minuman yang siap memuaskan lapar dan dahaga anda dengan haga yang bersahabat dengan dompet sahabat</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>SosMed</h4>
            <ol class="list-unstyled">
              <li><a href="#">Facebook : RumahmakanA.A.H</a></li>
              <li><a href="#">IG: @RumahmakanA.A.H</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Web Promosi <a href="http://getbootstrap.com">Pro</a> by <a href="https://twitter.com/mdo">@afifalhafiz</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
