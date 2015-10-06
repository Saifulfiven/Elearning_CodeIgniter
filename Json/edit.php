<?php

    $pw= $_POST['editpass'];
    $nip= $_POST['nip'];

$con=mysqli_connect("localhost","root","","wartawan");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"UPDATE data_pegawai SET password='$pw' where NIP='$nip'");

mysqli_close($con);
?> 