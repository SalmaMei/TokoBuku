<?php
include"koneksi.php";
mysqli_query($con, "delete from buku where idBuku = '$_GET[id]' ");

echo"<script language = 'JavaScript'> alert('data berhasil dihapus');
document.location='index.php';
</script>";
?>