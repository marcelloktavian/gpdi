<link rel="shortcut icon" href="../assets/images/gpdi.ico">
<?php
session_start();
if(isset($_SESSION['lgusername']) && $_SESSION["lgusername"] !== ''){
    include "pages/template/main.php";
}else{
    include "pages/login.php";
}
?>