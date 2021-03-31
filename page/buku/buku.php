<div class="card mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
        </ol>
</nav>
    <div class="card-body">
        Menu buku merupakan tempat menambahkan/mengedit data buku yang ada pada perpustakaan SMK Negeri 1 Bulukumba
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Buku 
        <a href="?page=buku&aksi=tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="7%">No</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>ISBN</th>
                        <th>Jumlah</th>
                        <th>Lokasi</th>
                        <th width="21%">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="7%">No</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>ISBN</th>
                        <th>Jumlah</th>
                        <th>Lokasi</th>
                        <th width="21%">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!--KONTEN-->
                    <?php
                    $no = 1;
                    $sql = $koneksi->query("select * from tb_buku");
                    while ($data= $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <td align="center"><?php echo $no++; ?></td>
                            <td><?php echo $data['judul'];?></td>
                            <td><?php echo $data['pengarang'];?></td>
                            <td><?php echo $data['penerbit'];?></td>
                            <td align="center"><?php echo $data['tahun_terbit'];?></td>
                            <td><?php echo $data['isbn'];?></td>
                            <td align="center"><?php echo $data['jumlah_buku'];?></td>
                            <td align="center"><?php echo $data['lokasi'];?></td>
                            <td align="center">
                                <a href="?page=buku&aksi=ubah&id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=buku&aksi=hapus&id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>


     