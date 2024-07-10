<?php
session_start();
require "koneksi.php";

if (!isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From&nbsp;Tambah&nbsp;Siswa</title>
    <link rel="stylesheet" href="asset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'koneksi.php';

                    if (isset($_POST["tambahdata"])) {
                        $tl1 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Namasiswa"]));
                        $tl2 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Tempatlahir"]));
                        $tl3 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Tanggallahir"]));
                        $tl4 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Alamatinggaltsekarang"]));
                        $tl5 = mysqli_real_escape_string($con, htmlspecialchars($_POST["domisili"]));
                        $tl6 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Nokk"]));
                        $tl7 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Nonik"]));
                        $tl8 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Jenis-Kelamin"]));
                        $tl9 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Agama"]));
                        $tl10 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Jumlah_saudara"]));
                        $tl11 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Ortukandunglakilaki"]));
                        $tl12 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Ortukandungperempuan"]));
                        $tl13 = mysqli_real_escape_string($con, htmlspecialchars($_POST["Jurusan"]));
                        
                        $sql = "INSERT INTO userdatasiswa VALUES ('', '$tl1', '$tl2', '$tl3', '$tl4', '$tl5', '$tl6', '$tl7', '$tl8', '$tl9', '$tl10', '$tl11', '$tl12', '$tl13' )";
                        
                            
                            $stmt = $con->prepare($sql);
                          //$stmt->bind_param("ss", $tl1, $tl2, $tl3, $tl4, $tl5, $tl6, $tl7, $tl8, $tl9, $tl10, $tl11, $tl12, $tl13); 
                          if ($stmt->execute()
                          ) 
                        {
                            echo "<script type='text/javascript'>alert('Sukses Kirim Data!');</script>";
                        } else {
                            echo "Error: " . $stmt->error;
                        }          
                        $stmt->close();
                        $con->close();
                          }
                        
                          
?>
<script>
    function validateForm() {
    let x = document.forms["qq"]["Namasiswa"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    let x2 = document.forms["qq"]["Tempatlahir"].value;
    if (x2 == "") {
      alert("Tempat Lahir must be filled out");
      return false;
    }
    let x3 = document.forms["qq"]["Tanggallahir"].value;
    if (x3 == "") {
      alert("Tanggal Lahir must be filled out");
      return false;
    }
    let x4 = document.forms["qq"]["Alamatinggaltsekarang"].value;
    if (x4 == "") {
      alert("Alamat Tinggal must be filled out");
      return false;
    }
    let x5 = document.forms["qq"]["Alamatinggaltsekarang"].value;
    if (x5 == "") {
      alert("Alamat Tinggal must be filled out");
      return false;
    }
    let x6 = document.forms["qq"]["Nokk"].value;
    if (x6 == "") {
      alert("Nomor KK must be filled out");
      return false;
    }
    let x7 = document.forms["qq"]["Nonik"].value;
    if (x7 == "") {
      alert("Nomor KK must be filled out");
      return false;
    }
    let x8 = document.forms["qq"]["Jenis-Kelamin"].value;
    if (x8 == "") {
      alert("Jenis Kelamin must be filled out");
      return false;
    }
    let x9 = document.forms["qq"]["Agama"].value;
    if (x9 == "") {
      alert("Agama_ must be filled out");
      return false;
    }
    let x10 = document.forms["qq"]["Jumlah_saudara"].value;
    if (x10 == "") {
      alert("Jumlah Saudara be filled out");
      return false;
    }
    let x11 = document.forms["qq"]["Ortukandunglakilaki"].value;
    if (x11 == "") {
      alert("Orang Tua Kandung Laki-laki be filled out");
      return false;
    }
    let x12 = document.forms["qq"]["Ortukandungperempuan"].value;
    if (x12 == "") {
      alert("Orang Tua Kandung Perempuan be filled out");
      return false;
    }
    let x13 = document.forms["qq"]["Jurusan"].value;
    if (x13 == "") {
      alert("Jurusan be filled out");
      return false;
    }
  }
</script>
    <div class="container">
        <div class="card ">
            <div class="card-header ">
                <h4>Tambah&nbsp;Siswa</h4>
            </div>
            <div class="card-body ">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" name="qq" method="post">
                <div class="from-group">
                    <label for="namasiswa">Nama Siswa</label>
                    <input type="text" name="Namasiswa" id="" class="form-control">
                </div>
                <div class="from-group">
                    <label for="Tempatlahir">Tempat lahir</label>
                    <input type="text" class="form-control" name="Tempatlahir">
                </div>
                <div class="from-group">
                    <label for="Tanggallahir">Tanggal lahir</label>
                    <input type="date" class="form-control" name="Tanggallahir">
                </div>
                <div class="from-group">
                    <label for="Alamatinggaltsekarang">Alamat Tinggal sekarang</label>
                    <input type="text" class="form-control" name="Alamatinggaltsekarang">
                </div>
                <div class="from-group">
                    <label for="domisili">Domisili</label>
                    <input type="text" class="form-control" name="domisili">
                </div>
                <div class="from-group">
                    <label for="nkk">No KK</label>
                    <input type="text" class="form-control" name="Nokk">
                </div>
                <div class="from-group">
                    <label for="nnik">No NIK </label>
                    <input type="text" class="form-control" name="Nonik">
                </div>
                <div class="from-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="Jenis-Kelamin" id="" class="form-control">
                    <option selected>Silahkan Pilih</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="from-group">
                    <label for="ag">Agama</label>
                    <select name="Agama" id="" class="form-control">
                        <option Selected>Silahkan Pilih</option>
                        <option value="khatolik">Khatolik</option>
                        <option value="islam">Islam</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="kristen">Kristen</option>
                    </select>
                </div>
                <div class="from-group">
                    <label for="js">Jumlah Saudara</label>
                    <input type="text" class="form-control" name="Jumlah_saudara">
                </div>
                <div class="from-group">
                    <label for="Ortukandunglakilaki">Ortu Laki-laki</label>
                    <input type="text" class="form-control" name="Ortukandunglakilaki">
                </div>
                <div class="from-group">
                    <label for="ortupp">Ortu Perempuan</label>
                    <input type="text" class="form-control" name="Ortukandungperempuan">
                </div>
                <div class="from-group">
                    <label for="jj">Jurusan</label>
                    <select name="Jurusan" id="" class="form-control">
                        <option Selected>Silahkan Pilih</option>
                        <option value="TJKT"> TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI</option>
                        <option value="MPLB"> MANAJEMEN PERKANTORAN DAN LAYANAN BISNIS</option>
                        <option value="ATPH"> AGRIBISNIS TANAMAN PANGAN</option>
                        <option value="BKP"> TEKNIK KONTRUKSI DAN PERUMAHAN</option>
                        <option value="TKR"> TEKNIK KENDARAAN RINGAN</option>
                        <option value="BP"> BROADCASTING DAN PERFILEMAN</option>
                    </select>
                </div>
                <br>
                <button class="btn btn-success btn-sm btn-block"type="submit" name="tambahdata"><b>Tambah&nbsp;Data</b></button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>