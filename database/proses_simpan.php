<?php 
        $nomor_kendaraan = $_POST['nomor_kendaraan'];
        $merk = $_POST['merk'];
        $jenis = $_POST['jenis'];
        $gambar = $_POST['gambar'];
        $kapasitas = $_POST['kapasitas'];
        $bahan_bakar = $_POST['bahan_bakar'];

        include 'koneksi.php';

        $sql = "INSERT INTO mobil VALUES ('$nomor_kendaraan', '$merk', '$jenis', '$gambar', '$kapasitas', '$bahan_bakar')";

        if (mysqli_query($koneksi, $sql)) {
            echo "Data Berhasil di Simpan";
            echo "<br>";
            echo "<a href='../input_dtmobil.php'>Isi Data Lagi? </a>";
        }else{
            echo "Error : " . $sql . "<br>" . mysqli_error($koneksi);
        }

?>