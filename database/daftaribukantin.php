<?php 
// koneksi database
include 'koneksi.php';

$nama = $_POST['nama_ik'];
$username=$_POST['username_ik'];
$telp = $_POST['telp_ik'];
$pass = $_POST['pass_ik'];

$query=mysqli_query($koneksi,"select * from ibukantin where username_ik='$username'");
$cek=mysqli_num_rows($query);

if($cek > 0){
	echo "Username yang anda gunakan sudah terdaftar!";
}else{

if($nama == "" or $username == "" or $telp == "" or $pass == "" ){
	echo "Tidak Boleh Ada Yang Kosong!";
	}elseif($nama<>"" or $username <>"" or $telp <>"" or $pass <>""){

	$sql_simpan=mysqli_query($koneksi,"insert into ibukantin values('$nama','$username','$telp','$pass')");
 	echo "Selamat anda sudah berhasil melakukan pendaftaran!";
	} else {
 	echo "Maaf pendaftaran anda gagal dilakukan!";
	}
}

?>

