<style>
.two-coulms .gallery-item , .two-coulms .grid-sizer{
	width:45%;
}
.two-coulms .gallery-item-second {
	width:45%;
}
.four-coulms .gallery-item , .four-coulms .grid-sizer{
	width:25%;
}
.four-coulms .gallery-item-second {
	width:25%;
}
</style>
<div class="content">
                        <!--  section --> 
                        <section class="parallax-section header-section" data-scrollax-parent="true" id="sec1">
                            <div class="bg"  data-bg="assets/images/bg/gpdi.png" data-scrollax="properties: { translateY: '200px' }"></div>
                           
                            <div class="container big-container">
                                <div class="section-title">
                                    <h3>GPdI Bukit Hermon</h3>
                                    <div class="separator trsp-separator"></div>
                                    <h2>Our Pastors & Staffs</h2>
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
                                        <div class="col-md-12">
                                            <div class="content-wrap about-wrap">
                                            <h3 class="bold-title">Our Pastors</h3>
                                            <div class="gallery-items border-folio-conteainer   vis-por-info two-coulms">
												<?php 
													$result_head = mysqli_query($koneksi,"select * from `wb_pastors`
													where deleted_at is null");
													while($d_head = mysqli_fetch_array($result_head)){
												?>
												<div class="gallery-item houses apartments"  style='margin-right:5%;'>
													<div class="grid-item-holder">
														<div class="box-item">
															<img  src="admin/image/pastors/<?php echo $d_head['photos_pastors']; ?>"   alt="">
															<div class="overlay"></div>
															<a href="admin/image/pastors/<?php echo $d_head['photos_pastors']; ?>" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
														</div>
														<div class="grid-item">
															<h3><a href="javascript:void(0)" style='font-size:20px;'><?php echo str_replace("&","&<br>",$d_head['nama_pastors']); ?></a></h3>
														</div>
													</div>
												</div>
												<?php } ?>
												
                               				 </div>
												
											</div>
											<div class="content-wrap about-wrap">
                                            <h3 class="bold-title"><br>Our Pastoral Staffs</h3>
												
											<div class="gallery-items border-folio-conteainer   vis-por-info four-coulms">
												<?php 
													$result_head = mysqli_query($koneksi,"select * from `wb_staffs`
													where deleted_at is null");
													while($d_head = mysqli_fetch_array($result_head)){
												?>
												<div class="gallery-item houses apartments">
													<div class="grid-item-holder">
														<div class="box-item">
															<img  src="admin/image/staffs/<?php echo $d_head['photos_staffs']; ?>"   alt="">
															<div class="overlay"></div>
															<a href="admin/image/staffs/<?php echo $d_head['photos_staffs']; ?>" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
														</div>
														<div class="grid-item">
															<h3><a href="javascript:void(0)"><?php echo $d_head['nama_staffs']; ?></a></h3>
														</div>
													</div>
												</div>
												<?php } ?>
												
                               				 </div>
												
                                        </div>

                                    </div>

                                </div>
                            </div>
                            
                            <!-- <div class="bg dec-bg left-pos-dec"  data-bg="assets/images/bg/14.jpg"></div> -->
                        </section>
                        
                        <!--  section end--> 
                        
                            <div class="partcile-dec"></div>
                            <div class="border-section-wrap">
                                <div class="border-section"></div>
                            </div>
                        </section>
                        <!--  section end--> 
                        
                        <div class="limit-box fl-wrap"></div>
                    </div>