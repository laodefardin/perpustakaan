<div class="card mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Transaksi</li>
        </ol>
</nav>
    <div class="card-body">
        Menu Transaksi merupakan tempat menambahkan/mengembalikan/memperpanjang transaksi pemimjaman buku yang ada pada perpustakaan SMK Negeri 1 Bulukumba
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Transaksi 
        <a href="?page=transaksi&aksi=tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="7%">No</th>
                        <th>Judul</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                        <th>Terlambat</th>
                        <th width="14%">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="7%">No</th>
                        <th>Judul</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                        <th>Terlambat</th>
                        <th width="14%">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!--KONTEN-->
                    <?php
                    $no = 1;
                    $sql = $koneksi->query("select * from tb_transaksi where status='pinjam' ");
                    while ($data= $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <td align="center"><?php echo $no++; ?></td>
                            <td>
                                <?php 
                                $test = $data['id_buku'];
                                // echo $test;
                                $jbuku = $koneksi->query("SELECT * FROM tb_buku WHERE id_buku=$test");
                                $jjbuku = $jbuku->fetch_assoc();
                                echo $jjbuku['judul'];
                                ?>
                                    
                                </td>
                                <td>
                                    <?php 
                                    $anggota = $data['nis'];
                                    // echo $test;
                                    $anggotaa = $koneksi->query("SELECT * FROM tb_anggota WHERE nis=$anggota");
                                    $show = $anggotaa->fetch_assoc();
                                    echo $show['nis'];
                                    ?>
                                        
                                    </td>
                                    <td><?php echo $show['nama'];;?></td>
                                    <td><?php echo $data['tgl_pinjam'];?></td>
                                    <td><?php echo $data['tgl_kembali'];?></td>
                                    <td align="center"><?php echo $data['status'];?></td>
                                    <td align="center">
                                        <?php
                                        //$denda = 1000;
                                        $tanggal_dateline = $data['tgl_kembali'];
                                        $tgl_kembali=date('Y-m-d');
                                        $lambat = terlambat($tanggal_dateline, $tgl_kembali);
                                        //$denda1 = $lambat*$denda;
                                        if ($lambat>0) {
                                            echo "<font color='red'>$lambat hari </font>";
                                        }else{
                                            echo $lambat . "hari";
                                        }
                                        ?>
                                            
                                        </td>
                                        <td align="center">
                                            <a href="?page=transaksi&aksi=kembali&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul']?>" class="btn btn-info" >Kembalikan</a>
                                            <a href="?page=transaksi&aksi=perpanjang&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul'];?>&tgl_kembali=<?php echo $data['tgl_kembali']?>&lambat=<?php echo $lambat; ?>" class="btn btn-danger" >Perpanjang</a>
                                        </td>
                                    </tr>
                                <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
