    <?php

    $un=$_POST['username'];
    $pw=$_POST['password'];

    $conn = mysql_connect("localhost","root","");
    mysql_select_db("elearning_android");

    $query = "SELECT * FROM siswa WHERE nis = '$un' AND nis ='$pw'";
    $result = mysql_query($query) or die("Unable to verify user because : " . mysql_error());

    
   if (mysql_num_rows($result) == 1){
   
	    echo 2;
	}
   else {
 
	    // print status message
   	   echo 0;
	}

    ?>

