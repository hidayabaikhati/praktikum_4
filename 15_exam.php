<?php
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["filename"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Check apakah file format gambar
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["filename"]["tmp_name"]);
    if($check !== false) {
        $uploadOK = 1;
    } else {
        $uploadOK = 0;
    }
    //mengecek file apabila benar akan di upload
    if ($uploadOK == 1) {
        move_uploaded_file($_FILES["filename"]["tmp_name"],$target_file);
        echo "<h2>Foto Berhasil di Upload</h2>";
        echo "<img src='uploads/".$_FILES['filename']['name']."' width='150'>";
        echo "<br><a href='13_exam.php'>Upload Foto Lagi</a>";
    } else {
        echo "<h2>Maaf file bukan gambar, gagal di upload</h2>";
    }
}
?>