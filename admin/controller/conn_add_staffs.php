<?php 
include '../../config/koneksi.php';
session_start();


$nama_add_staffs = mysqli_real_escape_string($koneksi,$_POST['nama_add_staffs']);
$craeted_by = mysqli_real_escape_string($koneksi,$_POST['id_user']);
echo $nama_add_staffs."<br>";

$target_dir = "../image/staffs/";
$target_file = $target_dir . basename($_FILES["foto_user2"]["name"]);
$name_image1 = basename($_FILES["foto_user2"]["name"]);
if($name_image1 != null) {
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

$check = getimagesize($_FILES["foto_user2"]["tmp_name"]);
if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}

$name_image1 = $craeted_by.'-'.$nama_add_staffs.'.'.$imageFileType;
$new_name = $target_dir.$name_image1;

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["foto_user2"]["tmp_name"], $new_name)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["foto_user2"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}else{
  $name_image1 = '0.jpg';

}


    $stmt1 = $koneksi->prepare("INSERT INTO `wb_staffs` (nama_staffs, photos_staffs, created_at, created_by)
    VALUES(?, ?, ?, ?)");
    $stmt1->bind_param("ssss", $nama_add_staffs, $name_image1, $tanggal_now, $craeted_by);

    date_default_timezone_set('Asia/Jakarta');
    $tanggal_now = date("Y-m-d H:i:s");

    $stmt1->execute();
    $stmt1->close();

    header("location:../index.php?page=staff");

?>