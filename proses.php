<?php 
include 'koneksi.php';

$nama = @$_POST['nama'];
$alamat = @$_POST['alamat'];
$email = @$_POST['email'];
$sandi = @$_POST['sandi'];
$telp = @$_POST['sandi'];
$tanggal = @$_POST['tanggal'];
$jk = @$_POST['jk'];
$pendidikan = @$_POST['pendidikan'];
$jurusan = @$_POST['jurusan'];

if(@$_GET['page']=='form'){
	$insert = $db->prepare("INSERT INTO member(nama,alamat,email,sandi,telp,tanggal,jk,pendidikan,jurusan) VALUES(?,?,?,?,?,?,?,?,?) ");
	$insert-> bindParma(1, $nama);
	$insert-> bindParma(2, $alamat);
	$insert-> bindParma(3, $email);
	$insert-> bindParma(4, $sandi);
	$insert-> bindParma(5, $telp);
	$insert-> bindParma(6, $tanggal);
	$insert-> bindParma(7, $jk);
	$insert-> bindParma(7, $pendidikan);
	$insert-> bindParma(7, $jurusan);
	$insert->execute();
	if($insert -> rowCount()>0){
		echo "Sukses";
	}

} 
 ?>
