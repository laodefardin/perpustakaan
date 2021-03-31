<?php
$admin= $_SESSION['admin'];
if (empty($admin)) {
    echo "<script> document.location.href='./index.php';</script>";
}
 ?>

<div class="card mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Petugas</li>
        </ol>
</nav>
    <div class="card-body">
        Menu Petugas merupakan tempat menambahkan/mengedit data petugas yang ada pada perpustakaan SMK Negeri 1 Bulukumba
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Petugas 
        <a href="?page=pengguna&aksi=tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="7%">No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Foto</th>
                        <th width="21%">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="7%">No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Foto</th>
                        <th width="21%">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!--KONTEN-->
                    <?php
                    $no = 1;
                    $sql = $koneksi->query("select * from tb_user ");
                    while ($data= $sql->fetch_assoc()) {       
                        ?>
                        <tr>
                            <td align="center"><?php echo $no++; ?></td>
                            <td><?php echo $data['username'];?></td>
                            <td><?php echo $data['nama'];?></td>
                            <td><?php echo $data['level'];?></td>
                            <td align="center"> <img src="images/<?php echo  $data['foto'];?>" width="75" height="50"> </td>
                            <td align="center">
                                <a href="?page=pengguna&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=pengguna&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
