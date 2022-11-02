<?php
session_start();
include_once("config.php");

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="nama_gambar.jpg" type="image/ico"/>
    <title>SilviaFashion</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="header">
        <div class="header-logo">SilviaFashion</div>
        <div class="header-list">
            <ul>
                <li><a href="aboutme.php">About Me</a></li>
                <li class="activate "><a href="index.html"></a> Home</li>
                <li> <a href = "form_pembelian.php">Form Pembelian</li>
                <li> <a href="Logout.php">Logout</a></li>
                
            </ul> 
            <input type="checkbox" onclick="ubahMode()">
        </div>
    </div>
    <div class="main">
        <div class="container">
            <input class="search-area" type="text" name="text" placeholder="Search" autocomplete="off"> 
            <input class="search-btn" type="submit" name="submit" value="search">
        </div>
    <div>
        <div class="contents">
            <h3 class="section-tittle">Flash Sale</h3>
            <div class="contents-item">
                <img src="baju2.png" width="200" height="200">
                <p>Dress Pinky</p>
                <p>Rp.200.000</p>
            </div>
            <div class="contents-item">
                <img src="baju3.png" width="200" height="200">
                <p>Set Cewek Bumi</p>
                <p>Rp.600.000</p>
            </div>
            <div class="contents-item">
                <img src="tas1.png" width="200" height="200">
                <p>Tas LV</p>
                <p>Rp.1.000.000</p>
            </div>
            <div class="contents-item">
                <img src="jilbab1.png" width="200" height="200">
                <p>Jilbab Instan</p>
                <p>Rp.50.000</p>
            </div>
            <div class="contents-item">
                <img src="sepatu1.png" width="200" height="200">
                <p>Sepatu Olahraga</p>
                <p>Rp.200.000</p>
            </div>
            <div class="contents-item">
                <img src="fashion.png" width="200" height="200">
                <p>Set Muslimah</p>
                <p>Rp.450.000</p>
            </div>
            <div class="contents-item">
                <img src="tas2.png" width="200" height="200">
                <p>Tas Ransel Pinky</p>
                <p>Rp.299.000</p>
            </div>
            <div class="contents-item">
                <img src="baju5.png" width="200" height="200">
                <p>Jaket Pinky</p>
                <p>Rp.250.000</p>
            </div>
            <div class="contents-item">
                <img src="bajutidur1.png" width="200" height="200">
                <p>Piyama Anak</p>
                <p>Rp.50.000</p>
            </div>
            <div class="contents-item">
                <img src="bajutidur2.png" width="200" height="200">
                <p>Piyama Dewasa</p>
                <p>Rp.250.000</p>
            </div>
            <div class="contents-item">
                <img src="hoodie1.png" width="200" height="200">
                <p>Hoodie Pinky</p>
                <p>Rp.300.000</p>
            </div>
            
        </div>
    </div>

    </div>
    <div class="footer">
        <div class="footer-logo">
            <p>@Copyright by Silvia Ananda</p>
        </div>
    </div>
    <script>
        function ubahMode(){
            const ubah = document.body;
            ubah.classList.toggle("dark");
        }
   </script>
   <script src="script.js"></script>
</body>
</html>