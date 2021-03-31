<div class="card mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lokasi Buku</li>
        </ol>
</nav>
    <div class="card-body">
        Menu Lokasi buku merupakan tempat menambahkan/mengubah/mengedit lokasi buku yang ada pada perpustakaan SMK Negeri 1 Bulukumba, data buku dapat dilihat pada menu "Data buku" atau
        <a target="_blank" href="?page=buku">disini</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Lokasi Buku 
        <a href="?page=lokasi&aksi=tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="7%">No</th>
                        <th>Lokasi Buku</th>
                        <th width="21%">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="7%">No</th>
                        <th>Lokasi Buku</th>
                        <th width="21%">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!--KONTEN-->
                    <?php
                    $no = 1;
                    $sql = $koneksi->query("select * from tb_lokasi"); while ($data= $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <td align="center"><?php echo $no++; ?></td>
                            <td align="center"><?php echo $data['lokasi'];?></td>
                            <td align="center">
                                <a href="?page=lokasi&aksi=ubah&id_lokasi=<?php echo $data['id_lokasi']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=lokasi&aksi=hapus&id_lokasi=<?php echo $data['id_lokasi']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>