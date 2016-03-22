 <!-- Aplikasi CRUD
 ************************************************
 * Developer    : Indra Styawantoro
 * Company      : Indra Studio
 * Release Date : 1 Maret 2016
 * Website      : http://www.indrasatya.com, http://www.kulikoding.net
 * E-mail       : indra.setyawantoro@gmail.com
 * Phone        : +62-856-6991-9769
 * BBM          : 7679B9D9
 -->

<?php
// Panggil koneksi database
require_once "config/database.php";

$nis = $_GET['id'];

if (isset($nis)) {
	try {
		// sql statement untuk menghapus data pada tabel is_siswa
        $sql = "DELETE FROM is_siswa WHERE nis='$nis'";
        // jalankan query
        $result = $pdo->query($sql);

        // jika berhasil tampilkan pesan berhasil delete data
		header('location: index.php?alert=4');

		// tutup koneksi database
        $pdo = null;
	} catch (PDOException $e) {
		// tampilkan pesan kesalahan
        echo "ada kesalahan : ".$e->getMessage();
	}
}					
?>