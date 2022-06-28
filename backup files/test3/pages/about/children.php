<?php
    $data = mysqli_query($koneksi,"select * from wb_embed where id = 2");
    $d = mysqli_fetch_array($data);
    $embed = $d['embed'];
?>

<div class="content">
                        <!--  section --> 
                        <section class="parallax-section header-section" data-scrollax-parent="true" id="sec1">
                            <div class="bg"  data-bg="assets/images/bg/gpdi.png" data-scrollax="properties: { translateY: '200px' }"></div>
                           
                            <div class="container big-container">
                                <div class="section-title">
                                    <h3>GPdI Bukit Hermon</h3>
                                    <div class="separator trsp-separator"></div>
                                    <h2>CHILDREN CHURCH</h2>
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
                                            <h3 class="bold-title">Children Church</h3>
												<div class="gallery-items border-folio-conteainer   vis-por-info four-coulms">
												<div class="gallery-item houses apartments">
													<div class="grid-item-holder">
														<div class="box-item">
															<img  src="assets/images/about/children/children-1.jpg"   alt="">
															<div class="overlay"></div>
															<a href="assets/images/about/children/children-1.jpg" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
														</div>
													</div>
												</div>

												<div class="gallery-item houses interior">
													<div class="grid-item-holder">
														<div class="box-item">
															<img  src="assets/images/about/children/children-2.jpg"   alt="">
															<div class="overlay"></div>
															<a href="assets/images/about/children/children-2.jpg" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
														</div>
													</div>
												</div>
												
												<div class="gallery-item houses apartments">
													<div class="grid-item-holder">
														<div class="box-item">
															<img  src="assets/images/about/children/children-3.jpeg"   alt="">
															<div class="overlay"></div>
															<a href="assets/images/about/children/children-3.jpeg" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
														</div>
													</div>
												</div>

												<div class="gallery-item houses apartments">
													<div class="grid-item-holder">
														<div class="box-item">
															<img  src="assets/images/about/children/children-4.jpeg"   alt="">
															<div class="overlay"></div>
															<a href="assets/images/about/children/children-4.jpeg" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
														</div>
													</div>
												</div>
                               				 </div>
												
                                               <!-- <p><iframe style='width:100%;' height=690 src="https://www.youtube.com/embed/<?=$embed?>"></iframe></p>
                                                 <p><b>Gereja Pantekosta di Indonesia "Bukit Hermon"</b> adalah gereja yang otonom di bawah naungan organisasi Gereja Pantekosta di Indonesia (GPdI), dengan Badan Hukum Departemen Agama RI Kep. No. 30, 1989 tanggal 3 Februari 1988. (d/h Beslit Pemerintah No. 33 Tgl. 4-6-1937 STBL. TH. 1937 No. 368 Keterangan Depag RI No. E/VII/156/929/73 Tgl. 2-10-1973)</p>

                                                <p>Berdirinya gereja yang dulu bernama <b>GPdI Cimindi</b> ini merupakan realisasi “Mimpi” dari seorang pekerja gereja, bernama <b>Anthon Litha</b>, yaitu “mimpi” mengumpulkan satu persatu dari banyaknya penduduk yang mayoritas belum mengenal Kristus sebagai Tuhan dan Juruselamat.</p>

                                                <p>Dengan berbekal tekad yang didasari akan keyakinannya yang kuat, maka tanggal <b>5 Juli 1981</b> dimulailah ibadah pertama dengan menggunakan rumah kontrakan yang dijadikan tempat ibadah sekaligus rumah pastori yang terletak di <b>Jalan Leuwigajah 28, Cimindi – Cimahi</b>. Ruang kebaktian yang kecil desertai penambahan jumlah sidang jemaat membuat suasana kebaktian terasa tak nyaman lagi. Maka timbullah gagasan untuk memiliki sebuah bangunan milik sendiri yang cukup baik. Sidang jemaat mulai melakukan aksi doa dan pengumpulan dana serta pencarian lokasi.</p>

                                                <p>Berkat pimpinan Tuhan diperoleh sebuah lokasi berupa tanah kosong seluas +/- 1400m2 yang dikelilingi pabrik-pabrik yang terletak di <b>Jalan Leuwigajah 103</b>, tak jauh dari rumah ibadah yang dikontrak. Pekerjaan pembangunan sejak <b>4 April 1988</b>, peletakkan batu pertama pada tanggal <b>11 April 1988</b> dan atas Rahmat dan Anugerah-Nya selesai dan ditahbiskan pada tanggal <b>4 Juni 1991</b> dengan nama <b>GPdI Bukit Hermon</b>.</p> -->
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <!-- <div class="box-item">
                                                <img  src="assets/images/team/6.jpg"  class="respimg" alt="">
                                               
                                                <a href="assets/images/team/6.jpg" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
                                            </div> -->
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