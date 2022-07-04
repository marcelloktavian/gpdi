<?php
session_start();
include '../../config/koneksi.php'; 

$username = $_POST['username'];
$password = md5($_POST['password']);
$remember = $_POST['remember'];

$sql_query = "select a.id_user, a.nama_user, count(a.id_user) as cntUser, b.nama_level 
from ad_user a left join ad_level b on b.id_level = a.id_level where a.username='".$username."' 
and a.password='".$password."' and a.deleted=0";
$result = mysqli_query($koneksi,$sql_query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];

if($remember == '1'){
    setcookie('cookie_username', $username, time() + (3600 * 6), "/");
    setcookie('cookie_remember', $remember, time() + (3600 * 6), "/");
}else{
    unset($_COOKIE['cookie_username']); 
    setcookie('cookie_username', null, -1, '/');
    unset($_COOKIE['cookie_remember']); 
    setcookie('cookie_remember', null, -1, '/');
}
if($count > 0){
    $_SESSION['lgnamauser']   = $row['nama_user'];
    $_SESSION['lgusername']   = $username;
    $_SESSION['lglevel']      = $row['nama_level'];
    $_SESSION['lgid_user']    = $row['id_user'];
    
    echo 1;
}else{
    echo 0;
}
exit();
?>