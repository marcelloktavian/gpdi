<?php
if(isset($_GET['action']) && ($_GET['action']=='add' || $_GET['action']=='edit')){
    include "form_komsel.php";
}else{
    include "main_komsel.php";
}
?>