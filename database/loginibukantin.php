<?php 

include 'koneksi.php';
$username = $_POST['username_ik'];
$pass= $_POST['pass_ik'];

$login = mysqli_query($koneksi,"select * from ibukantin where username_ik='$username' and pass_ik='$pass'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password ibukantin di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	echo "Berhasil login, Ibu Kantin!";
}else{
	 echo "Username atau Password Anda Salah!";
}
?>