

<div class="text-center">
  <h1 class="h4 text-gray-900 mb-4">List Data Buku</h1>
</div>

<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
      <th>No</th>
      <th>Id Buku</th>
      <th>Judul</th>
      <th>Pengarang</th>
      <th>Tahun Terbit</th>
      <th>Isbn</th>
      <th>Action</th>
      </tr>
    </thead>
    <tbody>
     <?php
     include"koneksi.php";
     $no = 1;
     $sql = mysqli_query($con,"select * from buku");
     //menangkap data//
     while($rbuku = mysqli_fetch_array($sql)){
     ?>
     <tr>
      <td><?php echo"$no"?></td>
      <td><?php echo"$rbuku[idBuku]"?></td>
      <td><?php echo"$rbuku[judul]"?></td>
      <td><?php echo"$rbuku[pengarang]"?></td>
      <td><?php echo"$rbuku[tahun_terbit]"?></td>
      <td><?php echo"$rbuku[isbn]"?></td>
      <td>
        <a href="<?php echo"index.php?&&edit=update&&id=$rbuku[idBuku]";?>" class="btn btn-primary">Edit</a>
        <a href="<?php echo"delete.php?id=$rbuku[idBuku]";?>" class="btn btn-danger" onclick="javascript: return confirm('apakah anda ingin menghapus data ini?')">Delete</a>
      </td>
     </tr>
     <?php $no++; } ?>
    </tbody>
  </table>
</div>