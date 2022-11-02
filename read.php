<?php 

require 'config.php';

if(isset($_POST['submit'])){
    
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $alamat = $_POST['alamat'];
    $Telepon = $_POST['Telepon'];

    $kirim = mysqli_query($db, "INSERT INTO data_pembelian (nama_barang,jumlah,nama_pembeli,alamat,Telepon) VALUES ('$nama_barang','$jumlah','$nama_pembeli','$alamat','$Telepon')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:form_pembelian.php");
    }else {
        echo "gagal mengirim";
    }
}
?>