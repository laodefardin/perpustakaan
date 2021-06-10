<script type="text/javascript">
    function validasi(form){
        if (form.nis.value=="") {
            alert("NIS Tidak Boleh Kosong");
            form.nis.focus();
            return(false);
        }if (form.nama.value=="") {
            alert("Nama Tidak Boleh Kosng");
            form.nama.focus();
            return(false);
        }if (form.tmpt_lahir.value=="") {
            alert("tempat Lahir Tidak Boleh Kosong");
            form.tmpt_lahir.focus();
            return(false);
        }if (form.kelas.value=="") {
            alert("Kelas Tidak Boleh Kosong");
            form.tmpt_lahir.focus();
            return(false);
        }if (form.tgl.value=="") {
            alert("Tanggal Tidak Boleh Kosong");
            form.tgl.focus();
            return(false);
        }if (form.user.value=="") {
            alert("Username Tidak Boleh Kosng");
            form.user.focus();
            return(false);
        }if (form.pass.value=="") {
            alert("Password Tidak Boleh Kosng");
            form.pass.focus();
            return(false);
        }
        return(true);
    }
</script>

<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data Anggota
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" onsubmit="return validasi(this)">
                <div class="form-group">
                    <label>NIS</label>
                    <input class="form-control" name="nis" id="nis" />
                    
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" id="nama" />
                    
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" name="tmpt_lahir" id="tmpt_lahir" />
                    
                </div>

                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tgl_lahir" id="tgl" />
                    
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label><br/>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="l" name="jk"  /> Laki-laki
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="p" name="jk"  /> Perempuan
                    </label>
                    
                    
                </div>

                 <div class="form-group">
                    <label> Kelas</label>
                    <select class="form-control" name="kelas">
                        <option> == Pilih Kelas ==</option>
                        <option value="X">Kelas X</option>
                        <option value="XI">Kelas XI</option>
                        <option value="XII">Kelas XII</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="user" id="user" />
                </div>

<div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="text" name="pass" id="pass" />
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

 	$nis = $_POST ['nis'];
 	$nama = $_POST ['nama'];
 	$tmpt_lahir = $_POST ['tmpt_lahir'];
 	$tgl_lahir = $_POST ['tgl_lahir'];
 	$jk = $_POST ['jk'];
 	$kelas = $_POST ['kelas'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
 	
    $passbaru = md5(sha1(md5($pass)));

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
        
 		$sql = "INSERT INTO tb_anggota (nis, nama, tempat_lahir, tgl_lahir, jk, kelas, username, password ) VALUES ('$nis', '$nama', '$tmpt_lahir', '$tgl_lahir', '$jk', '$kelas', '$user', '$passbaru')";
        $proses = $koneksi->query($sql);
 		// $sql = $koneksi->query("INSERT INTO tb_anggota (nis, nama, tempat_lahir, tgl_lahir, jk, kelas, username, password ) VALUES ('$nis', '$nama', '$tmpt_lahir', '$tgl_lahir', '$jk', '$kelas', $user, $passbaru)");

 		if ($proses) {
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=anggota";
 				</script>
 			<?php
 		}
 	}

?>