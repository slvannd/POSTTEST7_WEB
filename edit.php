<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $ID = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM data_pembelian WHERE ID = '$ID' ");
        $baris = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama_barang = $_POST['nama_barang'];
        $jumlah = $_POST['jumlah'];
        $nama_pembeli = $_POST['nama_pembeli'];
        $alamat = $_POST['alamat'];
        $Telepon = $_POST['Telepon'];

        $update = mysqli_query($db, "UPDATE data_pembelian SET nama_barang='$nama_barang', jumlah='$jumlah', nama_pembeli='$nama_pembeli', alamat='$alamat', Telepon='$Telepon' WHERE ID='$ID'");

        if($update){
            header("Location:form_pembelian.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SilviaFashion</title>
    <link rel="stylesheet" href="form_pembelian.css">
</head>
<body>
    <header>
        <h2>Formulir Data Pembelian</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Data</h3>
        <form action="" method="post">
            
            <label for="">Nama Barang</label><br>
            <input type="text" name="nama_barang" class="form-text" value=<?=$baris['nama_barang'];?>><br>
            
            <label for="">Jumlah</label><br>
            <input type="text" name="jumlah" class="form-text" value=<?=$baris['jumlah'];?>><br>
            
            <label for="">Nama Pembeli</label><br>
            <input type="text" name="nama_pembeli" class="form-text" value=<?=$baris['nama_pembeli'];?>><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="135" rows="10" value=<?=$baris['alamat'];?>></textarea><br>

            <label for="">No HP</label><br>
            <input type="text" name="Telepon" class="form-text" value=<?=$baris['Telepon'];?>><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
            
        
        </form>
    </div>

</body>
</html>