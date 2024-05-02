<?php

$lokasi_file=$_FILES['filename']['tmp_name'];
 $nama_file=$_FILES['filename']['name'];

move_uploaded_file($lokasi_file, "uploads/$nama_file");

echo "<h2>Foto Berhasil di Upload</h2>";

echo "<img src='uploads/$nama_file'>";

echo "<br><a href='13_exam.php'>Upload Foto Lagi</a>";

?>