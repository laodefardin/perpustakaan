<div class="card mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Ebook</li>
        </ol>
</nav>
    <div class="card-body">
        Menu Ebook merupakan tempat menambahkan/mengedit data ebook yang ada pada perpustakaan SMK Negeri 1 Bulukumba
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Ebook 
        <a href="?page=ebook&aksi=tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="7%">No</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Tahun</th>
                        <th>Link</th>
                        <th width="21%">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="7%">No</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Tahun</th>
                        <th>Link</th>
                        <th width="21%">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!--KONTEN-->
                    <?php
                    $no = 1;
                    $sql = $koneksi->query("SELECT * from tb_ebook");
                    while ($data= $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <td align="center"><?php echo $no++; ?></td>
                            <td><?php echo $data['judul'];?></td>
                            <td><?php echo $data['pengarang'];?></td>
                            <td align="center"><?php echo $data['tahun_terbit'];?></td>
                            <td> <a href="./ebook/<?= $data['link'];?>" target="_blank" ><?= $data['link'];?></a> </td>
                            <td align="center">
                                <a href="?page=ebook&aksi=ubah&id=<?php echo $data['id_ebook']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=ebook&aksi=hapus&id=<?php echo $data['id_ebook']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>


     