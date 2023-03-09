<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
    $no_fakur = $_POST['no_fakur'];
    $nama_konsumen = $_POST['nama_konsumen'];
    $kode_barang = $_POST['kode_barang'];
    $jumlah = $_POST['jumlah'];
    $harga_satuan = $_POST['harga_satuan'];
    $harga_total = $_POST['harga_total'];

    $sql = "INSERT INTO tb_penjualan (no_fakur, nama_konsumen, kode_barang, jumlah, harga_satuan, harga_total) VALUES ('$no_fakur','$nama_konsumen','$kode_barang','$jumlah','$harga_satuan','$harga_total')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil_transaksi.php?status=sukses');
    } else {
        header('location:tampil_transaksi.php?status=gagal');
    }
}
?>