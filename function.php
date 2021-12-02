<?php
SESSION_START();

//Koneksi Database
$conn = mysqli_connect("localhost","root","","stokbarang");

//ADD NEW ITEM
if(isset($_POST['addnewitem'])){
    $namaitem = $_POST['namaitem'];
    $unit = $_POST['unit'];
    $stok = $_POST['stok'];
    $hargasatuan = $_POST['hargasatuan'];
    $barang = $_POST['barang'];

    //Devinisi tabel database
    $addtotable = mysqli_query($conn, "INSERT INTO item (namaitem, unit, stok, hargasatuan, barang) VALUES('$namaitem', '$unit', '$stok', '$hargasatuan', '$barang')");
    if($addtotable){
        header('location:index.php');
    }else{
        echo'GAGAL';
        header('location:index.php');
    }
}

?>