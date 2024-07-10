<?php
session_start();
require "koneksi.php";
if (!$_SESSION['login']) {
    // Redirect ke halaman login
    header('Location: index.php');
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="fontkanit.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="kanit-thin">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#"><b>SIDA PPDB 2024</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tambahsiswa.php">Tambah&nbsp;Siswa</a>
        </div>
      </li>
      </div>
      <span class="navbar-text">
      <a href="logout.php" class="btn btn-danger btn-sm"><b class="text-white">Keluar</b></a>
    </span>
  </div>
</nav>
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card scale-up-center" style="width: 18rem;">
                <div class="card-header text-center">
                    <b><h4>DATA SISWA MASUK</h4></b>
                </div>
                <div class="card-body text-center kanit-extrabold">
                    <h1 class="font-sz1 tada">8</h1>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card scale-up-center" style="width: 18rem;">
                <div class="card-header text-center">
                    <b><h6>BANYAK ASAL SISWA AREA KAYAN HILIR</h6></b>
                </div>
                <div class="card-body text-center kanit-extrabold">
                    <h1 class="font-sz1 tada">4</h1>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card scale-up-center" style="width: 18rem;">
                <div class="card-header text-center">
                    <b><h6>BANYAK ASAL SISWA LUAR AREA KAYAN HILIR</h6></b>
                </div>
                <div class="card-body text-center kanit-extrabold">
                    <h1 class="font-sz1 tada">4</h1>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>