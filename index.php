<?php 
session_start();
require "koneksi.php";

if (isset($_SESSION["login"])) {
  header("Location: beranda.php");
  exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-SIDA</title>
    <link rel="stylesheet" href="asset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body>
<?php 
                    if (isset($_POST["login"])) {
                        $username = mysqli_real_escape_string($con, htmlspecialchars($_POST["username"]));
                        $password = mysqli_real_escape_string($con, htmlspecialchars($_POST["password"]));
                        $query = "SELECT * FROM user WHERE username='$username'";
                        $result = mysqli_query($con, $query);
                        // cek username
                        if (mysqli_num_rows($result)===1) {
                          // cek password
                          $row = mysqli_fetch_assoc($result);
                          if (password_verify($password,$row["password"])) {
                            // set session
                            $_SESSION["login"] = true;
                            $_SESSION["user"] = $row["username"];
                            $_SESSION["id"] = $row["id"];
                            header("Location: index.php");
                            exit;
                            
                          }
                        }
                            
                        $error = true;
                      }
?>
    <div class="container">
    <?php if (isset($error)) : ?>
            <script>
                 Swal.fire({
                    title: 'Error!',
                    text: 'Tidak dapat Masuk! Silahkan Cek Username dan Password Anda',
                    icon: 'error',
                    confirmButtonText: 'Cool'
                    })
            </script>
                      <?php endif; ?>
        <center class="es">
        <div class="card shake" style="width: 20rem;">
            <div class="card-header">
                <h4>Login SIDA PPDB 2024</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="un" class="float-left">Username</label>
                        <input type="text" name="username" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pw" class="float-left">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    <button type="submit" name="login" class="btn btn-success btn-block">Login</button>
                </form>
            </div>
        </div>
        </center>
    </div>
</body>
</html>