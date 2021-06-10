<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("SELECT * FROM tb_ebook where id_ebook='$id'");
    $data = $sql->fetch_assoc();

?>

<div class="panel panel-default">
    <div class="panel-heading">
        Ubah Data Ebook
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)">
                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" name="judul" id="judul" value="<?php echo $data['judul'];?>" />

                    </div>

                    <div class="form-group">
                        <label>Pengarang</label>
                        <input class="form-control" name="pengarang" id="pengrang"
                            value="<?php echo $data['pengarang'];?>" />

                    </div>

                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <select class="form-control" name="tahun">
                            <?php

                        	$tahun = date("Y");

                        	for ($i=$tahun-30; $i <= $tahun; $i++) { 
                        		
                        			if ($i==$tahun2 ) {

                        			echo'<option value="'.$i.'" selected>'.$i.'</option>';

                        			}else{


                        			echo'<option value="'.$i.'">'.$i.'</option>';
									}			
                        		
                        	
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
    

	$simpan = $_POST ['simpan'];

    if ($simpan) {
        if (!empty($lokasi)) {
        
        $upload = move_uploaded_file($lokasi, "ebook/".$file);

        // echo $sql = "UPDATE tb_ebook SET judul='$judul', pengarang='$pengarang', tahun_terbit='$tahun', link='$file' WHERE id_ebook='$id' ";

        $sql = $koneksi->query("UPDATE tb_ebook SET judul='$judul', pengarang='$pengarang', tahun_terbit='$tahun', link='$file' WHERE id_ebook='$id' ");
        }
        ?>
<script type="text/javascript">
    alert("Data Berhasil Diubah");
    window.location.href = "?page=ebook";
</script>
<?php
}
?>