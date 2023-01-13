<?php
$db_host = 'localhost:8080'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'final_exam'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT *
FROM final_exam';

$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
?>