<?php


$link = mysql_connect('localhost', 'root', '') or die('Cannot connect to the DB');
mysql_select_db('elearning_android', $link) or die('Cannot select the DB');


$query = "SELECT * FROM siswa,siswa_kelas,kelas WHERE kelas.id_kelas = '5' and siswa.id_siswa = siswa_kelas.id_siswa and siswa_kelas.id_kelas = kelas.id_kelas order by siswa.nis asc";

$result = mysql_query($query, $link) or die('Errorquery: '.$query);

$rows = array();

while ($r = mysql_fetch_assoc($result)) {

$rows[] = $r;

}

$data = "{makanan:".json_encode($rows)."}";
echo $data;
?>