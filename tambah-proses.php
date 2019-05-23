<?php

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){

	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');

	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nis		= $_POST['nis'];	//membuat variabel $nis dan datanya dari inputan NIS
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$kelas		= $_POST['kelas'];	//membuat variabel $kelas dan datanya dari inputan NIS
	$jurusan		= $_POST['jurusan'];	//membuat variabel $jurusan dan datanya dari inputan Nama Lengkap
	$alamat		= $_POST['alamat'];	//membuat variabel $alamat dan datanya dari inputan dropdown alamat
	$no_telp	= $_POST['no_telp'];	//membuat variabel $no_telp dan datanya dari inputan dropdown no_telp

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($koneksi, "INSERT INTO siswa VALUES(NULL, '$nis', '$nama', '$kelas', '$jurusan', '$alamat','$no_telp')") or die(mysqli_error($koneksi));

	//jika query input sukses
	if($input){

		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah

	}else{

		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah

	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>
