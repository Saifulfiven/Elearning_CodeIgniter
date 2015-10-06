 <?php

    $nama_siswa=$_POST['nama_siswa'];
    $nis=$_POST['nis'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];

$con=mysqli_connect("localhost","root","","elearning_android");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if (mysqli_query($con,"INSERT INTO guru (nip, nama, alamat, jk_guru) values ('$nis', '$nama_siswa', '$alamat' ,'$jk')"))
echo 1;
else 
echo 0;

mysqli_close($con);
?> 
