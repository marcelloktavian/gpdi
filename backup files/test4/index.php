<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>GPdI Bukit Hermon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="assets/css/reset.css">
        <link type="text/css" rel="stylesheet" href="assets/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="assets/css/style.css">
        <link type="text/css" rel="stylesheet" href="assets/css/style-custom.css">
        <link type="text/css" rel="stylesheet" href="assets/css/yourstyle.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="assets/images/gpdi.ico">

        <script type="text/javascript" src="assets/js/jquery-3.4.1.js"></script>

        <script type="text/javascript" src="assets/js/sweetalert2.all.min.js"></script>

        <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css"/>
        <script type="text/javascript" src="assets/DataTables/jquery.dataTables.min.js"></script>

    </head>
    <body>
    <?php include 'config/koneksi.php'; 
    ?>

        <!-- loader -->
        <div class="loader">
            <div id="movingBallG">
                <div class="movingBallLineG"></div>
                <div id="movingBallG_1" class="movingBallG"></div>
            </div>
        </div>
        <!-- loader end -->

        <!--================= Main   ================-->
        <div id="main">

            <!--================= header ================-->
            <?php
                include "template/header.php";
            ?>
            <!-- header  end -->

            <!--=============== wrapper ===============-->
            <div id="wrapper">
                <!-- content-holder  -->
                <div class="content-holder">
                    <?php
                        if(!isset($_GET['p']) || $_GET['p']=='' || $_GET['p']=='home'){
                            include "pages/homepage/homepage.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='pastors'){
                            include "pages/about/pastors.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='story'){
                            include "pages/about/story.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='mission'){
                            include "pages/about/mission.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='lwg'){
                            include "pages/about/lwg.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='ppa'){
                            include "pages/about/ppa.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='menwomen'){
                            include "pages/about/menwomen.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='youth'){
                            include "pages/about/youth.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='children'){
                            include "pages/about/children.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='community'){
                            include "pages/about/community.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='lokasikebun'){
                            include "pages/about/lokasikebun.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='online'){
                            include "pages/online/online.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='events'){
                            include "pages/events/events.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='care'){
                            include "pages/care/care.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='penyerahananak'){
                            include "pages/care/penyerahananak.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='baptisanair'){
                            include "pages/care/baptisanair.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='pranikah'){
                            include "pages/care/pranikah.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='konseling'){
                            include "pages/care/konseling.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='visitasi'){
                            include "pages/care/visitasi.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='permohonandoa'){
                            include "pages/care/permohonandoa.php";
                        }else if(isset($_GET['p']) && $_GET['p']=='give'){
                            include "pages/give/give.php";
                        }
                        else{
                            include "pages/404.php";
                        }
                    ?>
                    <!-- content  end --> 

                    <!--=============== content-footer   ===============-->
                    <?php
                        include "template/footer.php";
                    ?>
                    <!-- content-footer end    -->

                </div>
                <!-- content-holder end -->
            </div>
            <!-- wrapper end -->

            <!--search-form-holder -->  
            <div class="search-form-holder fixed-search">
                <div class="search-form-bg"></div>
                <div class="search-form-wrap">
                    <div class="container">
                        <form class="searchform" method="get"  >
                            <input type="text" autocomplete="off"   name="s" placeholder="Type and Enter to Search">
                        </form>
                        <div class="close-fixed-search"></div>
                    </div>
                    <div class="dublicated-text"></div>
                </div>
            </div>
            <!--search-form-holder  end-->  

            <!-- Share container  -->
            <div class="share-wrapper isShare">
                <div class="share-container"></div>
            </div>
            <!-- Share container  end-->

            <!-- slider -->
            <?php
                include "template/slider.php";
            ?>
            <!-- slider end-->

        </div>
        <!-- Main end -->


        <!--=============== scripts  ===============-->
        <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
        <script type="text/javascript" src="assets/js/plugins.js"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>

    </body>
</html>