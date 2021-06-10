<?php

	$id = $_GET['id'];
	$id_buku = $_GET['judul'];

	// $sql = $koneksi->query("update tb_transaksi set status='kembali' where id = '$id'");
    $sql = $koneksi->query("UPDATE tb_transaksi set status='Pinjam' WHERE id = '$id'");

    $buku	= $koneksi->query("UPDATE tb_buku SET jumlah_buku=(jumlah_buku-1) WHERE id_buku=$id_buku ");

    

	if ($sql || $buku) {
		?>

			<script type="text/javascript">
				
				alert("Buku Berhasil diambil");

				window.location.href="?page=transaksi";

			</script>
		<?php
	}

?>