<script type="text/javascript">
    function validasi(form) {
        if (form.judul.value == "") {
            alert("Judul Tidak Boleh Kosong");
            form.judul.focus();
            return (false);
        }
        if (form.pengarang.value == "") {
            alert("Pengarang Tidak Boleh Kosong");
            form.pengarang.focus();
            return (false);
        }
        if (form.file.value=="") {
            alert("File Ebook Tidak Boleh Kosong");
            form.file.focus();
            return (false);
        }
</script>

<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data Ebook
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)" >
                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" name="judul" id="judul" />

                    </div>

                    <div class="form-group">
                        <label>Pengarang</label>
                        <input class="form-control" name="pengarang" id="pengrang" />

                    </div>

                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <select class="form-control" name="tahun">
                            <?php
                            $tahun = date("Y");
                            for ($i=$tahun-30; $i <= $tahun; $i++) { 
                                echo'
                                    <option value="'.$i.'">'.$i.'</option>
                                ';
                            }
                        ?>
                        </select>
                    </div>

                    <div class="form-group">
                    <label>Upload Ebook</label>
                    <input class="form-control" type="file" name='ebookfile' id="ebookfile" />
                    </div>

                    <div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
            </div>

            </form>
        </div>
    </div>
</div>
</div>


<?php
    $judul = $_POST ['judul'];
    $pengarang = $_POST ['pengarang'];
    $tahun = $_POST ['tahun'];

    $file = $_FILES['ebookfile']['name'];
    $lokasi = $_FILES['ebookfile']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "ebook/".$file);

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("INSERT INTO tb_ebook (judul, pengarang, tahun_terbit, link) VALUES ('$judul','$pengarang','$tahun','$file')");
        // $sql = $koneksi->query("INSERT INTO tb_ebook (judul, pengarang, tahun_terbit, link) VALUES ('$judul','$pengarang','$tahun','$file')");
        if ($sql) {
            ?>
<script type="text/javascript">
    alert("Data Berhasil Disimpan");
    window.location.href = "?page=ebook";
</script>
<?php
        }
    }
?>