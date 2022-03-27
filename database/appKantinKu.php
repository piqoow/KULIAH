<?php 
// koneksi database
include 'koneksi.php';

$nama = $_POST['nama'];
$nasi = $_POST['nasi'];
$lauk = $_POST['lauk'];
$harga = $_POST['harga'];

$query=mysqli_query($koneksi,"select * from tb_food");
$cek=mysqli_num_rows($query);

while($result=mysqli_fetch_array($query)) {
    echo $result['nama'];
    echo "<br>";
    echo $result['nasi'];
    echo "<br>";
    echo $result['lauk'];
    echo "<br>";
    echo $result['harga'];
    echo "||";

    
}
?>