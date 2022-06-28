<?php
include '../../config/koneksi.php';

$online = $_POST['online'];
$anak = $_POST['anak'];

if($online != ''){
    $sql = "UPDATE wb_embed SET embed='$online' WHERE id=1";
    $koneksi->query($sql);
}

if($anak != ''){
    $sql = "UPDATE wb_embed SET embed='$anak' WHERE id=2";
    $koneksi->query($sql);
}

header("location: embed_form.php");

?>