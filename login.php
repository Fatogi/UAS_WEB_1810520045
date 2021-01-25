<?php 
  session_start();
  if (isset($_SESSION['login']) && $_SESSION['login']== true) {
    echo "<script> alert('silahkan login terlebih dahulu'); window.location.href='admin/login.php'</script>";
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" method="post" action="">
        <h2 class="form-signin-headin">Silahkan Masuk</h2>
        <label for="inputEmail"  class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password"  id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">LOGIN</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php 
  if (isset($_POST['login'])) {
    require 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user where username = '$username' and password='$password'";
    $record = mysqli_query($koneksi, $query);
    if ($row = mysqli_fetch_array($record)) {
      

      $_SESSION['username']= $row['username'];
      $_SESSION['nama']= $row['nama'];
      $_SESSION['login']= TRUE;
      header('location: admin/index.php');

    } else echo "<script> alert('username atau password salah') </script>";
  }
 ?>