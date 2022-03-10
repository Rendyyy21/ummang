<!doctype html>
<html lang="en">
      <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="./css/style.css">
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Sistem Informasi Mobil Rental</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-link active" href="#">Home</a>
      <a class="nav-link" href="#">Features</a>
      <a class="nav-link" href="#">Pricing</a>
    </div>
  </div>
</div>
</nav>

<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-3 ">Daftar Mobil Rental</h1>
      <table class="table">
            <thead>
                <tr>
                <th scope="col">Nomor Kendaraan</th>
                <th scope="col">Merk</th>
                <th scope="col">Jenis</th>
                <th scope="col">Gambar</th>
                <th scope="col">Kapasitas</th>
                <th scope="col">Bahan Bakar</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
        <?php 
                include './database/koneksi.php';

                $query = " SELECT * FROM mobil";
                $result = mysqli_query($koneksi, $query);
                if (mysqli_num_rows($result) > 0 ) {
                    while($data = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <th scope="row"><?php echo $data["nomor_kendaraan"] ?></th>
                    <td><?php echo $data["merk"] ?></td>
                    <td><?php echo $data["jenis"] ?></td>
                    <td><img src="img/<?php echo $data["gambar"] ?>" alt="" class="gambar"></td>
                    <td><?php echo $data["kapasitas"] ?></td>
                    <td><?php echo $data["bahan_bakar"] ?></td>
                    <td>
                        <a href="hapus_data.php?nomor_kendaraan=<?php echo $data["nomor_kendaraan"] ?>">Hapus</a> 
                        <a href="edit_data.php?nomor_kendaraan=<?php echo $data["nomor_kendaraan"] ?>">Edit</a> 
                    </td>
                </tr>
                <?php  }
        }else { ?>
            <tr>
                <td>Tidak Ada data</td>
            </tr>
        <?php  }?>
            </tbody>
        </table>
    </div>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>

