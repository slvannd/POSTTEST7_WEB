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
        <h3>Tambah Data Baru</h3>
        <form action="read.php" method="post">
            
            <label for="">Nama Barang</label><br>
            <input type="text" name="nama_barang" class="form-text"><br>
            
            <label for="">Gambar Barang</label><br>
            <input type="file" name="Gambar"><br><br>

            <label for="">Jumlah</label><br>
            <input type="number" name="jumlah" class="form-text"><br>
            
            <label for="">Nama Pembeli</label><br>
            <input type="text" name="nama_pembeli" class="form-text"><br>
            
            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="135" rows="10"></textarea><br>

            <label for="">Tanggal</label><br>
            <input type="date" name="Tanggal"><br><br>

            <label for="">No HP</label><br>
            <input type="number" name="Telepon" class="form-text"><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>

</body>
</html>