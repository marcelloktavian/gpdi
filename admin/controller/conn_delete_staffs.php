<?php 
include '../../config/koneksi.php';
session_start();

$id_staffs_delete = mysqli_real_escape_string($koneksi,$_POST['id_staffs_delete']);
$deleted_by = mysqli_real_escape_string($koneksi,$_POST['id_user']);



    $stmt1 = $koneksi->prepare("UPDATE `wb_staffs` set deleted_at = ?, deleted_by = ? where id_staffs=?");
    $stmt1->bind_param("sss", $tanggal_now, $deleted_by, $id_staffs_delete);

    date_default_timezone_set('Asia/Jakarta');
    $tanggal_now = date("Y-m-d H:i:s");

    $stmt1->execute();
    $stmt1->close();

    header("location:../index.php?page=staff");

?>