<?php
include 'koneksi.php';
// $data = $koneksi->query("SELECT * FROM toko WHERE id = '$_GET[id]'");
// $file = $data->fetch_assoc();
$id = $_GET['id'];
echo "DELETE FROM toko WHERE id=$id";
$koneksi->query("DELETE FROM toko WHERE id=$id");

echo "<script>alert('Toko Terhapus!');</script>";
echo "<script>location='toko_admin.php?';</script>";

?>