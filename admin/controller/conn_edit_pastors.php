<?php 
include '../../config/koneksi.php';
session_start();

$id_pastors_edit = mysqli_real_escape_string($koneksi,$_POST['id_pastors_edit']);
$nama_pastors = mysqli_real_escape_string($koneksi,$_POST['nama_pastors']);
$updated_by = mysqli_real_escape_string($koneksi,$_POST['id_user']);
echo $nama_pastors."<br>";

$target_dir = "../image/pastors/";
$fotoLama = mysqli_real_escape_string($koneksi,$_POST['fotoLama']);

$name_image1 = basename($_FILES["foto_user"]["name"]);
if($name_image1 != "/image/pastors/0.jpg" && $name_image1 != "") {
  unlink($target_dir.$fotoLama);
  $target_dir = "../image/pastors/";
  $target_file = $target_dir . basename($_FILES["foto_user"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $temp = explode(".", $_FILES["foto_user"]["name"]);
  $newfilename = 'bg-image2.' . end($temp);
  // Check if image file is a actual image or fake image
  
  $check = getimagesize($_FILES["foto_user"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  $name_image1 = $updated_by.'-'.$nama_pastors.'.'.$imageFileType;
  $new_name = $target_dir.$name_image1;
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["foto_user"]["tmp_name"], $new_name)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["foto_user"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  echo "ada gambar";
  
} else {

  $name_image1 = $fotoLama;

}


    $stmt1 = $koneksi->prepare("UPDATE `wb_pastors` set nama_pastors = ?, photos_pastors = ?,
    updated_at = ?, updated_by = ? where id_pastors=?");
    $stmt1->bind_param("sssss", $nama_pastors, $name_image1, $tanggal_now, $updated_by, $id_pastors_edit);

    date_default_timezone_set('Asia/Jakarta');
    $tanggal_now = date("Y-m-d H:i:s");

    $stmt1->execute();
    $stmt1->close();

    header("location:../index.php?page=pastors");

?>