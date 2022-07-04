<link rel="shortcut icon" href="../assets/images/gpdi.ico">
<?php
session_start();
if(isset($_SESSION['lgusername']) && $_SESSION["lgusername"] !== ''){
    //include "pages/template/main.php";
    if(!isset($_GET['page']) || $_GET['page']=='' || $_GET['page']=='main'){
        include "pages/template/main.php";
    }else if(isset($_GET['page']) && $_GET['page']=='pastors'){
        include "pages/template/pastors.php";
    }
}else{
    include "pages/login.php";
}
?>