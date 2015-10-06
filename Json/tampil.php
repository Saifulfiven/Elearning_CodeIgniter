    <?php
    $un = $_POST["username"];
    $cr = $_POST["cr"];

    $conn = mysql_connect("localhost","root","");
    mysql_select_db("elearning_android");

    $query = "SELECT * FROM siswa,siswa_kelas,kelas WHERE siswa.nis = '$un' and siswa.id_siswa = siswa_kelas.id_siswa and siswa_kelas.id_kelas = kelas.id_kelas";
    $result = mysql_query($query) or die("Unable to verify user because : " . mysql_error());

$rows = array();
while ($r = mysql_fetch_array($result)) {
    echo $r[$cr];
}
?>