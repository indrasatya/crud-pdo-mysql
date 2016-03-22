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
// deklarasi parameter koneksi database
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "i_siswa";

try {
	// buat koneksi database
	$pdo = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
	// set error mode
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	// tampilkan kesalahan jika koneksi gagal
	echo "Koneksi Database Gagal! : ".$e->getMessage();
}
?>