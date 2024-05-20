<?php
session_start();
include 'db.php';
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Pastikan koneksi ke database berhasil
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Proses input atau update harga baru
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $harga_baru = $_POST['harga'];
    $id = $_POST['id'];

    if ($id) {
        // Update harga
        $query = "UPDATE harga SET harga='$harga_baru' WHERE id='$id'";
        $message = "Harga berhasil diperbarui.";
    } else {
        // Insert harga baru
        $query = "INSERT INTO harga (harga) VALUES ('$harga_baru')";
        $message = "Harga berhasil ditambahkan.";
    }
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('$message'); window.location.href='harga.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

// Ambil data harga dari database
$data = mysqli_query($conn, "SELECT * FROM harga ORDER BY id DESC LIMIT 1");
if ($data && mysqli_num_rows($data) > 0) {
    $row = mysqli_fetch_array($data);
} else {
    $row = ['id' => '', 'harga' => 'Data tidak tersedia'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/laundry.png" sizes="16x16 32x32" type="image/png">

    <!--css Native Sendiri-->
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Harga Laundry</title>
</head>
<body>
    <!-- ini navbar Bosq-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="index.php">Laundry Native</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="harga.php">Harga</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                Data Costumer
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="minggu.php">Data Minggu Ini</a></li>
                <li><a class="dropdown-item" href="bulan.php">Data Bulan Ini</a></li>
                <li><a class="dropdown-item" href="tahun.php">Data Tahun Ini</a></li>
              </ul>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Ini Akhir Navbar Bosq-->

    <!-- Form untuk input atau edit harga -->
    <div class="container mt-4">
        
        <!-- Tampilkan harga terbaru -->
        <h3><p class="text-center mt-4">Harga Kilogram</p></h3>
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <center>
            <form method="post" action="harga.php">
            <div class="mb-3">
                <label for="harga" class="form-label">Harga (Rp/KG)</label>
                <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $row['harga']; ?>" required>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Harga</button>
        </form>
              <input class="form-control mt-4" type="text" value="<?php echo "Rp.".$row['harga']."/KG" ?>" aria-label="readonly input example" readonly>
            </center>
          </div>
          <div class="col-sm-4"></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
