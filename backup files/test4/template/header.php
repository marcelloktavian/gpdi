<header class="main-header">
                <!-- logo -->
                <a class="logo-holder" href="index.php"><img src="assets/images/logo.png" alt=""></a>
                <!-- logo end -->  
                <!-- share button-->  
                <!-- <div class="show-share-wrap">
                    <div class="show-share"><span>Share</span><img src="assets/images/share.png" alt=""></div>
                </div> -->
                <!-- share button end-->  		
                <!-- search button--> 	 
                <!-- <div class="show-search show-fixed-search vissearch"><i class="fa fa-search"></i></div> -->
                <!-- search button end --> 
                <!-- mobile nav --> 
                <div class="nav-button-wrap">
                    <div class="nav-button vis-main-menu"><span></span><span></span><span></span></div>
                </div>
                <!-- mobile nav end--> 
                <!--  navigation --> 
                <div class="nav-holder">
                    <nav>
                        <ul>
                            <li>
                                <a href="index.php?p=home" <?php if(!isset($_GET['p']) || $_GET['p']=='' || $_GET['p']=='home'){echo 'class="act-link"';} ?>>Home </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" <?php if(isset($_GET['p']) && ($_GET['p']=='story' || $_GET['p']=='pastors' || $_GET['p']=='mission' || $_GET['p']=='lwg' || $_GET['p']=='ppa' || $_GET['p']=='menwomen' || $_GET['p']=='youth' || $_GET['p']=='children' || $_GET['p']=='community' || $_GET['p']=='lokasikebun' )){echo 'class="act-link"';} ?>>About Us</a>
                                <!--second level -->
                                <ul>
                                    <li><a href="index.php?p=story">Our Story</a></li>
                                    <li><a href="index.php?p=pastors">Our Pastors</a></li>
									<li><a href="index.php?p=mission">Our Mission & Beliefs</a></li>
                                    <li><a href="javascript:void(0)">Our Ministries</a>
                                        <ul>
                                            <li><a href="index.php?p=lwg">LWG SCHOOL</a></li>
                                            <li><a href="index.php?p=ppa">PPA HERMON MINISTRY</a></li>
                                            <li><a href="index.php?p=menwomen">MEN/WOMEN MINISTRY</a></li>
                                            <li><a href="index.php?p=youth">YOUTH MINISTRY </a></li>
                                            <li><a href="index.php?p=children">CHILDREN CHURCH</a></li>
                                        
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=community">Our Community</a></li>
                                   
                                </ul>
                                <!--second level end-->
                            </li>
                            <li>
                                <a href="index.php?p=online" <?php if(isset($_GET['p']) && ($_GET['p']=='online' || $_GET['p']=='personal' || $_GET['p']=='services')){echo 'class="act-link"';} ?>>Online</a>
                            </li>
                            <li>
                                <a href="index.php?p=events" <?php if(isset($_GET['p']) && $_GET['p']=='events'){echo 'class="act-link"';} ?>>Events </a>
                            </li>
                            <li>
                                <a href="index.php?p=care" <?php if(isset($_GET['p']) && ($_GET['p']=='care' || $_GET['p']=='penyerahananak' || $_GET['p']=='baptisanair' || $_GET['p']=='pranikah' || $_GET['p']=='konseling' || $_GET['p']=='visitasi' || $_GET['p']=='permohonandoa')){echo 'class="act-link"';} ?>>Care </a>
                            </li>
                            <li>
                                <a href="index.php?p=give" <?php if(isset($_GET['p']) && $_GET['p']=='give'){echo 'class="act-link"';} ?>>Give</a>
                            </li>
							<!-- <li>
                                <a href="javascript:void(0)" <?php if(isset($_GET['p']) && ($_GET['p']=='address' || $_GET['p']=='donate' || $_GET['p']=='prayerrequest')){echo 'class="act-link"';} ?>>Contact Us </a>
                                <ul>
                                    <li><a href="index.php?p=address">ADDRESS AND PHONE</a></li>
                                    <li><a href="index.php?p=prayerrequest">PRAYER REQUEST</a></li>
                                    <li><a href="index.php?p=donate">DONATE(ONLINE GIVING)</a></li>
                                </ul>
                            </li> -->
                            
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
            </header>