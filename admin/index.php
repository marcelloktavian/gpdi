<link rel="shortcut icon" href="../assets/images/gpdi.ico">
<?php
session_start();
if(isset($_SESSION['lgusername']) && $_SESSION["lgusername"] !== ''){
    //include "pages/template/main.php";
    if(!isset($_GET['page']) || $_GET['page']=='' || $_GET['page']=='main'){
        include "pages/template/main.php";
      }else if(isset($_GET['page']) && $_GET['page']=='pastors'){
        include "pages/master_data/pastors.php";
      }else if(isset($_GET['page']) && $_GET['page']=='jemaat'){
        include "pages/master_data/jemaat.php";
      }else if(isset($_GET['page']) && $_GET['page']=='user'){
        include "pages/user_management/user.php";
      }else if(isset($_GET['page']) && $_GET['page']=='usergroup'){
        include "pages/user_management/usergroup.php";
      }else if(isset($_GET['page']) && $_GET['page']=='useraccess'){
        include "pages/user_management/useraccess.php";
      }else if(isset($_GET['page']) && $_GET['page']=='staff'){
        include "pages/master_data/staff.php";
      }else if(isset($_GET['page']) && $_GET['page']=='komsel'){
        include "pages/master_data/komsel.php";
      }else if(isset($_GET['page']) && $_GET['page']=='jemaat'){
        // include "pages/master_data/jemaat.php";
      }
      else{
          include "pages/404.php";
      }
}else{
    include "pages/login.php";
}
?>
