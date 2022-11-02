<?php 

require 'config.php';

if(isset($_GET['id'])){
    $ID = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM data_pembelian WHERE ID='$ID'");

    if($hapus){
        header("Location:form_pembelian.php");
    }
}