<?php 

include 'koneksi.php';


        $nomor_kendaraan = $_POST['nomor_kendaraan'];
        $merk = $_POST['merk'];
        $jenis = $_POST['jenis'];
        $gambar = $_POST['gambar'];
        $kapasitas = $_POST['kapasitas'];
        $bahan_bakar = $_POST['bahan_bakar'];

        $edit = "UPDATE mobil SET merk = '$merk', jenis = '$jenis', gambar= '$gambar', kapasitas= '$kapasitas', bahan_bakar= '$bahan_bakar'  WHERE nomor_kendaraan = '$nomor_kendaraan' ";

        if (mysqli_query($koneksi, $edit)) {
            
            header('Location: ../data_mobil.php');
        } else {
            echo "Gagal menyimpan perubahan ...";
            
        }

?>