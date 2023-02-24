<?php 
// koneksi kedalam database
include "koneksi.php";

//uji jika tombol delete di klik 
if (isset($_POST['bhapus'])){

    $hapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = '$_POST[id]'");

    //membuat pengujian jika hapus data berhasil atau gagal
    if($simpan){
        echo "<script>
        alert ('Hapus data suskses');
        document.location = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('Hapus data gagal');
        document.location = 'index.php';
        </script>";
    }
}
