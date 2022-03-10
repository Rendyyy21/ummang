<!doctype html>
<html lang="en">
      <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
      <h1 class="mt-3 ">Sistem Informasi Rental Mobil</h1>
      <form action="./database/proses_simpan.php" method="POST">
        <div class="form-group">
          <label for="nomor_kendaraan">Nomor Kendaraan</label>
          <input type="text" name="nomor_kendaraan" class="form-control" id="nomor_kendaraan">
        </div>
        <div class="form-group">
          <label for="merk">Merk</label>
          <input type="text" name="merk" class="form-control" id="merk">
        </div>
        <div class="form-group">
          <label for="jenis">Jenis</label>
          <input type="text" name="jenis" class="form-control" id="jenis">
        </div>
        <div class="form-group">
          <label for="gambar">Gambar</label>
          <input type="text" name="gambar" class="form-control" id="gambar">
        </div>
        <div class="form-group">
          <label for="kapasitas">Kapasitas </label>
          <input type="number" name="kapasitas" class="form-control" id="kapasitas">
        </div>
        <div class="form-group">
          <label for="bahan_bakar">Bahan Bakar</label>
          <input type="text" name="bahan_bakar" class="form-control" id="bahan_bakar">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>

