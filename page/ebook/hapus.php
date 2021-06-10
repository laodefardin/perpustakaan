<?php
	$ambil = $koneksi->query("SELECT * FROM tb_ebook WHERE id_ebook='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto_produk=$data['link'];

	if (file_exists("ebook/$foto_produk")) {
		unlink("ebook/$foto_produk");
	}
	$koneksi->query("DELETE FROM tb_ebook WHERE id_ebook='$_GET[id]'");
?>

<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=ebook";
</script>