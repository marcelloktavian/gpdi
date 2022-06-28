<style>
table, td {
  border: 1px solid;
  padding: 3px;
  font-size: 15px;
}

thead {
    background:#292929;
}
table {
  width: 100%;
  border-collapse: collapse;
}
.headernya{
    color:white;
}
</style>
<div class="content">
                        <!--  sroll-nav-wrap --> 
                        <!-- <div class="sroll-nav-wrap">
                            <div class="sroll-nav-container">
                                <nav class="scroll-nav scroll-init fl-wrap">
                                    <ul>
                                        <li><a class="scroll-link act-scrlink" href="#sec1">01.<span>Hero</span></a></li>
                                        <li><a class="scroll-link" href="#sec2">02.<span>About</span></a></li>
                                        <li><a class="scroll-link" href="#sec3">03.<span>Facts</span></a></li>
                                        <li><a class="scroll-link" href="#sec4">04.<span>Skills</span></a></li>
                                        <li><a class="scroll-link" href="#sec5">05.<span>Clients</span></a></li>
                                        <li><a class="scroll-link" href="#sec6">06.<span>Resume</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> -->
                        <!--  sroll-nav-wrap end--> 
                        <!--  section --> 
                        <section class="parallax-section header-section" data-scrollax-parent="true" id="sec1">
                            <div class="bg"  data-bg="assets/images/bg/1.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
                            <div class="overlay"></div>
                            <div class="container big-container">
                                <div class="section-title">
                                    <h3>GPdI Bukit Hermon</h3>
                                    <div class="separator trsp-separator"></div>
                                    <h2>Our Community</h2>
                                    <!-- <p>Curabitur bibendum mi sed rhoncus aliquet. Nulla blandit porttitor justo, at posuere sem accumsan nec.</p> -->
                                    <a href="#sec2" class="custom-scroll-link sect-scroll-link"><i class="fa fa-long-arrow-down"></i> <span>scroll down</span></a>
                                </div>
                            </div>
                        </section>
                        <!--  section end--> 
                        <!--  section  --> 
                        <section id="sec2" data-scrollax-parent="true" >
                            <div class="container">
                                <div class="section-container fl-wrap">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="content-wrap about-wrap">
                                            <h3 class="bold-title">Our Community</h3>
                                            <p>Keluarga Bukit Hermon atau yang sebelumnya dikenal dengan nama komsel (komunitas sel), biasanya berjumlah kurang lebih sekitar 12-18 orang, dan dipimpin oleh seorang Kepala Keluarga (KK). <a href="index.php?p=lokasikebun"><b>Klik Lokasi KeBun terdekat</b>.</a></p>
                                            <table id='tbl-community' class="display" style="width:100%">
                                                <thead>
                                                    <td><span class='headernya'>Kebun</span></td>
                                                    <td><span class='headernya'>PKS</span></td>
                                                    <td><span class='headernya'>Wilayah</span></td>
                                                </thead>
                                               <?php
                                               $no=1;
                                                $data = mysqli_query($koneksi,"select * from wb_komsel where id <> 30 and deleted=0");
                                                while($d = mysqli_fetch_array($data)){
                                                    ?>
                                                    <tr>
                                                        <td><?=$d['komsel']?></td>
                                                        <td align='left'><?=$d['pks']?></td>
                                                        <td><?=$d['wilayah']?></td>
                                                </tr>
                                                    <?php
                                                $no++;

                                                }
                                               ?>
                                            </table>
                                                <!-- <br><br>
                                                <h3 class="bold-title">What i do</h3>
                                                <div class="pr-tags fl-wrap">
                                                    <span>Services : </span>
                                                    <ul>
                                                        <li><a href="#">Architecture</a></li>
                                                        <li><a href="#">Design</a></li>
                                                        <li><a href="#">Photography</a></li>
                                                    </ul>
                                                </div>
                                                <span class="bold-separator"></span>
                                                <div class="clearfix"></div>
                                                <a href="portfolio.html" class="btn float-btn flat-btn">My portfolio</a> -->
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <!-- <div class="box-item">
                                                <img  src="assets/images/team/6.jpg"  class="respimg" alt="">
                                                <div class="overlay"></div>
                                                <a href="assets/images/team/6.jpg" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg dec-bg left-pos-dec"  data-bg="assets/images/bg/14.jpg"></div>
                        </section>
                        <!--  section end--> 
                        <!--  section--> 
                        <!-- <section id="sec3" class="sml-pad-sec">
                            <div class="container">
                                <div class="facts-wrap fl-wrap">
                                    <div class="inline-facts-holder fl-wrap"> -->
                                        <!-- inline-facts -->
                                        <!-- <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="461" data-num="461">461</div>
                                                </div>
                                            </div>
                                            <h6>Finished projects</h6>
                                        </div> -->
                                        <!-- inline-facts end -->
                                        <!-- inline-facts  -->
                                        <!-- <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="461" data-num="461">461</div>
                                                </div>
                                            </div>
                                            <h6>Finished projects</h6>
                                        </div> -->
                                        <!-- inline-facts end -->
                                        <!-- inline-facts  -->
                                        <!-- <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="168" data-num="168">168</div>
                                                </div>
                                            </div>
                                            <h6>Happy customers</h6>
                                        </div> -->
                                        <!-- inline-facts end -->
                                        <!-- inline-facts  -->
                                        <!-- <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="222" data-num="222">222</div>
                                                </div>
                                            </div>
                                            <h6>Working hours </h6>
                                        </div> -->
                                        <!-- inline-facts end -->
                                    <!-- </div>
                                </div>
                            </div>
                        </section> -->
                        <!--  section end--> 
                        <!--  section --> 
                        <!-- <section id="sec4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="pr-title">
                                            My  Skills
                                            <span>Lorem Ipsum generators on the Internet tend to repeat king this the first true generator  </span>
                                        </div>
                                    </div>
                                    <div class="col-md-8"> -->
                                        <!-- skills  -->
                                        <!-- <div class="piechart-holder animaper" data-skcolor="#000">
                                            <div class="row"> -->
                                                <!-- 1  -->
                                                <!-- <div class="piechart col-md-4" >
                                                    <span class="chart" data-percent="85">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <div class="skills-description">
                                                        <h4>Design</h4>
                                                    </div>
                                                </div> -->
                                                <!-- 1 end -->
                                                <!-- 2  -->
                                                <!-- <div class="piechart col-md-4">
                                                    <span class="chart" data-percent="95">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <div class="skills-description">
                                                        <h4>Architecture</h4>
                                                    </div>
                                                </div> -->
                                                <!-- 2 end  -->
                                                <!-- 3  -->
                                                <!-- <div class="piechart col-md-4">
                                                    <span class="chart" data-percent="80">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <div class="skills-description">
                                                        <h4>Construction</h4>
                                                    </div>
                                                </div> -->
                                                <!-- 3  end-->																
                                            <!-- </div>
                                        </div> -->
                                        <!-- skills  end-->
                                    <!-- </div>
                                </div>
                            </div> -->
                            <div class="partcile-dec"></div>
                            <div class="border-section-wrap">
                                <div class="border-section"></div>
                            </div>
                        </section>
                        <!--  section end--> 
                        <!--  section--> 
                        <!-- <section class="parallax-section header-section  " data-scrollax-parent="true" id="sec5">
                            <div class="bg"  data-bg="assets/images/bg/1.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="pr-title">
                                            Testimonials
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="single-slider testilider fl-wrap" data-effects="slide">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper"> -->
                                                    <!-- swiper-slide -->
                                                    <!-- <div class="swiper-slide">
                                                        <div class="testi-item fl-wrap">
                                                            <h3>Andy Smith</h3>
                                                            <p>"All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words"</p>
                                                            <a href="#" class="btn float-btn flat-btn" target="_blank">Via Twitter</a>
                                                        </div>
                                                    </div> -->
                                                    <!-- swiper-slide end-->
                                                    <!-- swiper-slide -->
                                                    <!-- <div class="swiper-slide">
                                                        <div class="testi-item fl-wrap">
                                                            <h3>Liza Mirovsky</h3>
                                                            <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Integer iaculis tellus nulla, quis imperdiet magna venenatis vitae"</p>
                                                            <a href="#" class="btn float-btn flat-btn" target="_blank">Via Facebook</a>
                                                        </div>
                                                    </div> -->
                                                    <!-- swiper-slide end-->
                                                    <!-- swiper-slide -->
                                                    <!-- <div class="swiper-slide">
                                                        <div class="testi-item fl-wrap">
                                                            <h3>Gary Trust</h3>
                                                            <p>"If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text."</p>
                                                            <a href="#" class="btn float-btn flat-btn" target="_blank">Via Myspace</a>
                                                        </div>
                                                    </div> -->
                                                    <!-- swiper-slide end-->
                                                <!-- </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                                                <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                        <!--  section end--> 
                        <!--  section--> 
                        <!--  section end--> 
                        <div class="limit-box fl-wrap"></div>
                    </div>

<script>
$(document).ready(function() {
    $('#tbl-community').DataTable({"bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false});
} );
</script>