<?php
function Tambah_Data(){
?>
<form method="POST">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Form Input Buku</h1>
    </div>
    <div class="form-group">
    <label>ID BUKU:</label>
    <input type="text" name="idBuku" class="form-control">
    </div>
    <div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control">
    </div>
    <div class="form-group">
    <label>Pengarang</label>
    <input type="text" name="pengarang" class="form-control">
    </div>
    <div class="form-group">
    <label>Tahun Terbit</label>
    <input type="text" name="tahun_terbit" class="form-control">
    </div>
    <div class="form-group">
    <label>isbn</label>
    <input type="text" name="isbn" class="form-control mb-4">
    </div>
    <div class="form-group">
    <input type="submit" name="submit" value="Simpan Data Buku" class="btn btn-primary btn-block">
    </div>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include"koneksi.php";
    mysqli_query($con,"insert into buku (idBuku, judul, pengarang, tahun_terbit, isbn) value('$_POST[idBuku]', '$_POST[judul]', '$_POST[pengarang]', '$_POST[tahun_terbit]', '$_POST[isbn]')");
    echo"<script language = 'JavaScript'> confirm('apakah anda ingin menyimpan data ini?');
    document.location='index.php';
    </script>";


}
?>
<?php }
function Update_Data(){
include"koneksi.php";
$sqlbuku = mysqli_query($con, "select * from buku where idBuku = '$_GET[id]'");
$rbuku = mysqli_fetch_array($sqlbuku);
?>


<form method="POST">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Form Update Buku</h1>
    </div>
    <div class="form-group">
    <label>ID BUKU:</label>
    <input type="text" name="idBuku" class="form-control" value="<?php echo"$rbuku[idBuku]";?>">
    </div>
    <div class="form-group">
    <label>Judul:</label>
    <input type="text" name="judul" class="form-control" value="<?php echo"$rbuku[judul]";?>">
    </div>
    <div class="form-group">
    <label>Pengarang:</label>
    <input type="text" name="pengarang" class="form-control" value="<?php echo"$rbuku[pengarang]";?>">
    </div>
    <div class="form-group">
    <label>Tahun Terbit:</label>
    <input type="text" name="tahun_terbit" class="form-control" value="<?php echo"$rbuku[tahun_terbit]";?>">
    </div>
    <div class="form-group">
    <label>Isbn:</label>
    <input type="text" name="isbn" class="form-control" value="<?php echo"$rbuku[isbn]";?>">
    </div>
    <div class="form-group">
    <input type="submit" name="submit" value="Update Data Buku" class="btn btn-primary btn-block">
    </div>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "koneksi.php";
    mysqli_query($con, "UPDATE buku SET idBuku='$_POST[idBuku]', judul='$_POST[judul]', pengarang='$_POST[pengarang]', tahun_terbit='$_POST[tahun_terbit]', isbn='$_POST[isbn]' WHERE idBuku='$_GET[id]'");
    echo "<script language='JavaScript'> 
        confirm('Apakah Anda ingin mengupdate data ini?');
        document.location='index.php';
    </script>";
}

?>
<?php } ?>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$edit = $_GET['edit'];
if($edit == "update"){
    Update_Data();
} else{
    Tambah_Data();
}
?>

